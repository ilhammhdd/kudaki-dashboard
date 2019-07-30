<?php

namespace App\Http\Controllers;

use DateTime;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent(Request $request)
    {
        $durationFrom = $request->get('duration_from');
        $durationTo = $request->get('duration_to');
        $adDurationFrom = $request->get('ad_duration_from');
        $adDurationTo = $request->get('ad_duration_to');

        if ($durationFrom == null || $durationTo == null || $adDurationFrom == null || $adDurationTo == null) {
            return view('layouts.failed', ['res_stat_code' => 400, 'res_body' => ['errors' => ["missing one of duration"]]]);
        }

        $clientFile = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $responseFile = $clientFile->request('POST', 'file', [
                'multipart' => [
                    ['name' => 'file', 'contents' => fopen($request->file('poster')->getRealPath(), 'r')]
                ]
            ]);

            $responseFileContents = $responseFile->getBody()->getContents();
            $responseFileJSON = json_decode($responseFileContents);

            $durationFromDate = new DateTime($durationFrom);
            $durationToDate = new DateTime($durationTo);
            $adDurationFromDate = new DateTime($adDurationFrom);
            $adDurationToDate = new DateTime($adDurationTo);

            $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
            $response = $client->request('POST', 'event', [
                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')],
                'multipart' => [
                    ['name' => 'name', 'contents' => $request->get('name')],
                    ['name' => 'venue', 'contents' => $request->get('venue')],
                    ['name' => 'description', 'contents' => $request->get('description')],
                    ['name' => 'duration_from', 'contents' => $durationFromDate->getTimestamp()],
                    ['name' => 'duration_to', 'contents' => $durationToDate->getTimestamp()],
                    ['name' => 'ad_duration_from', 'contents' => $adDurationFromDate->getTimestamp()],
                    ['name' => 'ad_duration_to', 'contents' => $adDurationToDate->getTimestamp()],
                    ['name' => 'file_path', 'contents' => $responseFileJSON->data->full_path]
                ]
            ]);

            $responseBodyJSON = $response->getBody()->getContents();
            $responseBodyDecoded = json_decode($responseBodyJSON, true);
            $purchaseAmount = (string)$responseBodyDecoded ["data"]["PURCHASEAMOUNT"] . '.00';
            $mallID = (string)env("MALLID");
            $sharedKey = (string)env("SHAREDKEY");
            $transIDMerchant = (string)"INVOICE-" . $responseBodyDecoded["data"]["TRANSIDMERCHANT"];

            $words = $purchaseAmount . $mallID . $sharedKey . $transIDMerchant;
            $sha1Words = sha1($words);

            $this->triggerPaymentRequestKudakiWebhook($transIDMerchant, $responseBodyDecoded ["data"]["SESSIONID"], $sha1Words);

            return view('doku_invoice', [
                'res_data' => $responseBodyDecoded,
                'sha1Words' => $sha1Words,
                'mallID' => $mallID,
                'sharedKey' => $sharedKey,
                'transIDMerchant' => $transIDMerchant,
                'purchaseAmount' => $purchaseAmount,
            ]);
        } catch (BadResponseException $bre) {
            $decodedResBody = json_decode($bre->getResponse()->getBody()->getContents(), true);
            return view('layouts.failed', ['res_stat_code' => $bre->getCode(), 'res_body' => $decodedResBody]);
        } catch (Exception $e) {
            var_dump($e);
            return $e;
        }


//        try {
//            $durationFromDate = new DateTime($durationFrom);
//            $durationToDate = new DateTime($durationTo);
//            $adDurationFromDate = new DateTime($adDurationFrom);
//            $adDurationToDate = new DateTime($adDurationTo);
//
//            $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
//            $response = $client->request('POST', 'event', [
//                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')],
//                'multipart' => [
//                    ['name' => 'name', 'contents' => $request->get('name')],
//                    ['name' => 'venue', 'contents' => $request->get('venue')],
//                    ['name' => 'description', 'contents' => $request->get('description')],
//                    ['name' => 'duration_from', 'contents' => $durationFromDate->getTimestamp()],
//                    ['name' => 'duration_to', 'contents' => $durationToDate->getTimestamp()],
//                    ['name' => 'ad_duration_from', 'contents' => $adDurationFromDate->getTimestamp()],
//                    ['name' => 'ad_duration_to', 'contents' => $adDurationToDate->getTimestamp()]
//                ]
//            ]);
//
//            $responseBodyJSON = $response->getBody()->getContents();
//            $responseBodyDecoded = json_decode($responseBodyJSON, true);
//            $purchaseAmount = (string)$responseBodyDecoded ["data"]["PURCHASEAMOUNT"] . '.00';
//            $mallID = (string)env("MALLID");
//            $sharedKey = (string)env("SHAREDKEY");
//            $transIDMerchant = (string)"INVOICE-" . $responseBodyDecoded["data"]["TRANSIDMERCHANT"];
//
//            $words = $purchaseAmount . $mallID . $sharedKey . $transIDMerchant;
//            $sha1Words = sha1($words);
//
//            $this->triggerPaymentRequestKudakiWebhook($transIDMerchant, $responseBodyDecoded ["data"]["SESSIONID"], $sha1Words);
//
//            return view('doku_invoice', [
//                'res_data' => $responseBodyDecoded,
//                'sha1Words' => $sha1Words,
//                'mallID' => $mallID,
//                'sharedKey' => $sharedKey,
//                'transIDMerchant' => $transIDMerchant,
//                'purchaseAmount' => $purchaseAmount,
//            ]);
//        } catch (BadResponseException $bre) {
//            $decodedResBody = json_decode($bre->getResponse()->getBody()->getContents(), true);
//            return view('layouts.failed', ['res_stat_code' => $bre->getCode(), 'res_body' => $decodedResBody]);
//        } catch (Exception $e) {
//            var_dump($e);
//            return $e;
//        }
    }

    public function triggerPaymentRequestKudakiWebhook($transactionIdMerchant, $sessionId, $hashedWords)
    {
        $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $response = $client->request('POST', 'event-payment/doku/payment-request', [
                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')],
                'multipart' => [
                    ['name' => 'transaction_id_merchant', 'contents' => $transactionIdMerchant],
                    ['name' => 'session_id', 'contents' => $sessionId],
                    ['name' => 'hashed_words', 'contents' => $hashedWords],
                ]
            ]);
            return $response;
        } catch (ClientException $e) {
            $responseBody = json_decode($e->getResponse()->getBody(), true);
            return view('layouts.failed', ['res_stat_code' => $e->getResponse()->getStatusCode(), 'res_body' => $responseBody]);
        }
    }

    public function publish(Request $request)
    {
        $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $client->request('POST', 'event/publish', [
                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')],
                'multipart' => [
                    ['name' => 'kudaki_event_uuid', 'contents' => $request->get('kudaki_event_uuid')]
                ]
            ]);

            return redirect()->route('transactions');
        } catch (ClientException $e) {
            $responseBody = json_decode($e->getResponse()->getBody(), true);
            return view('layouts.failed', ['res_stat_code' => $e->getResponse()->getStatusCode(), 'res_body' => $responseBody]);
        }
    }
}
