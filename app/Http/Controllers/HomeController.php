<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function indexOrganizer()
    {
        return view('home');
    }

    public function failed($res_stat_code)
    {
        return view('layouts.failed', ['res_stat_code' => $res_stat_code]);
    }

    public function indexHomeOrganizer()
    {
        return view('home_organizer');
    }

    public function transactions()
    {
        $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $response = $client->request('GET', 'event-payment/transactions', [
                'headers' => ['Kudaki-Token' => session()->get('kudaki-token')]
            ]);
        } catch (ClientException $e) {
            $responseBody = json_decode($e->getResponse()->getBody());
            return view('layouts.failed', ['res_stat_code' => $e->getResponse()->getStatusCode(), 'res_body' => $responseBody]);
        }
        $responseBodyJSON = $response->getBody()->getContents();
        $responseBodyDecoded = json_decode($responseBodyJSON, true);

        return view('transaction', [
            'response' => $responseBodyDecoded
        ]);
    }
}
