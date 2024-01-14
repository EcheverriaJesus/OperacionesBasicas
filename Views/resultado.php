<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen flex justify-center items-center">
    <div class="flex flex-col items-center bg-white w-72 h-auto pt-5 pb-7 border border-gray-200 rounded-lg">
        <section class="flex flex-col text-center space-y-5">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">
            Resultado
            </h2>
            <p class="text-slate-500 text-sm">El resultado es: <?php echo $resultado; ?></p>
            <a href="index.php" class="py-3 px-3 font-medium tracking-wide capitalize transition-colors duration-300 transform bg-gray-100 rounded-md hover:bg-gray-200 text-sm text-gray-600">Realizar otra operación</a>
        </section>
    </div>
</body>
</html>