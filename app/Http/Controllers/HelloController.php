<?php

namespace App\Http\Controllers;
use App\Http\Requests\HelloRequest;
use App\Http\Requests\DeleteRequest;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(){
        $items = DB::select('select * from comments');
        return view('hello.add',['items' => $items]);
        
    }
    
    public function add(){
        return view('hello.bulletin');
    }
    
    public function add1(Request $request)
    {
        $items = DB::select('select * from comments');
        return view('hello.add',['items' => $items]);
    }
    
    public function create(HelloRequest $request)
    {
        $param = [
           'name' => $request->name,
           'user_id' => Auth::id(),
           'comment' => $request->comment,
        ];
        DB::insert('insert into comments (handle,user_id,comment) values (:name,:user_id,:comment)',$param);
        
        return redirect('hello');
    }

    public function remove(){
        $items = DB::select('select * from comments');
        return view('hello.rem',['items' => $items]);
    }
    
    public function delete(DeleteRequest $request)
    {
        $param = [
          'id' => $request->num,
        ];
        
        $logs = DB::table('comments')->where('id',$request->num)->first();
        if( Auth::id() !== $logs->user_id){
            $data=['msg' => '注意！:消せるのは、自分が書いたコメントだけです。',];
            return view('hello.add',$data);
        }
        
        DB::delete('delete from comments where id = :id',$param);
        
        return redirect('hello/rem');
        
    }
    
    public function question(Request $request)
    {
        return view('hello.question');
    }
    
   
}
