@extends('layouts.app')

@section('content')

    <article>
        <form action="/post" method="post">
            @csrf
            <label><span>Titre</span><br>
                <input type="text"
                       name="title">
            </label><br>
            <label for=""><span>Contenu</span><br>
                <textarea name="content"
                          id="content"
                          cols="30"
                          rows="10"></textarea>
            </label>
            <button type="submit">Créer</button>
        </form>
    </article>

@endsection
