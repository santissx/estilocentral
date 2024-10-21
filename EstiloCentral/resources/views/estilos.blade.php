@extends('layouts.inicio')


@section('title', 'Inicio')

@section('content')

    <div class="categories">
        <div class="category-item">
            <img src="{{ asset('imagenes/urbanohombre.jpg') }}" alt="Urbano">
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
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
<!-- Incluye Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@endpush
@push('scripts')
<!-- Incluye Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
