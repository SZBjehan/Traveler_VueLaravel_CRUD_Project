<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

use Illuminate\Http\JsonResponse;

class SigninApi extends Controller
{
    //
    protected $requestData;
    public function __construct($request)
    {
        $this->requestData = (object)$request;
    }
    public function getlists()
    {
        $client = new Client();
        
        try {
            $res = $client->request('POST', env('API_URL') . 'api/v1/auth/sign-in', [
                'form_params' => [
                    'email' => 'superadmin@tripegate.com',
                    'password' => 'password',
                ]
            ]);
            Log::debug($res);
        
            if ($res->getStatusCode() === 200) {
                $data           =  $res->getBody();
                $response       = json_decode($data, TRUE);
                return array(
                    'status' => true,
                    'message' => 'Successfully login',
                    'data' => $response
                );
            } else {
                return array(
                    'status' => false,
                    'message' => 'Server Error'
                );
            }
        } catch (ClientException $e) {
            return array(
                'status'=> false,
                'message'=> $e->getResponse()->getBody()->getContents()
            );
        }
    }

}
