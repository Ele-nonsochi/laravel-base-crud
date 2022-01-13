@extends('comics.layout')
@section('content')

<div class="container">
    <h1>Title {{ $comic->title }}</h1>
    <h3>Descrizione:  </h3>
  <div style="margin-top: 15px">
      <form action="{{ route('comics.destroy', $comic->id) }}" method="post"
          class="form-delete">
          @csrf
          @method('delete')
          
          <button type="submit"
          class="nav-link active btn btn-link text-danger">Delete</button>
      </form>
  </div>
</div>

    
@endsection