
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex3</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        
            <?php
            // definicion variables
            $m=6;
            $n=16;
            $valor=0;
            $bucle=0;

            // crear bulce para filas mientras que i sea menor o igual a m
            for($i = 0; $i <= $m; $i++){
                echo "<tr>";


                //crear bulce en horizontal mientras que i sea menor o igual a n
                for($j = 0; $j <= $n; $j++){
                    echo "<td style='border: 1px solid black; border-collapse: collapse;'> $valor </td>";
                    $valor=$valor+1;

                    
                }

            //variacion del inicio de columna, forzandoa valor a empezar añadiendo un numero
            $bucle=$bucle+1;
            $valor=$bucle;
            echo "</tr>";
            }

               
                ?>
       

    </table>
    
</body>
</html>