<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class VoteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view('home');
    }
    
    
    public function create(Request $request)
    {
        
        $param = [
        'user_id' => Auth::id(),
        'res' => $request->que,
        ];
        $logs = DB::table('count')->where('user_id',Auth::id())->count();//ユーザーが何回めの投票を行ったか調べ$logs変数に格納する。
        if($logs > 0){    //logsが1以上の場合投票ページに遷移させメッセージを出す。
            $data=['msg' => '注意！:投票は1ユーザーにつき一回です。',];
            return view('hello.question',$data);
        }
        
        DB::insert('insert into count (user_id,res) values (:user_id,:res)',$param);//countテーブルにデータ格納する。
        
        return redirect('hello/res');
    }

    public function count(Request $request)
    {
        $counts1 = DB::table('count')->where('res','=','メッシ')->count();
        $counts2 = DB::table('count')->where('res','=','C・ロナウド')->count();
        $counts3 = DB::table('count')->where('res','=','マラドーナ')->count();
        $counts4 = DB::table('count')->where('res','=','ペレ')->count();
        $counts5 = DB::table('count')->where('res','=','ロナウド')->count();
       
        $counts = [$counts1,$counts2,$counts3,$counts4,$counts5];
        
        return view('hello.result',['counts' => $counts]);
       
    }
   
    
  
}
