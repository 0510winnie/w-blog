@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">

      {{-- form starts --}}
      <form action="{{ route('posts.update', $post->id) }} " method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
          <label for="exampleInputEmail1">Title:</label>
          <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Content: </label>
          <textarea class="form-control" rows="3" name="content" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('posts.index')}}" class="btn btn-primary">Cancel</a>
      </form>
      {{-- form ends --}}
    </div>
  </div>
</div>
@endsection
