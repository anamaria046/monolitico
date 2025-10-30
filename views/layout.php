<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Notas</title>
    <!-- Enlace a CSS opcional -->
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <header>
        <nav>
            <h1>Gestión de Notas</h1>
            <ul>
                <li><a href="../public/index.php?controller=programa&action=index">Programas</a></li>
                <li><a href="../public/index.php?controller=estudiante&action=index">Estudiantes</a></li>
                <li><a href="../public/index.php?controller=materia&action=index">Materias</a></li>
                <li><a href="../public/index.php?controller=nota&action=index">Notas</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php echo $content; ?>  <!-- Aquí se inserta el contenido de cada vista -->
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Gestión de Notas</p>
    </footer>
</body>
</html>