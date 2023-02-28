@extends('layout');

@section('content')

<h2>{{$listing['title']}}</h2>

<a href="#"><p>{{$listing['description']}}</p></a>
<a href="#"><p>{{$listing['company']}}</p></a>
<a href="#"><p>{{$listing['location']}}</p></a>

@endsection
