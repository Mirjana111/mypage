@extends('layouts.app')

@section('content')
      <h1>{{ $title }}</h1>
      @if(count($services) > 0)
        <ul class="List-group">
            @foreach($services as $service)
              <li class="list-group-item">{{ $service }}</li>
            @endforeach
        </ul>
      @endif
      <div class="well">
        <h1>Buy groceries for cooking</h1>
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</h3>
      </div>
      <br>
      <div class="well">
        <h1>Plan meals</h1>
        <h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
      <br>
      <div class="well">
        <h1>Clean</h1>
        <h3>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
      <br>
      <div class="well">
        <h1>Eat for Health</h1>
        <h3>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
@endsection
