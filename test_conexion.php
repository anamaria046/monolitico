<?php
require_once 'config/database.php';
try {
    $pdo = Database::getInstance();
    echo "¡Conexión exitosa a la base de datos 'notas_app'!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>