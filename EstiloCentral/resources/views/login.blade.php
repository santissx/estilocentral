<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstiloCentral - Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/login.js')
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
                                <h2 class="card-title mb-4 fw-bold" id="login-title">¡Bienvenido!</h2>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="mb-3 text-end">
                                        <a href="#" class="text-decoration-none olv" >¿Olvidaste tu contraseña?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                                </form>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">¿No tienes una cuenta? <a href="#" class="fw-bold text-decoration-none">Regístrate</a></p>
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
    <script>
        const clienteImageUrl = "{{ asset('imagenes/cliente.png') }}";
        const adminImageUrl = "{{ asset('imagenes/admin.png') }}";
    </script>
    
</body>
</html>