<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$controller = $_GET['controller'] ?? 'programa';  
$action = $_GET['action'] ?? 'index';             
$codigo = $_GET['codigo'] ?? null;                

// Ruta al controlador
$controllerFile = "../controllers/{$controller}Controller.php";
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller'; 
    if (class_exists($controllerClass)) {
        $controllerInstance = new $controllerClass();
    
        if (method_exists($controllerInstance, $action)) {
          
            $controllerInstance->$action($codigo);
        } else {
            echo "Acción '{$action}' no encontrada en el controlador '{$controller}'.";
        }
    } else {
        echo "Controlador '{$controllerClass}' no encontrado.";
    }
} else {
    echo "Archivo del controlador '{$controllerFile}' no encontrado.";
}
?>