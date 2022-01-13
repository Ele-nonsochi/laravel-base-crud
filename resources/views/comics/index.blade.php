@extends('comics.layout')

@section('content')

<div class="container">
     <h1>Comic List</h1>
     <a class="btn btn-link" href="{{ route('comics.create') }} ">Add Comic</a>  

    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach($comics as $comic)
        {{-- <li><a href="{{ route('comics.show', $comic->id ) }}">{{ $comic["title"] }}</a></li> --}}
        <div class="col">
          <div class="card">
            <img src="{{-- {{ $user->avatar ?? 'https://picsum.photos/200' }} --}}"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comic["title"] }}</h5>
              <p class="card-text">{{ $comic["price"] }}</p>
    
              <a href="{{ route('comics.show', $comic->id ) }}" class="card-link">
                Dettagli</a>
    
              <a href="{{ route('comics.edit', $comic->id) }}" class="card-link">
                Modifica</a>
  
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>

@endsection