<?php 

include_once __DIR__ . '/category.php';
include_once __DIR__ . '/accessori.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/giocattoli';


$arrayCategory = [
    'cane' => new Category ('cane', 'iconacane'),
    'uccello' => new Category('uccello', 'iconauccello')
];

var_dump($arrayCategory)



?>