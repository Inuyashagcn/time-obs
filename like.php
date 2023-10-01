<html>
<head>
    <title>Like</title>
    <link rel="stylesheet" href="style-stars.css">
    <script type="text/javascript">
       setTimeout(function(){ location.reload(1);}, 20000);
    </script>
</head>
<body>
<?php
// Ruta al archivo de texto
$file = "C:\Users\mnava\Documents\Labels\most_recent_facebook_like.txt";

// Lee el archivo en una cadena
$contenido = file_get_contents($file);

// Divide la cadena en líneas
$lineas = explode("\n", $contenido);

// Itera a través de las líneas
foreach ($lineas as $linea) {
    // Divide cada línea en valores separados por comas
    $valores = explode(",", $linea);

    // Asigna los valores a variables
    $nombre = $valores[0];

    // Hacer algo con las variables (por ejemplo, imprimir)
    echo "$nombre";
}
?>
</body>
</html>