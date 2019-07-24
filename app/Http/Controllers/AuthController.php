<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use function MongoDB\BSON\fromJSON;

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
            $response = $client->request('POST', 'signup', [
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
        } catch (GuzzleException $e) {
            return view('layouts.failed', ['res_stat_code' => $e->getCode()]);
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
        } catch (GuzzleException $e) {
            return view('layouts.failed', ['res_stat_code' => $e->getCode()]);
        }
        $responseBodyJSON = $response->getBody()->getContents();
        $responseBodyDecoded = json_decode($responseBodyJSON, true);
        session()->put("kudaki-token", $responseBodyDecoded["data"]["token"]);

        return redirect()->route('home.organizer');
    }

    public function logout(){
        session()->flush();
        return redirect()->route('home.landing');
    }
}
