<?php
include_once ('../resources/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8dabcbb496.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8dabcbb496.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/band_jam.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <title>Maya V3</title>
</head>
<body>
<section>
    <div id="hero">
        <?php include('top_nav.php'); ?>
    </div>
</section>
<section id="next">
    <div class="container">
        <div class="row">
            <h1>Band Jam</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequatur culpa et eveniet, inventore ipsum
                libero neque sit temporibus ullam. Animi, illum neque quia vero voluptate voluptatem! Assumenda consectetur
                distinctio, dolore, dolorem ea ipsam laudantium maiores modi molestiae, non nulla officia quaerat quas repellat
                similique unde veniam voluptate voluptatem voluptatum.</p>
        </div>
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/images/carousel/image-01.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/carousel/image-02.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/images/carousel/image-03.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="../js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>