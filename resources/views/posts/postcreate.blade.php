<div>
  <form action="{{ route('posts.add') }}" method="POST">
  @csrf
  <textarea name="body" id="" cols="30" rows="10"></textarea><br>
  <input type="submit" value="投稿">
  </form>
</div>