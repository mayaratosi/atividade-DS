<?php
   $numero1=4;
   $numero2=5;


   $resultado= $numero1 * $numero2;

echo "Resultado =".$resultado;
echo "<br>";

if($resultado<=10){
    echo "Resultado menor que 10.";
}
elseif($resultado>=100){
    echo "Resultado maior que 100.";
}
echo "<br>";
if($resultado<=10){
    echo " esta entre 10.";
}
else{
    echo " esta entre 100.";
}

exit;

?>