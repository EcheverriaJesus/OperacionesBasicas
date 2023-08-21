<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
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
    <h1>Resultado</h1>
    <p>El resultado es: <?php echo $resultado; ?></p>
    <a href="index.php">Realizar otra operación</a>
</body>
</html>

