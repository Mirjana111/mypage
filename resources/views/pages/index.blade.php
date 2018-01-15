
@extends('layouts.app')

@section('content')

  <div class="jumbotron text-center">

  <h1>{{ $title }}</h1>

      <p>This is application for students to help them cook healthy, fast, cheap and simple.</p>
    </div>
    
    @section('sidebar')
      @parent
      <b><p>Check here</p></b>

@endsection
@endsection
