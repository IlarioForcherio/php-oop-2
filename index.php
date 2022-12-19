<?php 

include_once __DIR__ . '/category.php';
include_once __DIR__ . '/accessori.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/giocattoli.php';


$arrayCategory = [
    'cane' => new Category ('cane', 'iconacane'),
    'uccello' => new Category('uccello', 'iconauccello'),
    'gatto' => new Category('gatto', 'iconagatto'),

];

//var_dump($arrayCategory);



$arrayProduct = [
    new Cibo('https://picsum.photos/200/300', 'Royal Canin', 43.99, $arrayCategory['cane'], 545, 'prosciutto,riso' ),
    new Cibo('https://picsum.photos/200/300', 'Almo Nature', 44.99, $arrayCategory['cane'], 600, 'manzo,cereali' ),
    new Accessori('immagine', 'nome', 60, $arrayCategory['uccello'], 'materiale', 'dimensioni' ), 
    new Giocattoli('immagine', 'nome', 120, $arrayCategory['cane'], 'caratteristiche', 'dimensioni' ),  
];

foreach ($arrayProduct as $elem){
//var_dump( $elem);

echo  '<img src=" $elem->immagine " alt="">'  . '<br>' ;
echo $elem->nome . '<br>' ;
echo $elem->prezzo . '<br>' ;
echo $elem->category->nome . '<br>' ;
echo $elem->category->icona . '<br>' ;

if(get_class($elem) == 'Cibo' ){
    echo $elem->peso;
    echo $elem->ingredienti . '<hr>' ;
}

if(get_class($elem) == 'Accessori' ){
    echo $elem->materiale;
    echo $elem->dimensioni . '<hr>' ;
}
if(get_class($elem) == 'Giocattoli' ){
    echo $elem->caratteristiche;
    echo $elem->dimensioni  . '<hr>' ;
}

}






?>

