@extends('layouts.app')
@section('content')

<h2>マイページ：{{ Auth::user()->name }}</h2>

@endsection