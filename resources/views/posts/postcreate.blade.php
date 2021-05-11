@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('posts.save') }}">
@csrf
  <div>
  <textarea name="body" cols="30" rows="10" placeholder="140字以内で投稿して下さい">{{ old('body') }}</textarea><br>

  <input type="submit" value="投稿">
  </div>
</form>



@endsection