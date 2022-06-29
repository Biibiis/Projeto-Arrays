<?php
// Verificação da variavél setada
if(isset($_GET['tipo'])) {
    $cidade = $_GET['tipo'];
}

if(isset($_GET['ordem'])) {
    $estado = $_GET['ordem'];
}

$tipo = "nome";

$cidades ["Belo Horizonte - MG"] = 0.810;
$cidades ["Americana - SP"] = 0.811;
$cidades ["Ilha Solteira - SP"] = 0.812;
$cidades ["Nova Lima - MG"] = 0.813;
$cidades ["Santana de Paraíba - SP"] = 0.814;
$cidades ["Araraquara - SP"] = 0.815;
$cidades ["Santo André - SP"] = 0.816;
$cidades ["Vinhedo - SP"] = 0.817;
$cidades ["Valinhos - SP"] = 0.819;
$cidades ["Jundiaí - SP"] = 0.822;
$cidades ["Curitiba - PR"] = 0.823;
$cidades ["Brasília - DF"] = 0.824;
$cidades ["Joaçaba - SC"] = 0.827;
$cidades ["Niterói - RJ"] 0.837;
$cidades ["Santos - SP"] = 0.840;
$cidades ["Vitória - ES"] = 0.845;
$cidades ["Balneário Camboriú - SC"] = 0.845;
$cidades ["Florianópolis - SC"] = 0.847;
$cidades ["Águas de São Pedro - SP"] = 0.849;
$cidades ["São Caetano do Sul - SP"] = 0.891;

// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'asc') {
    asort($cidades);
}

if($TIPO == 'nome' && $ordem == 'desc') {
    arsort($cidades);
}


if($tipo == 'sigla' && $ordem == 'asc') {
    ksort($cidades);
}

if($tipo == 'sigla' && $ordem == 'desc') {
    krsort($cidades);
}
?>