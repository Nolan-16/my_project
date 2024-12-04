<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 接続用 class

class TopController extends Controller {
    public function index( Request $request ) {
        $phpValue="ひとよひとよにひとみごろ";

        // 参照処理
        // $records=DB::connection('mysql')->select("select * from items");
        // $name = $records[0]->name;

        // インサート処理
        // $insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'メロン',2000)");

        // 更新処理
        // $updateResult = DB::connection("mysql")->update("update items set price = 600 where name ='りんご'");

        // デリート処理
        // $deleteResult = DB::connection("mysql")->delete("delete from items where name ='りんご'");
        // dd($deleteResult);

        return view("top/index" , ["phpValue" => $phpValue]);
    }
}
