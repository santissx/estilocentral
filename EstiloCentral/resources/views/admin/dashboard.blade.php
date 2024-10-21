<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="d-flex">
        <!-- Barra Lateral -->
        <div id="sidebar" class="bg-dark text-white p-3 vh-100" style="width: 250px;">
            <h4>Panel de Administración</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Mis Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Mis Ventas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Mi Cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Datos del Comercio</a>
                </li>
            </ul>
        </div>

        <!-- Contenido Principal -->
        <div id="main-content" class="p-4" style="flex-grow: 1;">
            <h2>Bienvenido al Panel de Administración</h2>
            <p>Selecciona una opción en la barra lateral para administrar tu tienda.</p>
            <!-- Aquí irá el contenido dinámico -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
