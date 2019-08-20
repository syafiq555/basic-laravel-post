@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Post Create</h1>
  <form method="post" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
      <label>title</label>
      <input class="form-control" type="text" name="title" />
    </div>
    <div class="form-group">
      <label>body</label>
      <input class="form-control" type="text" name="body" />
    </div>
    <input class="btn btn-primary" type="submit" value="Save Post">
  </form>
</div>
@endsection