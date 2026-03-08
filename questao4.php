<?php

$pessoas = readline("Número de pessoas: ");
$capacidade = readline("Capacidade da cabine: ");

$cabines = ceil($pessoas / $capacidade);

echo "Serão necessárias $cabines cabines.";

?>