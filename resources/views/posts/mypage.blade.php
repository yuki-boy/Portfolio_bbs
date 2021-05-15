@extends('layouts.layout')
@section('content')

<div class="card m-4">
  <div class="card-header">
    <strong>マイページ</strong>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ユーザー：{{ Auth::user()->name }}</li>
    <li class="list-group-item">ユーザーID：{{ Auth::user()->id }}</li>
    <li class="list-group-item">メールアドレス：{{ Auth::user()->email }}</li>
  </ul>
</div>

@foreach($myPages as $myPage)
  <div class="card m-4">
    <div class="card-body">
      {{ $myPage->body }}<br>
    </div>
  </div>
@endforeach



@endsection