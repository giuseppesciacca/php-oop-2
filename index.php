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
            <div class="row justify-content-center py-5">

                <?php foreach ($computers as $computer) : ?>

                    <div class="col-auto">

                        <div class="card h-100">
                            <img class="card-img-top" src="https://fastly.picsum.photos/id/176/200/200.jpg?hmac=c9CJbdQxNRFwPysb-dsVjeNmtU0quZAdXpf0FG2CfxU" alt="Title">
                            <div class="card-body">

                                <h5 class="card-title"> <?= $computer->getType() ?> </h5>
                                <h4 class="card-title"> <?= $computer->model ?> </h4>

                                <p class="card-text">Ram: <?= $computer->ram ?></p>
                                <p class="card-text">GPU: <?= $computer->gpu ?></p>
                                <p class="card-text">CPU: <?= $computer->cpu ?></p>
                                <p class="card-text">Storage: <?= $computer->storage ?></p>
                                <p class="card-text">GPU: <?= $computer->gpu ?></p>
                                <p class="card-text">Motherboard: <?= $computer->motherboard ?></p>

                                <?php if ($computer->battery) : ?>
                                    <p class="card-text">Battery: <?= $computer->battery ?></p>
                                <?php endif ?>

                                <?php if ($computer->mouse) : ?>
                                    <p class="card-text">Mouse: <?= $computer->mouse ?></p>
                                <?php endif ?>

                                <?php if ($computer->monitor) : ?>
                                    <p class="card-text">Monitor: <?= $computer->monitor ?></p>
                                <?php endif ?>

                                <?php if ($computer->case) : ?>
                                    <p class="card-text">Case: <?= $computer->case ?></p>
                                <?php endif ?>

                                <?php if ($computer->psu) : ?>
                                    <p class="card-text">PSU: <?= $computer->psu ?></p>
                                <?php endif ?>

                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                    <!-- /col -->
                <?php endforeach ?>

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