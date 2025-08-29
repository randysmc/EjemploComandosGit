<!DOCTYPE html>
<html>
<head>
    <title>Calculadora MVC</title>
</head>
<body>
    <h1>Calculadora MVC</h1>
    <h2>Operaciones Básicas</h2>
    <form action="" method="post">
        <input type="number" name="num1" required>
        <select name="operacion">
            <option value="suma">+</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" value="Calcular">
    </form>
    <?php if (isset($resultado)) echo "<p>Resultado: $resultado</p>"; ?>
</body>
</html>