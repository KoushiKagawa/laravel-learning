@extends('layouts.app')
@section('content')

<p>タイトル：{{ $post->title }}</p>
<p>詳細内容：{{ $post->content }}</p>
<p>ユーザID：{{ $post->user_id }}</p>
@if ($post->image_url)
<p>画像：<img src ="/{{str_replace('public/', 'storage/', $post->image_url) }}" width="450px"></p>
@endif
<p>日付：{{ $post->created_at->format('Y年m月d日') }}</p>
@endsection
