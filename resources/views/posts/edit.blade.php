@extends('layouts.app')

@section('content')

    <article>
        <form action="/post/{{$post->id}}" method="post">
            @csrf
            @method('patch')
            <label><span>Titre</span><br>
                <input type="text"
                       name="title"
                       value="{{$post->title}}">
            </label><br>
            <label for=""><span>Contenu</span><br>
                <textarea name="content"
                          id="content"
                          cols="30"
                          rows="10">{{$post->content}}</textarea>
            </label>
            <button type="submit">Modifier</button>
        </form>
    </article>

@endsection
