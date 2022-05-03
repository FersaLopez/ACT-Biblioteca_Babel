<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $buscar = (isset($_POST["Buscar"]) && $_POST["Buscar"] != "")? $_POST['Buscar'] : "no especifico";
        $zona = (isset($_POST['Zona']) && $_POST["Zona"] != "")? $_POST['Zona'] : "no especifico";
        $modo = (isset($_POST['MODO']) && $_POST["MODO"] != "")? $_POST['MODO'] : "no especifico";

        echo 'Busqueda: ';
        echo $buscar;
        echo '<br>';
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
        
        
        if($modo=='value5')
        {
            echo "
                <table border='1'>
                    
                    <tbody>
                        <tr>
                            <td align='center'>";
                            
                                echo 'Libro ';
                                echo rand(4000,6000);
                            echo "</td>
                        </tr>
                        <tr>
                            <td>";

                                $long_texto=rand(300,500); 

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
                                    }
                                    echo $buscar;
                            echo"
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
            echo '<br>';
        }
    ?>
</body>
</html>