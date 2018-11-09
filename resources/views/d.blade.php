@extends('layouts.app')
@section('title', 'Task List')
@section('content')
<h1>The rough todo list</h1>
<ul>
    @foreach($tasks as $task)
    <li>
        {{$task}}
    </li>
    @endforeach
</ul>
@endsection
