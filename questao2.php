<?php

$enfeites = readline("Quantidade de enfeites: ");
$capacidade = readline("Capacidade da caixa: ");

$caixas = ceil($enfeites / $capacidade);

echo "Serão necessárias $caixas caixas.";

?>