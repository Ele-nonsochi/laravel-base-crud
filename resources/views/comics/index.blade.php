@extends('comics.layout')

@section('content')

<div class="container sfondo">
     <h1>Comic List</h1>
     <a class="btn btn-link" href="{{ route('comics.create') }} ">Add Comic</a>  

    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach($comics as $comic)
        {{-- <li><a href="{{ route('comics.show', $comic->id ) }}">{{ $comic["title"] }}</a></li> --}}
        <div class="col">
          <div class="card">
            <img src="{{ $comic->thumb }}"
              class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $comic["title"] }}</h5>
              <h4 class="card-text">Price:{{ $comic["price"] }}</h4>
    
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