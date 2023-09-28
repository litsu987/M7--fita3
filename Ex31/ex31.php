<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barco</title>
    <style type="text/css">
        table, td {
            border: 1px black solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table class="default" >
        
<?php
    $rutaArchivo="contactes31b.txt";
    echo "<table>\n";
    echo " <tr>\n";
    echo "\t\t<td> NOMBRE </td>\n";
    echo "\t\t<td> APELLIDO1 </td>\n";
    echo "\t\t<td> APELLIDO2 </td>\n";
    echo "\t\t<td> TELEFONO </td>\n";
    echo " </tr>";

    $fp = fopen("contactes31.txt", "r");
    file_put_contents($rutaArchivo, '');
    while (!feof($fp)){
        $linea = fgets($fp);

        file_put_contents($rutaArchivo, str_replace(',', '#', $linea), FILE_APPEND);
        if (!empty($linea)) {
            $dades = explode(',', $linea);
        echo '<tr>';
        for ($i=0; $i <= 3; $i++) { 
            echo '<td>'.$dades[$i].'</td>';
            
        }
        echo '</tr>';
        }
    }
    fclose($fp);

    echo "</table>";
?>

</table>

</body>
</html> 
