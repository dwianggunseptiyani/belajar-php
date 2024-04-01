<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="product.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">MAKANAN TRADISIONAL</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <?php
            $dishes = array(
                array("img/naskun.jpg", "NASI KUNING", "Nasi Kuning adalah hidangan khas Indonesia yang terdiri dari nasi yang dimasak dengan santan dan kunyit sehingga berwarna kuning.", "Rp 5.000"),
                array("img/pempek.jpg", "PEMPEK", "Pempek adalah makanan khas Palembang, Sumatera Selatan, yang terbuat dari ikan yang digiling halus, tepung sagu, dan bumbu-bumbu rempah.", "Rp 5.000"),
                array("img/gadogado.jpg", "GADO GADO", "Gado-gado adalah hidangan salad tradisional Indonesia yang terdiri dari campuran sayuran segar.", "Rp 15.000"),
                array("img/nasgor.jpg", "NASI GORENG", "Nasi goreng adalah salah satu makanan tradisional Indonesia yang paling populer. Ini adalah nasi yang digoreng bersama dengan bumbu-bumbu.", "Rp 13.000"),
                array("img/rendang.jpg", "RENDANG", "Hidangan ini terbuat dari daging sapi yang dimasak dalam santan dan rempah-rempah", "Rp 25.000"),
                array("img/sate.jpg", "SATE", "Sate adalah makanan yang terdiri dari potongan daging (biasanya daging ayam, sapi, atau kambing) yang ditusuk dan dipanggang di atas bara api atau arang.", "Rp 30.000")
            );

            foreach ($dishes as $dish) {
            ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $dish[0]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dish[1]; ?></h5>
                            <p class="card-text"><?php echo $dish[2]; ?></p>
                        </div>
                        <div class="mb-5 d-flex justify-content-around">
                            <h3><?php echo $dish[3]; ?></h3>
                            <button class="btn btn-primary">ORDER NOW</button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
