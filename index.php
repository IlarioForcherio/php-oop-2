<?php 

include_once __DIR__ . '/category.php';
include_once __DIR__ . '/accessori.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/giocattoli.php';


$arrayCategory = [
    'cane' => new Category ('Cane', '<i class="fa-solid fa-dog"></i>'),
    'uccello' => new Category('Uccello', '<i class="fa-solid fa-dove"></i>'),
    'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),

];

//var_dump($arrayCategory);



$arrayProduct = [
    new Cibo('https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80', 'Royal Canin', 43.99, $arrayCategory['cane'], 545, 'prosciutto,riso' ),
    new Cibo('https://images.unsplash.com/photo-1608408891486-f5cade977d19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80', 'Almo Nature', 44.99, $arrayCategory['cane'], 600, 'manzo,cereali' ),
    new Accessori('https://images.unsplash.com/photo-1667842287354-6bd05f8ef39a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80', 'Voliera Ferplast Bella Casa', 60, $arrayCategory['uccello'], 'legno', 'L 83 x P 67 x H 153 cm'), 
    new Giocattoli('https://images.unsplash.com/photo-1425082661705-1834bfd09dca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80', 'Topini di peluche Trixie', 4.99, $arrayCategory['gatto'], 'Morbido con codina in corda', '8,5 x 10 cm' ),  
];

foreach ($arrayProduct as $elem){
//var_dump( $elem);

// echo  $elem->immagine;
// echo $elem->nome . '<br>'  ;
// echo $elem->prezzo . '<br>' ;
// echo $elem->category->nome . '<br>' ;
// echo $elem->category->icona . '<br>';

// echo $elem->print(). '<br>'. '<hr>';




}



?>

<!doctype html>
<html lang="en">

<head>
  <title>php-oop-2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <div>
    <div class="m-auto row w-75 gap-2">
       
            <?php foreach ($arrayProduct as $elem){?>
            <div class="col mt-4 ">    
                <div class="card " style="width: 18rem; height: 25rem;">
                  <img src="<?php echo $elem->immagine ?>"  class="card-img-top" alt="...">
                  <div class="card-body">
                   <h5 class="card-title"><?php echo $elem->nome ?> </h5>
                  <p class="card-text  ">Prezzo: €<?php echo $elem->prezzo ?></p>
                  <p class="card-text"><?php echo $elem->category->icona . $elem->category->nome ?></p>
                  <p class="card-text"><?php echo $elem->print() ?></p>
                 </div>
                </div>
            </div>
        
            <?php  } ?>
  




       
   
  </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


</body>

</html>


