<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Básicas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen flex justify-center items-center">

  <form method="post" action="index.php" class="flex flex-col items-center bg-white w-72 h-auto pt-5 pb-7 border border-gray-200 rounded-lg space-y-6">
    <section class="flex flex-col text-center space-y-1">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">
        Operaciones Básicas
      </h2>
      <p class="text-slate-500 text-sm">Proyecto para evaluar mi lógica en Residencias Profesionales</p>
    </section>

    <section class="space-y-2">
      <input type="number" name="num1" required class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800" placeholder="Ingresa un número">
    </section>

    <section class="flex w-full flex-col space-y-2 px-9">
      <select name="operacion" class="bg-gray-100 px-3 py-3 rounded-xl">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
      </select>
    </section>

    <section class="space-y-2">
      <input type="number" name="num2" required class="block w-56 rounded-md py-1.5 px-2 ring-1 ring-inset ring-gray-400 focus:text-gray-800" placeholder="Ingresa un número">
    </section>

    <section class="flex w-full flex-col space-y-2 px-9">
      <button type="submit" class="py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600">
        Calcular
      </button>
    </section>
  </form>

</body>
</html>