<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Procesados</title>
</head>
<body>
    <h1>Registro Procesado</h1>
    
    <?php
        // Capturamos los datos enviados desde el formulario
        $nombre = $_POST['nombre']; // Capturamos el nombre
        $correo = $_POST['correo']; // Capturamos el correo electrónico
        $telefono = $_POST['telefono']; // Capturamos el teléfono
        $fuente = $_POST['fuente']; // Capturamos la fuente de información
        $temas_interes = isset($_POST['temas_interes']) ? implode(", ", $_POST['temas_interes']) : 'No seleccionó ningún tema'; // Capturamos temas de interés
        $opciones = isset($_POST['opciones']) ? implode(", ", $_POST['opciones']) : 'No seleccionó ninguna opción'; // Capturamos opciones de participación
        $comentarios = $_POST['comentarios']; // Capturamos los comentarios

        // Mostramos los datos en la página
        echo "<p><strong>Nombre Completo:</strong> $nombre</p>";
        echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
        echo "<p><strong>Cómo te enteraste del webinar?:</strong> $fuente</p>";
        echo "<p><strong>Temas de Interés:</strong> $temas_interes</p>";
        echo "<p><strong>Opciones de Participación:</strong> $opciones</p>";
        echo "<p><strong>Comentarios o Preguntas:</strong> $comentarios</p>";
    ?>
</body>
</html>
