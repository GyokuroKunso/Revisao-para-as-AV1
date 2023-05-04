<?php

//Atividade 1, Conta da soma de dois valores diferentes e multiplicar com o primeiro valor pela metade//
echo "Atividade 1:<br>";
$valor1 = 10;
$valor2 = 5;

$media = ($valor1 + $valor2) * ($valor1/2);

echo $media;
echo "<br>";
echo "<br>";

//Atividade 2, Conta para descobre o valor de uma determinada porcentagem do valor total do resultado //
echo "Atividade 2:<br>";
$valor3 = 100;

$resultado = $valor3 * 0.15;

echo $resultado;

//Atividade 3, Conta para descobre o resultado de uma parcela 12 e um recebimento de 1%//
echo "<br>";
echo "<br>";
echo "Atividade 3:<br>";
echo "<br>";
$valor = 1200;
$juros = $valor * 0.12;
$valor_total= $valor + $juros;
$parcela = $valor_total /12;

echo " Valor Total:<br>".$valor_total."<br>";
echo "<br>";
echo "Valor Parcelado:<br>".$parcela;
echo "<br>";

//Atividade 4, Conta para descobre ser é maior de idade//
echo "<br>";
echo "Atividade 4:<br>";

$valor_idade = 20000;

$conta = $valor_idade / 365;

if ($conta >= 18) {
 echo "maior de idade";
   
} else {
    echo "menor de idade";
};

?>