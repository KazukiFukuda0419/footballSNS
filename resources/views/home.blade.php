<html>
<head>
<meta charset='utf-8'>
</head>
<body>
こんにちは！
@if (Auth::check())
{{\Auth::user()->name}}さん<br />
<a href="/auth/logout">ログアウト</a>
<p><a href="{{action('HelloController@remove')}}">コメント削除ページ</a></p>
<p><a href="{{action('HelloController@add1')}}">コメント投稿ページ</a></p>
<p><a href="{{action('HelloController@question')}}">アンケート投票ページ</a></p>
@else
ゲストさん<br />
　　<a href="/auth/login">ログイン</a><br />
　　<a href="/auth/register">会員登録</a>
@endif
</body>
</html>
