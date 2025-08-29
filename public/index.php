index.
<h1>hola</h1>

<?php
require_once __DIR__ .'/../app/controllers/CalculadoraController.php';
$controller = new CalculadoraController();
$controller->mostrarFormulario();
?>