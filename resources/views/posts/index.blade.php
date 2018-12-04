@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <article>
            <h1><a href="/post/{{$post->id}}">{{$post->title}}</a></h1>
            <div>{{$post->content}}</div>
            <small>{{$post->user->name}}</small>
        </article>
    @endforeach
@endsection
