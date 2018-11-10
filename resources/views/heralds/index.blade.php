@extends('layouts.app')
@section('title', 'Posts')
@section('content')


@guest
<h1>Not logged in!</h1>
@else
<div class="jumbotron">
<h1 class="display-3">Herald Index</h1>
@foreach ($heralds as $post)
    <a href="/heralds/{{ $post->id }}"><p class="lead">{{ $post->title }} at {{ $post->created_at }} by {{ $post->author }} </p></a>
@endforeach
</div>
@endguest
@endsection