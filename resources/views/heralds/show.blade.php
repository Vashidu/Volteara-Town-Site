@extends('layouts.app')
@section('title', 'Town Herald')
@section('content')
@guest
<h1>Not logged in!</h1>
@else
<div class="jumbotron">
  <h1 class="display-3">{{ $herald->title }}</h1>
  <p class="lead">{{ $herald->created_at }}</p>
  <hr class="my-4">
  <p>{{ $herald->herald }}</p>
</div>
@endguest
@endsection