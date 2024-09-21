
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex4</title>
</head>
<body>

    <table style="border: 1px solid black; border-collapse: collapse;">
        
    <?php
            // definicion variables
            $m=4;
            $n=8;
            
            $letra=65;
            $contador=0;

            // crear bulce para filas mientras que i sea menor o igual a m
            for($i = 0; $i <= $m; $i++){
                echo "<tr>";
                $valor=0;


                //crear bulce en horizontal mientras que i sea menor o igual a n
                for($j = 0; $j <= $n; $j++){

                
                    if($valor>0 and $contador==0 ){
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'> $valor </td>";
                        $valor=$valor+1;
                    
                    }
                    elseif($valor==0 and $contador>0){
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'>".chr($letra)."</td>";
                        $letra=$letra+1;
                        $valor=$valor+1;
                    

                    }
                    elseif($valor>0 and $contador>0){
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'> </td>";

                       
                    }
                    else{
                        echo "<td style='border: 1px solid black; border-collapse: collapse;'>  </td>";
                        $valor=$valor+1;
                        
                    }
                    
                }



            //variacion del inicio de columna, forzandoa valor a empezar añadiendo un numero
            $contador=$contador+1;
            
            echo "</tr>";
            }

               
                ?>
    
    </table>
    
</body>
</html>