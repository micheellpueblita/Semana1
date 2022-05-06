<?php
     $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "") ?$_POST["nombre"] : "no especificado";

     $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] != "") ?$_POST["apellidos"] : "no especificado";
 
     $edad = (isset($_POST["edad"]) && $_POST["edad"] != "") ?$_POST["edad"] : "no especificado";
 
     $direccion = (isset($_POST["direccion"]) && $_POST["direccion"] != "") ?$_POST["direccion"] : "no especificado";
 
     $num_boletos = (isset($_POST["num_boletos"]) && $_POST["num_boletos"] != "") ?$_POST["num_boletos"] : "no especificado";
     
     $tipodeboleto = (isset($_POST["tipodeboleto"]) && $_POST["tipodeboleto"] != "") ?$_POST["tipodeboleto"] : "no especificado";
 
     if ($num_boletos < 1)
         echo "<strong><h2>Has ingresado una cantidad invalida de boletos (0). Intenta de nuevo.<h2/><strong/>";
     
     if($num_boletos > 0)
     {
        switch ($tipodeboleto)
        {
            case "Normal":
                for($i=0; $i<$num_boletos; $i++)
                { 
                    if($i<15) 
                    {
                        $boleto=$i+1; 
                        echo "<table border=\"5 \>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th rowspan=\"3\"><strong> No. de boleto $boleto </strong></th>";
                            echo "</tr>";   
                        echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td colspan=\"5\"> Six Flags</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td  rowspan=\"6\"><img src=\"https://i.pinimg.com/736x/d6/47/f3/d647f379d7646c76693ac9e24455cd15.jpg" alt=\"bolita amarilla tristongo\" width=\"150\" height=\"165\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">De tanta fila solo te vas a subir a uno</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;

            case "Miedosin":
                for($i=0; $i<$num_boletos; $i++)
                {
                    if($i<15)
                    {
                        $boleto=$i+1;
                        echo "<table border=\"5 \>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th rowspan=\"3\"><strong> No. de boleto $boleto </strong></th>";
                            echo "</tr>";   
                        echo "</thead>";
                        echo "<body>";
                        echo "<tr>";
                                echo "<td colspan=\"5\"> Six Flags</td>";
                        echo "</tr>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td  rowspan=\"6\"><img src=\"https://i.pinimg.com/564x/57/77/b4/5777b448b6b2a6f89f4c59f36dc33327.jpg" alt=\"bolita amarilla anuncio\" width=\"170\" height=\"150\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Como que tienes miedo?, ¿pa' que veniste?.</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;
            
            case "Muchafila":
                for($i=0; $i<$num_boletos; $i++)
                {
                    if($i<15)
                    {
                        $boleto=$i+1;
                        echo "<table border=\"5 \>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th rowspan=\"3\"><strong> No. de boleto $boleto </strong></th>";
                            echo "</tr>";   
                        echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td colspan=\"5\"> Six Flags</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td  rowspan=\"4\"><img src=\"https://i.pinimg.com/564x/c3/38/be/c338be809934f07b4e061f6405762c3e.jpg" alt=\"bolita amarilla nimodo\" width=\"170\" height=\"140\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Mucha fila ahí dice.</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;

            case "Flash pass":
                for($i=0; $i<$num_boletos; $i++)
                {
                    if($i<15)
                    {
                        $boleto=$i+1;
                        echo "<table border=\"5 \>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th rowspan=\"3\"><strong> No. de boleto $boleto </strong></th>";
                            echo "</tr>";   
                        echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                    echo "<td colspan=\"5\"> Six Flags</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td  rowspan=\"4\"><img src=\"https://i.pinimg.com/564x/51/13/8e/51138ea223492c611334f674d73ba880.jpg" alt=\"bolita amarilla lentes\" width=\"170\" height=\"160\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Muito rapido. </td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                } 
            break; 

            case "Muy muito rapido":
                for($i=0; $i<$num_boletos; $i++)
                {
                    if($i<15)
                    {
                        $boleto=$i+1;
                        echo "<table border=\"5 \>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th rowspan=\"3\"><strong> No. de boleto $boleto </strong></th>";
                            echo "</tr>";   
                        echo "</thead>";
                        echo "<body>";
                            echo "<tr>";
                                echo "<td colspan=\"5\"> Six Flags</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$nombre</td>";
                                echo "<td>$apellidos</td>";
                                echo "<td>$edad</td>";
                                echo "<td  rowspan=\"4\"><img src=\"https://i.pinimg.com/564x/d6/1c/3e/d61c3e5569c2e056a864a12da440c235.jpg" alt=\"bolita amarilla altoke\" width=\"170\" height=\"160\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Que prooo</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;                   
        }
        $restantes=$num_boletos-15; 
        if ($restantes==1)
            echo "<strong><h3>El número máximo de boletos en pantalla es 15. Falta desplegar <u> $restantes boleto</u>.<h3/><strong/>";
        if ($restantes>1)
            echo "<strong><h3>El número máximo de boletos en pantalla es 15. Faltan desplegar <u> $restantes boletos</u>.<h3/><strong/>";
    }
?>
