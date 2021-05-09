@extends('layouts.app')
@section('content')

<div>
  <form action="{{ route('posts.save') }}" method="POST">
  @csrf
    <textarea name="body" cols="30" rows="10" placeholder="140字以内で投稿して下さい"></textarea><br>

    @if($errors->has('body'))
    <span>{{ $errors->first('body') }}</span><br>
    @endif
    <input type="submit" value="投稿">
  </form>
</div>


@endsection