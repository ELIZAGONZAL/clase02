<?php 
$num=10;

if(($num==12 && 10>34) || 100==100 && !true){ /* Verdadera */
    echo "Condicion Verdadera";
}else{
    echo "Condicion Falsa";
}

echo "<hr>";
 $nota = 9;

if($nota>=0 && $nota <=5){
/* lo que se va ejecutar */
    echo "Necesita ir a recuperacion str";

}else if($nota>5 && $nota <=7){
    echo "Buena nota";
}else{
    echo "Excelente nota";
}

/*switch*/
$dia =1;
switch($dia) {
    case 1:
        echo 'domingo';
        break;
    case 2:
        echo 'lunes';
        break;
    case 3:
        echo 'martes';
        break;
    case 4:
        echo 'miercoles';
        break;
    case 5:
        echo 'jueves';
        break;
    case 6:
        echo 'viernes';
        break;
    case 7:
        echo 'dia de reposo _ sabadito';
        break;
}
?>