<?php
 
echo 'ciao <br>';
$numero=100;
 
echo 'numero: ' . $numero + 3 + 2 . ' haahahha';
 
$numero = '5ai';
 
echo ' La mia classe preferita è : ' . $numero . "<br>";
 
// Array associativo (dizionario)
$arr =['Gjini', 'Tornatola', 102 => 'Silvestri', 'abc' => 'Singh', 'Gallizioli'];

// Funzioni per sviluppo/debug
print_r($arr);
echo $arr['abc'];
var_dump($arr);
echo '<br><br>';

 $numero = 99;

// Costrutti base
if($numero > 100) {
    echo ' numero grande';
}
else{
    echo ' numero piccolo';
}

echo '<br>';

$colore = 'blu';
switch($colore){
    case 'giallo': echo '<span style="color:yellow">'; break;
    case 'verde': echo '<span style="color:green">'; break;
    case 'blu': echo '<span style="color:blue">'; break;
    default: echo '<span style="color:gray">'; break; 
}
echo ' hai scelto il colore ' . $colore . '</span';

for($i=0; $i<8; $i++){
    echo '🍕';
}

?>