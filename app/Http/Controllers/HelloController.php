<?php

namespace App\Http\Controllers;
use App\Http\Requests\HelloRequest;
use App\Http\Requests\DeleteRequest;

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
    
    public function create(HelloRequest $request)
    {
        $param = [
           'name' => $request->name,
           'comment' => $request->comment,
        ];
        DB::insert('insert into people (handle,comment) values (:name,:comment)',$param);
        
        return redirect('hello');
    }

    public function remove(){
        $items = DB::select('select * from people');
        return view('hello.rem',['items' => $items]);
    }
    
    public function delete(DeleteRequest $request)
    {
        $param = [
          'id' => $request->num,
        ];
        
        DB::delete('delete from people where id = :id',$param);
        
        return redirect('hello/rem');
        
    }
    
    public function question(Request $request)
    {
        return view('hello.question');
    }
    
   
}
