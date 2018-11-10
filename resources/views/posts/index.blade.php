@extends('layouts.app')
@section('title', 'Posts')
@section('content')


@guest
<h1>Not logged in!</h1>
@else
@foreach ($posts as $post)

<div class="jumbotron">
  <h1 class="display-3">{{ $post->title }}</h1>
  <p class="lead">{{ $post->created_at }}</p>
  <hr class="my-4">
  <p>{{ $post->short_description }}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/post/{{ $post->id }}" role="button">Read More</a>
  </p>
</div>
@endforeach
@endguest
@endsection