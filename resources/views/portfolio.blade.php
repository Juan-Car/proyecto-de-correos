@extends('layout')

@section('title', 'Portfolio')

@section('content')

    <h1>Portfolio</h1>
     
     <ul>
	    @forelse ($portfolio as $portfolioItem) 
	     	<li> {{$portfolioItem['title']}}</li>
	    @empty
	     	<li>no hay proyectos</li>
	     		
	    @endforelse
     </ul>

@endsection
