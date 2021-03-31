<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\SigninApi;


class ShowapiCon extends Controller
{
    //
    public function list(Request $request)
    {   
        $userList = new SigninApi($request);
        $res = $userList->getlists();
        //return response()->json($res, 200);
    





    }
}
