@extends('layouts.layout')
@section('content')

<h2>マイページ：{{ Auth::user()->name }}</h2>

@foreach($myPages as $myPage)
  <div class="card m-4">
    <div class="card-body">
      {{ $myPage->body }}<br>
    </div>
  </div>
@endforeach



@endsection