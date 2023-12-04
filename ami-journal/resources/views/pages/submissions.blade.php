@extends('layouts.app')

@section('content')
   <h1>Cikkek</h1>

   @foreach ($articles as $article)
       <h2>{{ $article->title }}</h2>
       <p>{{ $article->body }}</p>
   @endforeach
@endsection