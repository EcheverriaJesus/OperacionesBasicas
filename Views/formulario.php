<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Básicas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
    <section class="flex justify-center items-center flex-col w-full h-screen">
        <div class="flex flex-col border border-black h-1/2 w-auto">
          <h1 class="bg-blue-500">Operaciones Básicas</h1>
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
        </div>
    </section>
</body>
</html>