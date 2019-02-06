@extends('layouts.app')
@section('content')

@if($errors->any())
  <div class="error">
    <ul>
      @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form method="post" action="{{ route('posts.create') }}" enctype="multipart/form-data">
  @csrf
        <div class="form">
            <div class="form-title">
              <label for="title">タイトル</label> 
              <input class="" name="title" value="{{ old('title') }}">
            </div>
    
            <div class="form-content">
              <label for="content" class="form-content">内容</label> 
              <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>        
            </div>
            
            <div class="form-submit">
              <button type="submit">投稿する</button>
            </div>

        </div>
</form>

@endsection