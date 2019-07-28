<?php

namespace App\Http\Controllers;

use App\JWT;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getJWT($jwtToken)
    {
        $jwtParts = explode(".", $jwtToken);
        $jwtHeaderJSON = base64_decode($jwtParts[0]);
        $jwtPayloadJSON = base64_decode($jwtParts[1]);
        $jwtSignatureJSON = base64_decode($jwtParts[2]);

        $jwtHeader = json_decode($jwtHeaderJSON, true);
        $jwtPayload = json_decode($jwtPayloadJSON, true);
        $jwtSignature = json_decode($jwtSignatureJSON, true);

        return new JWT($jwtHeader, $jwtPayload, $jwtSignature);
    }

    public function getUserFromJWT(JWT $jwt)
    {
        $accountType = $jwt->payload["claims"]["user"]["account_type"];
        $email = $jwt->payload["claims"]["user"]["email"];
        $phoneNumber = $jwt->payload["claims"]["user"]["phoneNumber"];
        $role = $jwt->payload["claims"]["user"]["role"];
        $uuid = $jwt->payload["claims"]["user"]["uuid"];

        return new User($accountType, $email, $phoneNumber, $role, $uuid);
    }
}
