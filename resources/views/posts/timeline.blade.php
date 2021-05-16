@extends('layouts.layout')
@section('content')

@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<h2 class="timeline_title">ログインユーザー：{{ Auth::user()->name }}</h2>

@foreach($allPost as $eachPost)
  <div class="card m-4">
    <div class="card-body">
      <strong>{{ $eachPost->name }}</strong><br>
      {{ $eachPost->body }}<br>

    @if($eachPost->Like_Check())
      <a href="{{ route('unlike', ['post_id' => $eachPost->id, 'user_id' => $eachPost->user_id]) }}"><i class="fa fa-star" aria-hidden="true" style="color:red"></i></a>
    @else
      <a href="{{ route('like', ['post_id' => $eachPost->id, 'user_id' => $eachPost->user_id]) }}"><i class="fa fa-star" aria-hidden="true" style="color:grey"></i></a>
    @endif
      {{ $eachPost->likes->count() }}

      <a href="{{ route('comments.create', ['post_id' => $eachPost->id]) }}">
      <i class="far fa-comment style"></i></a>
      {{ $eachPost->comments->count() }}

      <a href="{{ route('posts.detail', ['post_id' => $eachPost->id]) }}">
      <button type="button" class="btn btn-secondary btn-sm" style="float: right;">詳細</button></a>

    </div>
  </div>
@endforeach





@endsection