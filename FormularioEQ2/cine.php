<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Resultados del formulario</title>
</head>
<body>
    <h1>Resultados del formulario</h1>

    <?php
    // Verificamos si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mostramos los datos ingresados
        echo "<h2>Datos Personales</h2>";
        echo "<p>Nombre: " . htmlspecialchars($_POST["nombre"]) . "</p>";
        echo "<p>Apellido: " . htmlspecialchars($_POST["apellido"]) . "</p>";
        echo "<p>Sexo: " . htmlspecialchars($_POST["sexo"]) . "</p>";
        echo "<p>Edad: " . htmlspecialchars($_POST["cantidad"]) . "</p>";
        echo "<p>Correo electrónico: " . htmlspecialchars($_POST["correo"]) . "</p>";

        echo "<h2>Preferencias de Cine</h2>";
        echo "<p>Puntaje disfrute cine: " . htmlspecialchars($_POST["puntaje"]) . "</p>";
        echo "<p>Película escogida: " . htmlspecialchars($_POST["formas"]) . "</p>";
        if(isset($_POST["boleto"])) {
            echo "<p>Cantidad de boletos: " . htmlspecialchars($_POST["boleto"]) . "</p>";
        } else {
            echo "<p>Cantidad de boletos: No especificado</p>";
        }
        echo "<p>Fecha de función: " . htmlspecialchars($_POST["fecha"]) . "</p>";
        echo "<p>Hora de función: " . htmlspecialchars($_POST["encuesta2"]) . "</p>";
        echo "<h2>Alimentos y Bebidas</h2>";
        // Verificamos qué alimentos y bebidas se seleccionaron
        if(isset($_POST["palo"])) echo "<p>Palomitas Mantequilla</p>";
        if(isset($_POST["ca"])) echo "<p>Palomitas Caramelo</p>";
        if(isset($_POST["ta"])) echo "<p>Palomitas Takis</p>";
        if(isset($_POST["na"])) echo "<p>Nachos</p>";
        if(isset($_POST["ic"])) echo "<p>Icee</p>";
        if(isset($_POST["ag"])) echo "<p>Agua</p>";
        if(isset($_POST["coca"])) echo "<p>Coca-Cola</p>";
        if(isset($_POST["gomi"])) echo "<p>Gomitas</p>";
        if(isset($_POST["choco"])) echo "<p>Chocolates</p>";

        

        echo "<h2>Otros</h2>";
        echo "<p>Gorra CINEFILO (color seleccionado): " . htmlspecialchars($_POST["gra"]) . "</p>";
       } 
      else {
        // Si no se ha enviado el formulario, mostramos un mensaje
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

         <?php echo $_REQUEST["nombre"]; ?><br/r>
         <a href= "index.html">¿Quieres regresar?</a>

</body>
</html>