@extends('layouts.layout')
@section('content')

<div class="card m-4">
  <div class="card-body">
  ユーザー名：{{ $post_detail->user->name }}<br>
  ユーザーID：{{ $post_detail->user_id }}<br>
  投稿時間：{{ $post_detail->created_at }}<br>
  投稿：{{ $post_detail->body }}<br>
  </div>
</div>

@endsection