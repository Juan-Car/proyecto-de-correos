@extends('layout')

@section('title', 'Contact')

@section('content')

    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact')}}">
    	@csrf
    	<input type="" name="name" placeholder="Nombre" value="{{ old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</smal><br>') !!}    	
    	<input type="text" name="email" placeholder="Email" value="{{ old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</smal><br>') !!}
    	<input type="" name="subject" placeholder="Asunto" value="{{ old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</smal><br>') !!}
    	<textarea type="" name="content" placeholder="Mensaje" value="{{ old('content')}}"></textarea><br>
        {!! $errors->first('contact', '<small>:message</smal><br>') !!}
    	<button>Enviar</button>
    </form>

@endsection