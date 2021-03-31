<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userlist;
use DB;

class travellersController extends Controller
{
    //
    public function show()
    {   
        $data = userlist::all();
        return view('list',['showList'=> $data]);


    }

    public function create(Request $request)
    {   
        DB::table('userlists')->insert([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return back()->with('create','Account Added successfully');

    }

    public function edit($id)
    {   
        $edt = DB::table('userlists')->where('id', $id)->first();
        return view('edit',compact('edt'));


    }
    public function update(Request $request)
    {   
        DB::table('userlists')->where('id', $request->id)->update([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return back()->with('update','List Updated Successfully');
    }
    
    public function delete($id)
    {   
        DB::table('userlists')->where('id',$id)->delete();
        return back()->with('delete','Account Deleted Successfully');


    }


}
