<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Básicas</title>
</head>
<body>
    <h1>Operaciones Básicas</h1>
    <form method="post" action="index.php">
        <input type="number" name="num1" required>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
