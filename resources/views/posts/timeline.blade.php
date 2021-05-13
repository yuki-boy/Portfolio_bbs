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

<h2>ログインユーザー：{{ Auth::user()->name }}</h2>

<div>
  <a href="{{ route('posts.create') }}">
  <button type="button" class="btn btn-secondary btn-primaryvbtn-fw">
  投稿する
  </button>
  </a>
</div>

<br>

<div>
  <a href="{{ route('mypage', ['user_id' => Auth::user()->id]) }}">
  <!-- <a href="{{ route('mypage',Auth::user()->id) }}"> -->
  <button type="button" class="btn btn-secondary btn-primaryvbtn-fw">
  マイページ
  </button>
  </a>
</div>

@foreach($allPost as $eachPost)
  <div class="card m-4">
    <div class="card-body">
      {{ $eachPost->name }}<br>
      {{ $eachPost->body }}<br>

    @if($eachPost->Like_Check())
      <a href="{{ route('unlike', ['post_id' => $eachPost->id, 'user_id' => $eachPost->user_id]) }}"><i class="fa fa-star" aria-hidden="true" style="color:red"></i></a>
    @else
      <a href="{{ route('like', ['post_id' => $eachPost->id, 'user_id' => $eachPost->user_id]) }}"><i class="fa fa-star" aria-hidden="true" style="color:grey"></i></a>
    @endif


      <a href="{{ route('posts.detail', ['post_id' => $eachPost->id]) }}">
      <button type="button" class="btn btn-secondary btn-sm" style="float: right;">詳細</button></a>

    </div>
  </div>
@endforeach





@endsection