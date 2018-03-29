@extends('home.layout')

@section('content')

	@include('home.sections.banner')

	@include('home.sections.estudio')
	
	@include('home.sections.destacados')

	@include('home.sections.video')
	
	@include('home.sections.publicaciones')
	
	@include('home.sections.carrusel')
	
	@include('home.sections.contacto')
		
	@include('home.sections.suscripcion')
	
@endsection
