@extends('layouts.inicio')

@section('title', 'Inicio')

@section('content')
<div class="main-container">
    <!-- Carrusel de Bootstrap -->
   <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('imagenes/urbanohombre.jpg') }}" class="d-block w-100 img-fluid" alt="Urbano">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imagenes/deportivo.jpeg') }}" class="d-block w-100 img-fluid" alt="Deportivo">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imagenes/clasico.webp') }}" class="d-block w-100 img-fluid" alt="Clásico">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

    <!-- Sección "Descubrí tu estilo" -->
    <p>Descubrí tu estilo</p>
    <div class="categories">
        <div class="category-item">
            <img src="{{ asset('imagenes/urbanohombre2.jpg') }}" alt="Urbano">
            <p>Urbano</p>
        </div>
        <div class="category-item">
            <img src="{{ asset('imagenes/deportivo.jpeg') }}" alt="Deportivo">
            <p>Deportivo</p>
        </div>
        <div class="category-item">
            <img src="{{ asset('imagenes/clasico.webp') }}" alt="Clásico">
            <p>Clásico</p>
        </div>
    </div>
</div>
@endsection




@push('styles')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
<!-- Incluye Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@push('scripts')
<!-- Incluye Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush

