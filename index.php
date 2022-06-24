<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 - Cristina Gutierrez </title>
    <link rel="stylesheet" href="stylesheet.css" >
</head>
<body>
    <?php 
        include("formulario.php")
    ?>
    
    <section class="flex-container">
        <div class="titulos box">
            <h1>FORMULARIO CON PHP</h1>
            <h2>Alumna: Cristina Gutiérrez Name</h2>
            <div class="info-formulario">
        <?php 
            echo "<h3>Respuestas:</h2>";
            echo "Nombre: $nombreUsuario";
            echo "<br>";
            echo "Email: $correo";
            echo "<br>";
            echo "Numero telefonico: $telefono";
            echo "<br>";
            echo "Asunto del mensaje: $asuntoMensaje";
            echo "<br>";
            echo "Mensaje: $mensaje";
        ?>
            </div>
        </div>
    
        <div class="box">

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                <label for="nombre">Nombre: </label><br>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo"/>
                <span class="error-message"><br><?php echo $nameErr;?> </span>
                <br>

                <label for="email">Email: </label><br>
                <input type="text" id="email" name="email" placeholder="ejemplo@ejemplo.com"/>
                <span class="error-message"><br><?php echo $emailErr;?> </span>
                <br>
                
                <label for="telefono">Telefono: </label><br>
                <input type="tel" id="telefono" name="telefono" placeholder="#"/>
                <span class="error-message"><br><?php echo $telefonoErr;?> </span> 
                <br>

                <label for="asunto">Asunto: </label><br>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto del mensaje"/>
        
                <br><br>

                <label for="mensaje">Mensaje: </label><br>
                <textarea class="text-message" rows="5" cols="50" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." tabindex="4"></textarea>
                <span class="error-message"><br><?php echo $mensajeErr;?></span>
                <br>

                <button type="submit" >ENVIAR</button> 
            </form>
        </div>
</section>

</body>
</html>

<!--
    Mi primer paso para esta actividad fue dise;ar la estructura de mi formulario en HTML5. Por experiencia, tengo la tendencia de disenar mi estructura HTML5 de adentro hacia fuera. 
    De ahi, me aseguro que cada etiqueta tenga los atributos correspondientes, al igual que las clases. Del lado de PHP siento que fue nadamas de asegurarme de hacer el syntax correcto. 
    Por lo personal, siento que PHP es un poco mas facil y directo que otros lenguajes. 
        1.Primero defini mis variables (fuera de cualquier funcion) con un valor inicial vacio. 
        2.Hice un if statement que se ejecuta solamente cuando el buton de submit es presionado para enviar el formulario.
        3.Dentro de mi primer if statement, relacione cada variable con su etiqueta y especifique el destinatario que va a recibir
            el mensaje, al igual que la informacion.
        4.De ahi, decidi hacer un if statement para cada validacion de los inputs incluidos. 
        5. Para la validacion del correo electronico y el telefono, utilice las funciones de PHP: FILTER_VALIDATE_EMAIL, 
            y preg_match que permite comparar cadenas mediante expresiones regulares. 
        6.Los if statements para validar los puse dentro del  if statement que se ejecuta al enviar el formulario para que todo pase en el momento que se le da click al boton.
        7.La unica cosa en la no estoy segura es que en la actividad dice que para la validacion con PHP se debe generar una pagina con el formulario y otra para la validacion. 
            Sin embargo, segun yo utilizando action="php echo htmlspecialchars($_SERVER["PHP_SELF"]);" en mi formulario, me permite mostrar la misma validacion en la pagina sin tener
            que tenerlo en dos paginas separadas.
            
        Nota: Profesor, le pido una disculpa si me faltan acentos gramaticos en varias palabras, lo que pasa es que mi teclado es americano por lo cual no tiene la tecla de acentuar. 

        Cristina Gtz. Name

-->

