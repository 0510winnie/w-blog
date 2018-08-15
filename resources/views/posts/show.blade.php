@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
      <div class="card shadow rounded">
          <div class="card-header">
            Blog Post
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.edit', $post->id )}}" class="btn btn-outline-success">
              Edit
            </a>
            <a href="{{ route('posts.index')}}" class="btn btn-outline-primary">Return</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
