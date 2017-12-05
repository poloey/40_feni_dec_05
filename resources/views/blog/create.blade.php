@extends('blog.master')

@section('content')
<form action="/create" method="post">
  {!! csrf_field() !!}
  <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="" cols="30" rows="10" class="form-control" required></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-info">Submit</button>
  </div>
</form>
@endsection