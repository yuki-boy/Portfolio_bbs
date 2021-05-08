<h2>ログインユーザー：{{ Auth::user()->name }}</h2>

<div class="template-demo">
  <a href="{{ route('posts.create') }}"><button type="button" class="btn btn-secondary btn-primaryvbtn-fw">Add Category</button></a>
</div>