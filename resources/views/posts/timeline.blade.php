@extends('layouts.app')
@section('content')

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
      {{ $eachPost->user->name }}<br>
      {{ $eachPost->body }}<br>
    </div>
  </div>
@endforeach





@endsection