@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Post Edit</h1>
  <form method="post" action="{{route('posts.update', $post->id)}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label>title</label>
      <input class="form-control" value="{{$post->title}}" type="text" name="title" />
    </div>
    <div class="form-group">
      <label>body</label>
      <input class="form-control" value="{{$post->body}}" type="text" name="body" />
    </div>
    <input class="btn btn-primary" type="submit" value="Save Post">
  </form>
</div>
@endsection