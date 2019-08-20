@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <a href="{{route('posts.create')}}" class="float-right btn btn-success">Create new Post</a>
    </div>
  </div>
  <div class="responsive-table">
    <table class="table table-bordered table-hover table-striped">
      <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th></th>
      </tr>
      @foreach ($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td class="w-25">
          <a href="{{route('posts.edit', $post->id)}}" class="btn btn-success">Edit</a>
          <form method="post" action="{{route('posts.destroy', $post->id)}}">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="delete" />
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  {{-- @foreach ($posts as $post)
    <div class="col-4 pt-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
  <p class="card-text">{{$post->body}}</p>
  <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">View details</a>
  <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
</div>
</div>
</div>
@endforeach --}}
</div>
</div>
@endsection