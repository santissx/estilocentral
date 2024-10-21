<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstiloCentral - Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js', 'resources/js/login.js'])
</head>
</head>
<body class="bg-purple-custom" id="login-body">
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="row g-0">
                        <div class="col-md-6 bg-purple-custom" id="image-container">
                            <img src="{{ asset('imagenes/cliente.png') }}" alt="Imagen de cliente" class="login-image" id="login-image">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-5">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
    
                            <form method="POST" action="{{ route('login') }}">
                                <h2 class="card-title mb-4 fw-bold" id="login-title">¡Hola, Bienvenido!</h2>
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                                </div>
                                <div class="mb-3 text-end">
                                    <a href="#" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                            </form>
    
                            <div class="mt-4 text-center">
                                <p class="mb-0">¿No tienes una cuenta? <a href="{{ route('register') }}" class="fw-bold text-decoration-none">Regístrate</a></p>
                            </div>
                                <div class="mt-4 d-flex justify-content-center">
                                    <button id="btn-cliente" class="btn btn-primary me-2">Cliente</button>
                                    <button id="btn-admin" class="btn btn-light">Admin</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de registro -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirma tu contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <script>
        const clienteImageUrl = "{{ asset('imagenes/cliente.png') }}";
        const adminImageUrl = "{{ asset('imagenes/admin.png') }}";

        document.querySelector('a[href="{{ route('register') }}"]').addEventListener('click', function(event) {
        event.preventDefault();
        var modal = new bootstrap.Modal(document.getElementById('registerModal'));
        modal.show();
    });
    </script>