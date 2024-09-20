<?php

session_start();
$_SESSION['usuario'] = 'Paul';

function imprimir_vector_ingresado($vector)
{
    for ($i=0; $i<count($vector);++$i)
    {
        echo 'Ciudad' .$i. '='.$vector[$i].'<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $_SESSION['usuario']  ?> </h3>
    <h2>Vector Indexados - Ejemplo 1</h2>
    <?php
    $ciudades[]='Lima';
    $ciudades[]='Quito';
    $ciudades[]='Santiago';
    $ciudades[]='Buenos Aires';
    imprimir_vector_ingresado($ciudades);
    echo '<hr>';
    $ciudades[2]='Bogota';
    imprimir_vector_ingresado($ciudades);
    echo '<hr>';
    $ciudades[3] = 48;
    imprimir_vector_ingresado($ciudades);
    echo '<hr>';
    $dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
    imprimir_vector_ingresado($dias);
    echo '<hr>';
    $dias[5]='Mayo';
    imprimir_vector_ingresado($dias);
    ?>

    <h2> Vectores asociativos - Ejemplo 2</h2>
    <?php
    $semana['Lunes']=25;
    $semana['Martes']=45;
    $semana['Miercoles']=55;
    $semana['jueves']=65;
    foreach($semana as $valor)
    {
        echo'Valor = '. $valor.'<br>';
    }   
    echo '<hr>';
    //PAR KEY => VALUES
    foreach($semana as $dia=>$valor)
    {
        echo 'El valor de dia '.$dia. 'es => '. $valor.'<br>';
    }

    echo'<br>';
    $alumnos = array (
        'Pedro'=> 14,
        'Mercedes'=> 12,
        'Santiago'=> 14,
        'Liliana'=> 16
    );
    foreach($alumnos as $nombre=>$nota)
    {
        echo 'El nota de '.$nombre. 'es => '. $nota.'<br>';
    }
    echo'<br>';

    $alumnos = array (
        'Pedro'=> array(14,16),
        'Mercedes'=> array(11,17),
        'Santiago'=> array(13,17,18),
        'Liliana'=> array(16,20)
    );
    foreach($alumnos as $nombre=>$nota)
    {
        echo 'Las notas de '.$nombre. 'son => ';
       for ($j=0;$j<count($nota);$j++) 
       {
        echo $nota[$j]. '  ';
       }
       echo '<br>';
    }
    ?>
</body>
</html>