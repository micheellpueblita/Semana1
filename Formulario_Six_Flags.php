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
                        $boleto=$i+1; //conteo de boletos 
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
                                echo "<td  rowspan=\"6\"><img src=\"https://i.pinimg.com/550x/7e/11/d2/7e11d23a4916433522bb12db9e635bd2.jpg\" alt=\"bolita amarilla tristongo\" width=\"150\" height=\"165\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Disfruta la fila en tu único juego.</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;

            case "Is qui mi di miedi":
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
                                echo "<td  rowspan=\"6\"><img src=\"https://i.pinimg.com/550x/2a/93/a9/2a93a9c7d61633bb4f11f0eae6f20ec5.jpg\" alt=\"bolita amarilla anuncio\" width=\"170\" height=\"150\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Disfruta tu miedo y fila.</td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                }
            break;
            
            case "Largasfilargas":
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
                                echo "<td  rowspan=\"4\"><img src=\"https://data.whicdn.com/images/345206792/original.jpg\" alt=\"bolita amarilla nimodo\" width=\"170\" height=\"140\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Platica mucho en tu largafilarga.</td>";
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
                                echo "<td  rowspan=\"4\"><img src=\"https://pbs.twimg.com/media/EfO5E6TWsAMMbOq.jpg\" alt=\"bolita amarilla lentes\" width=\"170\" height=\"160\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">No vas a platicar en la fila, <br> pero te puede subir a más juegos. </td>";
                            echo "</tr>";
                        echo "</body>";
                        echo "</table>";
                        echo "<br>";
                    }
                } 
            break; 

            case "Fast-fast-rapidash":
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
                                echo "<td  rowspan=\"4\"><img src=\"https://i.pinimg.com/474x/ac/aa/56/acaa56585e2788119d35618084bd267b.jpg\" alt=\"bolita amarilla altoke\" width=\"170\" height=\"160\"></td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>$direccion</td>";
                                echo "<td>$num_boletos</td>";
                                echo "<td>$tipodeboleto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td colspan=\"3\">Súbete al todos los juegos :)</td>";
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