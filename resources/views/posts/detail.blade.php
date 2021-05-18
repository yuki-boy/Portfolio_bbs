@extends('layouts.layout')
@section('content')

@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert" id="timeout">
  {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="card m-4">
  <div class="card-body">
    ユーザー名：{{ $post_detail->user->name }}<br>
    ユーザーID：{{ $post_detail->user_id }}<br>
    投稿時間：{{ $post_detail->created_at }}<br>
    投稿：{{ $post_detail->body }}<br>

    @if($post_detail->user_id == Auth::id())
    <a href="{{ route('posts.delete', ['post_id' => $post_detail->id]) }}" style="float: right;">
    <button type="button" class="btn btn-secondary btn-sm" onclick="return confirm('削除しますか？')">削除</button></a>
    @endif

    <a href="{{ route('comments.create', ['post_id' => $post_detail->id]) }}">
    <button type="button" class="btn btn-secondary btn-sm">コメント</button></a>
  </div>
</div>

<h2>コメント</h2>
@forelse($post_detail->comments as $comment)
  <div class="card m-4">
    <div class="card-body">
      {{ $comment->user->name }}：
      {{ $comment->body }}

      @if($comment->user_id == Auth::id())
      <a href="{{ route('comments.delete', ['post_id' => $post_detail->id, 'user_id' => $comment->user_id, 'comment_id' => $comment->id]) }}">
      <button type="button" class="btn btn-secondary btn-sm" style="float: right;" onclick="return confirm('削除しますか？')">削除</button></a>
      @endif
    </div>
  </div>
@empty
  <p>コメントはありません</p>
@endforelse

@endsection