<?php
require_once __DIR__ . '/../models/Calculadora.php';
class CalculadoraController {
    private $modelo;
    public function __construct() {
        $this->modelo = new Calculadora();
    }
    public function mostrarFormulario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            if ($operacion === 'suma') {
                $resultado = $this->modelo->sumar($num1, $num2);
            } else if ($operacion === 'resta') {
                $resultado = $this->modelo->restar($num1, $num2);
            }
             else if ($operacion === 'multiplicacion') {
                $resultado = $this->modelo->multiplicar($num1, $num2);
            }
            require_once __DIR__ . '/../views/index.php';
        } else {
            require_once __DIR__ .'/../views/index.php';
        }
    }
}
?>