<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexSignUp()
    {
        return view('sign_up');
    }

    public function signUp(Request $request)
    {
        $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $client->request('POST', 'signup', [
                'multipart' => [
                    [
                        'name' => 'full_name',
                        'contents' => $request->get('full_name')
                    ],
                    [
                        'name' => 'phone_number',
                        'contents' => $request->get('phone_number')
                    ],
                    [
                        'name' => 'email',
                        'contents' => $request->get('email')
                    ],
                    [
                        'name' => 'password',
                        'contents' => $request->get('password')
                    ],
                    [
                        'name' => 'role',
                        'contents' => $request->get('role')
                    ]
                ]
            ]);
        } catch (ClientException $e) {
            $responseBody = json_decode($e->getResponse()->getBody(),true);
            return view('layouts.failed', ['res_stat_code' => $e->getResponse()->getStatusCode(), 'res_body' => $responseBody]);
        }

        return redirect()->route('auth.login');
    }

    public function indexLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $client = new Client(['base_uri' => env("GATEWAY_HOST")]);
        try {
            $response = $client->request('POST', 'login', [
                'multipart' => [
                    [
                        'name' => 'email',
                        'contents' => $request->get('email')
                    ],
                    [
                        'name' => 'password',
                        'contents' => $request->get('password')
                    ]
                ]
            ]);
        } catch (ClientException $e) {
            $responseBody = json_decode($e->getResponse()->getBody(),true);
            return view('layouts.failed', ['res_stat_code' => $e->getResponse()->getStatusCode(), 'res_body' => $responseBody]);
        }
        $responseBodyJSON = $response->getBody()->getContents();
        $responseBodyDecoded = json_decode($responseBodyJSON, true);
        session()->put("kudaki-token", $responseBodyDecoded["data"]["token"]);

        return redirect()->route('home.organizer');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home.landing');
    }
}
