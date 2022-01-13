@extends('comics.layout')
@section('content')

<div class="container">
   <h1>Detail Comic</h1>
    <div class="card w-50">
      <img src="{{ $comic->thumb }}" class="card-img-top" alt="..." style="">
      <div class="card-body">
        <h1 class="card-title">Title: {{ $comic->title }}</h1>
        <p class="card-text">{{ $comic->description}}</p>
        <h5 class="card-text">{{ $comic->price}}</h5>
        <h5 class="card-text">{{ $comic->series}}</h5>
        <h5 class="card-text">{{ $comic->sale_date}}</h5>
        <h5 class="card-text">{{ $comic->type}}</h5>

      </div>
  <div>
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