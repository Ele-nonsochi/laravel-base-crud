@extends('comics.layout')

@section('content')

<div class="container">
     <h1>Comic List</h1>
     <a class="btn btn-link" href="{{ route('comics.create') }} ">Add Comic</a>  
<div>
    <ul>
      @foreach($comics as $comic)
        <li><a href="{{ route('comics.create') }}">{{ $comic["title"] }}</a></li>
     @endforeach
    </ul>
</div>
</div>

@endsection