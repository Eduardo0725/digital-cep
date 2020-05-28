<?php

include_once "vendor/autoload.php";

use Eduardo0725\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);

