@extends('layouts.app')
@section('content')
  <h1>Posts</h1>
  @if(count($posts) >0)
      @foreach ($posts as $post)
          <div class="well">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}">
              </div>
              <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{ $post->title }}<a/></h3>
                  <h3> Posted on {{ $post->created_at }} by {{ $post->user->name }}</h3>
              </div>

              </div>
          </div>
      @endforeach
      {{ $posts->links() }}
  @else
      <p>There is no post!</p>
  @endif
@endsection


{{--       <h1>{{$title}}</h1>



<div class="jumbotron text-center">

  <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>comment --}}
