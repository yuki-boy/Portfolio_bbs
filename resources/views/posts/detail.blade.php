@extends('layouts.layout')
@section('content')

<div class="card m-4">
  <div class="card-body">
    ユーザー名：{{ $post_detail->user->name }}<br>
    ユーザーID：{{ $post_detail->user_id }}<br>
    投稿時間：{{ $post_detail->created_at }}<br>
    投稿：{{ $post_detail->body }}<br>

    @if($post_detail->user_id == Auth::id())
    <a href="{{ route('posts.delete', ['post_id' => $post_detail->id]) }}">
    <button type="button" class="btn btn-secondary btn-sm"onclick="return confirm('削除しますか？')">削除</button></a>
    @endif

  </div>
</div>

<form method="post" action="{{ route('comments.save', ['post_id' => $post_detail->id]) }}">
  @csrf
  <input name="post_id" type="hidden" value="{{ $post_detail->id }}">
  
  <textarea name="body" placeholder="140字以内でコメントしてください" cols="30" rows="5">{{ old('comment') }}</textarea><br>
  
  <input type="submit" value="コメントする">
</form>

@endsection