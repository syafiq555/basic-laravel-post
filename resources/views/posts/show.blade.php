@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="page-title">{{$post->title}}</h2>
      <textarea name="asd" class="form-control" disabled id="" cols="30" rows="10">
        {{$post->body}}
      </textarea>
    </div>
  </div>
</div>
@endsection