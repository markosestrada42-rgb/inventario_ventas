
<?php
require_once __DIR__ . '/../controllers/ProductoController.php';
$controller = new ProductoController();

// Procesar acciones del formulario

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['crear'])) {
        $controller->crearProducto($_POST['nombre'], $_POST['stock'], $_POST['precio']);
    }
    if(isset($_POST['editar'])) {
        $controller->editarProducto($_POST['id'], $_POST['nombre'], $_POST['stock'], $_POST['precio']);
    }
    if(isset($_POST['eliminar'])) {
        $controller->eliminarProducto($_POST['id']);
    }
}

$productos = $controller->obtenerProductos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>INVENTARIO Y VENTAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">INVENTARIO Y VENTAS</h1>

    <!-- Formulario para crear producto -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Crear nuevo producto
        </div>
        <div class="card-body">
            <form method="POST" class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" min="0" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control" min="0.01" required>
                </div>
                <div class="col-md-2 d-grid">
                    <button type="submit" name="crear" class="btn btn-success mt-4">Crear</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabla de productos -->
    <div class="card">
        <div class="card-header bg-secondary text-white">
            Lista de productos
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $p): ?>
                        <tr>
                            <td><?= $p['id'] ?></td>
                            <td><?= $p['nombre'] ?></td>
                            <td><?= $p['stock'] ?></td>
                            <td>$<?= number_format($p['precio'], 2) ?></td>
                            <td>
                                <!-- Botón eliminar -->
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                    <button type="submit" name="eliminar" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                                <!-- Botón editar -->
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?= $p['id'] ?>">
                                    <input type="text" name="nombre" value="<?= $p['nombre'] ?>" class="form-control form-control-sm d-inline w-auto" required>
                                    <input type="number" name="stock" value="<?= $p['stock'] ?>" class="form-control form-control-sm d-inline w-auto" min="0" required>
                                    <input type="number" step="0.01" name="precio" value="<?= $p['precio'] ?>" class="form-control form-control-sm d-inline w-auto" min="0.01" required>
                                    <button type="submit" name="editar" class="btn btn-warning btn-sm">Editar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>

