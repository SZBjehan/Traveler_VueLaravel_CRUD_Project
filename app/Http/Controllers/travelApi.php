<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlist;
use DB;
use App\User;

class travelApi extends Controller
{
    //
    public function index()
    {
        $data = userlist::all();
        return $data;
    }

    public function create()
    {
//
    }

    public function store(Request $request)
    {
        $req = new userlist;
        $req->id = $request->id;
        $req->name = $request->name;
        $req->email = $request->email;

        $res = $req->save();
        if($res){
            return ["result"=>"Account Added"];
        }else{
            return ["result"=>"Account not Added"];
        }
        
    }

    public function show($id)
    {
        $res = userlist::find($id);
        return $res;
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $req = userlist::find($id);
        $req->id = $request->id;
        $req->name = $request->name;
        $req->email = $request->email;

        $res = $req->save();
        if($res){
            return ["result"=>"Account Updated"];
        }else{
            return ["result"=>"Account not Updated"];
        }
    }

    public function destroy($id)
    {
        $res = userlist::find($id);
        $result = $res = delete();
        if($result){
            return ["result"=>"Post Deleted"];
        }else{
            return ["result"=>"Post Not Deleted"];
        }
    }
}
