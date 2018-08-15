@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3 mt-5">

      {{-- header --}}
        <div class="jumbotron shadow rounded">
            <h2 class="display-5">Hello, world!</h2>
            <hr class="my-4">
            <p>We are learning how to create a blog using Laravel !</p>
            <p class="lead">
              <a href="{{ route('posts.create') }}" class="btn btn-primary p-2 mr-1">Create New Post</a>
            </p>
        </div>
        {{-- header ends --}}

        {{-- Individual Post --}}
          @foreach($posts as $post)
            <div class="card shadow rounded mt-3 mb-3">
                <div class="card-body">
                  <h4 class="card-title">{{ $post->title }}</h4>
                  <h6 class="card-subtitle mb-2 text-muted">Published： {{ $post->created_at->diffForHumans() }}</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                  {{-- buttons --}}
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-success p-2 mr-1">View</a>
                    <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-outline-danger p-2" >Delete</button>
                    </form>
                  </div>

                </div>
            </div>
          @endforeach
        {{-- End of Individual Post --}}

        {{-- pagination --}}
        {{ $posts->links() }}


    </div>
  </div>
</div>
@endsection
