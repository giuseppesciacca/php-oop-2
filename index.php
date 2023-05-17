<?php
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

                    <div class="col-3">

                        <div class="card h-100">
                            <h5 class="card-title text-center p-3"> <?= $computer->getType() ?> </h5>
                            <img class="card-img-top" src="<?= $computer->urlPath ?>" alt="Title">
                            <div class="card-body">

                                <h4 class="card-title"> <?= $computer->model ?> </h4>

                                <hr>

                                <p class="card-text"> <strong>Ram:</strong> <?= $computer->ram ?></p>
                                <p class="card-text"> <strong>GPU:</strong> <?= $computer->gpu ?></p>
                                <p class="card-text"><strong>CPU:</strong> <?= $computer->cpu ?></p>
                                <p class="card-text"><strong>Storage:</strong> <?= $computer->storage ?></p>
                                <p class="card-text"><strong>GPU:</strong> <?= $computer->gpu ?></p>
                                <p class="card-text"><strong>Motherboard:</strong> <?= $computer->motherboard ?></p>

                                <?php if ($computer->battery) : ?>
                                    <p class="card-text"><strong>Battery:</strong> <?= $computer->battery ?></p>
                                <?php endif ?>

                                <?php if ($computer->mouse) : ?>
                                    <p class="card-text"><strong>Mouse:</strong> <?= $computer->mouse ?></p>
                                <?php endif ?>

                                <?php if ($computer->monitor) : ?>
                                    <p class="card-text"><strong>Monitor:</strong> <?= $computer->monitor ?></p>
                                <?php endif ?>

                                <?php if ($computer->case) : ?>
                                    <p class="card-text"><strong>Case:</strong> <?= $computer->case ?></p>
                                <?php endif ?>

                                <?php if ($computer->psu) : ?>
                                    <p class="card-text"><strong>PSU:</strong> <?= $computer->psu ?></p>
                                <?php endif ?>

                                <hr>

                                <p class="card-text"><strong>SOMMARY:</strong> <?= $computer->getInfo() ?></p>

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