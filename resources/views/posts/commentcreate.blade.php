@extends('layouts.layout')
@section('content')

<!-- <div class="card m-4">
  <div class="card-body">
  
  </div>
</div> -->

<form method="post" action="{{ route('comments.save', ['post_id' => $post_id]) }}">
  @csrf
  <input name="post_id" type="hidden" value="{{ $post_id }}">
  
  <textarea name="body" placeholder="140字以内でコメントしてください" cols="30" rows="5">{{ old('comment') }}</textarea><br>
  
  <input type="submit" value="コメントする">
</form>



@endsection