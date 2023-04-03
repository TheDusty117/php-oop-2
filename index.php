<?php
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Kennel.php';
require_once __DIR__ . '/models/Animal.php';


$cane = new Animal("cane");
$gatto = new Animal("gatto");

// $prodotto = new Product ('pallina', 4.0, 'pallina di gomma per cani');
// var_dump($prodotto);

$palla = new Toy ('Palla', 10.0, 'palla di Gomma', 'gioco in gomma', $gatto);
var_dump($palla);

$mangime = new Food ('Busta mangime', 6.0, 'busta mangime da 5kg', 'pollo, manzo, verdure', $gatto );
var_dump($mangime);

$cuccia_legno = new Kennel ('Cuccia wood', 50.0 , 'cuccia in legno da esterno', 'Da Esterno', $cane);
var_dump($cuccia_legno);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/app.css">
  <title>OOP 2</title>
</head>
<body>
  

<main>

  <div class="container">



    <div class="row justify-content-evenly">

    <h1 class="text-center pb-5">Basic Pet Shop</h1>
      
    <!-- card gioco -->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php
              echo $palla->getName()
            ?>
          </h5>
          <p class="card-text">
          <?php
              echo $palla->getDescription()
            ?>
          </p>
        </div>
        <ul class="list-group list-group-flush">
  
          <li class="list-group-item">
            <?php
              echo $palla->getPrice()
            ?>
          </li>
  
          <li class="list-group-item">
            <?php
              echo $palla->getToy()
            ?>
          </li>

          <li class="list-group-item">
            <?php
              echo $palla->getAnimalType()
            ?>
          </li>
         
        </ul>
      </div>
  
    <!-- card cibo -->
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php
              echo $mangime->getName()
            ?>
          </h5>
          <p class="card-text">
          <?php
              echo $mangime->getDescription()
            ?>
          </p>
        </div>
        <ul class="list-group list-group-flush">
  
          <li class="list-group-item">
            <?php
              echo $mangime->getPrice()
            ?>
          </li>
  
          <li class="list-group-item">
            <?php
             echo $mangime->getFood()
            ?>
          </li>
         
        </ul>
      </div>



      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php
              echo $cuccia_legno->getName()
            ?>
          </h5>
          <p class="card-text">
          <?php
              echo $cuccia_legno->getDescription()
            ?>
          </p>
        </div>
        <ul class="list-group list-group-flush">
  
          <li class="list-group-item">
            <?php
              echo $cuccia_legno->getPrice()
            ?>
          </li>
  
          <li class="list-group-item">
            <?php
             echo $cuccia_legno->getKennel()
            ?>
          </li>
         
        </ul>
      </div>

    </div>
    


    


  </div>

</main>








</body>
</html>