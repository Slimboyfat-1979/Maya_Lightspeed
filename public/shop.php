<?php include ('../resources/config.php') ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maya Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="../css/marquee.css">
    <link rel="stylesheet" href="../css/footer_style.css">
    <script>




    </script>
    <style>

    </style>
</head>
<body>

<section>
    <div id="hero">
        <?php include('top_nav.php'); ?>
    </div>
</section>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="brand-scroll">
    <section id="marquee">
        <div class="marquee">
            <ul class="marquee-content">
                <li><img class="cort" src="../assets/images/marquee/Cort-logo-white.png" alt=""></li>
                <li><img src="../assets/images/marquee/ernie_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/fender_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/fishman_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/Ibanez_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/martin-bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/kala_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/shure-bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/strymon_bg.png" alt=""></li>

                <li><img class="cort" src="../assets/images/marquee/Cort-logo-white.png" alt=""></li>
                <li><img src="../assets/images/marquee/ernie_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/fender_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/fishman_bg.png" alt=""></li>
                <li><img src="../assets/images/marquee/Ibanez_bg.png" alt=""></li>
            </ul>
        </div>
    </section>
</div>

<div id="shop-wrapper">

<!--                <div id="my-categories-82711721"></div>-->
<!--                <div>-->
<!--                    <script data-cfasync="false" type="text/javascript" src="https://app.business.shop/script.js?82711721&data_platform=code&data_date=2022-12-05" charset="utf-8"></script>-->
<!--                    <script type="text/javascript"> xCategoriesV2("id=my-categories-82711721"); </script>-->
<!--                </div>-->



                <div id="my-search-82711721"></div>
                <div>
                    <script data-cfasync="false" type="text/javascript" src="https://app.business.shop/script.js?82711721&data_platform=code&data_date=2022-12-04" charset="utf-8"></script>
                    <script type="text/javascript"> xSearch("id=my-search-82711721"); </script>
                </div>

        <div class="ecwid">
            <div id="my-store-82711721"></div>
            <div>
                <script data-cfasync="false" type="text/javascript" src="https://app.business.shop/script.js?82711721&data_platform=code&data_date=2022-12-04" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(5,5) list(25) table(25)","categoryView=grid","searchView=list","id=my-store-82711721");</script>
            </div>
        </div>
</div>


<script>



</script>

<script src="others.js"></script>
<script src="../js/index.js"></script>
<script src="../js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>



