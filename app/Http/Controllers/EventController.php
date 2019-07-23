<?php

namespace App\Http\Controllers;

use Exception;
use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function addEvent(Request $request)
    {
        try {
            $durationFromDate = new DateTime($request->get('duration_from'));
            $durationToDate = new DateTime($request->get('duration_to'));
            $adDurationFrom = new DateTime($request->get('ad_duration_from'));
            $adDurationTo = new DateTime($request->get('ad_duration_to'));

            $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
            $response = $client->request('POST', 'event', [
                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')],
                'multipart' => [
                    ['name' => 'name', 'contents' => $request->get('name')],
                    ['name' => 'venue', 'contents' => $request->get('venue')],
                    ['name' => 'description', 'contents' => $request->get('description')],
                    ['name' => 'duration_from', 'contents' => $durationFromDate->getTimestamp()],
                    ['name' => 'duration_to', 'contents' => $durationToDate->getTimestamp()],
                    ['name' => 'ad_duration_from', 'contents' => $adDurationFrom->getTimestamp()],
                    ['name' => 'ad_duration_to', 'contents' => $adDurationTo->getTimestamp()]
                ]
            ]);

            $responseBodyJSON = $response->getBody()->getContents();
            $responseBodyDecoded = json_decode($responseBodyJSON, true);
            $amount = (string) $responseBodyDecoded ["data"]["AMOUNT"] . '.00';
            $purchaseAmount = "" . $responseBodyDecoded ["data"]["PURCHASEAMOUNT"] . '.00';
            $mallID = "" . env("MALLID");
            $sharedKey = "" . env("SHAREDKEY");
            $transIDMerchant = "" . "INVOICE-". $responseBodyDecoded["data"]["TRANSIDMERCHANT"];

            $words = $amount . $mallID . $sharedKey . $transIDMerchant;
            $sha1Words = sha1($words);

            return view('doku_invoice', [
                'res_data' => $responseBodyDecoded,
                'sha1Words' => $sha1Words,
                'amount' => $amount,
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
        }
    }
}
