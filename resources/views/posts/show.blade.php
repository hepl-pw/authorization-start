@extends('layouts.app')

@section('content')

    <article>
        <h1>{{$post->title}}</h1>
        <div>{{$post->content}}</div>
        <small>{{$post->user->name}}</small>
        <a href="/post/{{$post->id}}/edit">Modifier</a>
        <form action="/post/{{$post->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Supprimer</button>
        </form>
    </article>

@endsection
