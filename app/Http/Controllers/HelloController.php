<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(){
        $items = DB::select('select * from people');
        return view('hello.add',['items' => $items]);
        
    }
    
    public function add(Request $request)
    {
        return view('hello.add');
    }
    
    public function create(Request $request)
    {
        $param = [
           'name' => $request->name,
           'comment' => $request->comment,
        ];
        DB::insert('insert into people (handle,comment) values (:name,:comment)',$param);
        
        return redirect('hello');
    }
}
