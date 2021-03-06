@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Crea nuovo post</a>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Contenuto</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- ciclo i posts per ognuno creo riga tabella --}}
                      @foreach ($posts as $post )
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            {{-- il contenuto mostro solo i primi 30 caratteri usando la funzione substr di php --}}
                            <td>{{ substr($post->content, 0, 30) }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>Azioni</td>
                        </tr>
                      @endforeach  
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection