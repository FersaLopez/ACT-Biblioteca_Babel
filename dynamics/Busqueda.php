<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda Libro</title>
</head>
<body>
    <?php
        $buscar = (isset($_POST["Buscar"]) && $_POST["Buscar"] != "")? $_POST['Buscar'] : "no especifico";
        $zona = (isset($_POST['Zona']) && $_POST["Zona"] != "")? $_POST['Zona'] : "no especifico";
        $modo = (isset($_POST['MODO']) && $_POST["MODO"] != "")? $_POST['MODO'] : "no especifico";
        
        if($modo=='value4')
        {
            echo 'Modo: Oración';
        }
        if($modo=='value5')
        {
            echo 'Modo: Normal';
        }
        if($modo=='value6')
        {
            echo 'Modo: Palabras';
        }
        echo '<br><br>';
                
        echo "
            <table border='1'>                    <!--Poner formato agradable a la tabla-->
                <thead>
                    <tr>
                        <th>";   
                            $long_identificador=rand();             //Poner un texto mas aleatorio con CARACTERES
                            echo "<br>Libro $long_identificador <br><br>";
                    echo "</th>
                    </tr>
                </thead>
                <tbody>                                                                                                                                    
                    <tr>                    
                        <td>";
                            if($modo!='Palabras')
                            {                                                                
                                $long_texto=rand(300,500);                                 
                                //$cadena= "Hola soy un aguacate"; 
                                $insertar = rand(0, $long_texto);

                                for($i=0; $i<$long_texto; $i++)
                                {
                                    $long_palabra=rand(4,10);
                                    
                                    for($p=0; $p<$long_palabra; $p++)
                                    {
                                        $ascii=rand(97, 122); 
                                        $letra= chr($ascii); 
                                        echo "$letra"; 
                                    }
                                    echo " "; 
                                    if($modo == 'Normal' && $i==$insertar)
                                    {
                                        echo "<strong>$buscar </strong>";
                                    }
                                    if($modo == 'Orden' && $i==$insertar)
                                    {
                                        $minus_arreglo= strtolower($buscar);
                                        $arreglo_cad = explode(" ", $minus_arreglo);
                                        sort($arreglo_cad);
                                        $cadenaordenada = implode(" ", $arreglo_cad);
                                        echo "<strong>$cadenaordenada </strong>";
                                    }
                                }            
                            }                            
                            else
                            {
                                $arreglo_string = explode($buscar);
                                $num_localidades = count($arreglo_string);
                                for($i=0; $i < $num_localidades; $i++)
                                {
                                    $
                                }
                                
                                    
                                
                            }
                            
                        echo"
                        </td>
                    </tr>
                </tbody>
            </table>
            ";        
            if($zona=='value1')
            {
                echo 'Zona Horaria: New York';
            }
            if($zona=='value2')
            {
                echo 'Zona Horaria: Mexico City';
            }
            if($zona=='value3')
            {
                echo 'Zona Horaria: Berlín';
            }
            echo '<br>';
            echo '<br>';                                
            echo 'Busqueda: ';
            echo $buscar;
            echo '<br>';
    ?>
</body>
</html>