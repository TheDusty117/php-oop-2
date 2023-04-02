<?php
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';


// $prodotto = new Product ('pallina', 4.0, 'pallina di gomma per cani');
// var_dump($prodotto);

$palla = new Toy ('palla',10.0, 'palla giocattolo', 'giocattolo');
var_dump($palla);

$mangime = new Food ('Busta mangime', 6.0, 'busta mangime da 5kg', 'pollo, manzo, verdure');
var_dump($mangime);



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

    <h2>oop versione 2</h2>
    
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nome prodotto</h5>
        <p class="card-text">descrizionedescrizionedescriziondescrizione</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">spec1</li>
        <li class="list-group-item">spec2</li>
        <li class="list-group-item">pezzi disponibili</li>
      </ul>
    </div>
  </div>

</main>








</body>
</html>