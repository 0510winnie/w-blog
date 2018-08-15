@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">

      {{-- form starts --}}
      <form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Title:</label>
          <input type="text" class="form-control" name="title" placeholder="Enter Post Title" required>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Content: </label>
          <textarea class="form-control" rows="3" placeholder="Write Your Post Content Here ..." name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      {{-- form ends --}}
    </div>
  </div>
</div>
@endsection
