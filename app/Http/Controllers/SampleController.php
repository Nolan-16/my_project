<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue="sampleValue";

        // $insertResult = DB::connection('mysql')->insert("insert into users (ID,email,name,password) values (null, 'a@a.a', 'test','password')");
        // dd($insertResult);

        $deleteResult = DB::connection('mysql')->delete("delete from users where ID = 2");
        dd($deleteResult);

    return view("sample/index" , ["sampleValue"=> $sampleValue]);

    }

}

