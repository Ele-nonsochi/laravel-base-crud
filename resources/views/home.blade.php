@extends('comics.layout')

@section('content')

<div class="container">
    <div>
    <img class="homebackground" src="https://www.blurb.com/blog/wp-content/uploads/2019/07/2019_Blog_Header_comics9steps_blog_v01ap.jpg" alt="background">
    <a class="gobutton" href="{{route('comics.index')}}"><strong>Find your Comic</strong></a>
    </div>
</div>

@endsection