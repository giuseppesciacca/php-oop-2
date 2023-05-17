<?php
//Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
//Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Models/Laptop.php';

include_once __DIR__ . '/Database/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC component</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center py-5 bg-dark text-white">PC COMPONENTS</h1>
    </header>


    <main>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </main>




    <footer class="bg-dark text-white">
        <div class="container py-3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, corporis quaerat illum incidunt, ducimus, delectus rerum iusto vel nulla sit officiis est reiciendis! A ea iure explicabo quos ipsa et!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit similique nam ipsum. Pariatur repellat facilis cupiditate quis soluta dignissimos, fugiat voluptatibus aspernatur molestiae, hic earum esse. Iure nobis aut qui.
            </p>
            <ul>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
                <li>lorem</li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>