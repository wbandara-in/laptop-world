<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/semantic.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-icons-1.10.3/bootstrap-icons.css">
    <title>custom cooler</title>
</head>

<body class="bg-black">
    <?php
    include "header.php";
    ?>
    <div class="col-12 row m-0 pt-4">
        <div class=" col-lg-3 col-md-4 col-12 pb-4 border-0 border-secondary border-end">

            <div class="col-12 text-light row justify-content-center">
                <!-- title price range editers -->
                <div class="col-12 d-flex justify-content-start mt-5">
                    <div>
                        <span class="ps-3 fs-4 fw-bold text-uppercase text-warning">price range</span>
                    </div>
                </div>
                <div class="col-10 mt-2">
                    <input class="border-3 border-secondary rounded-3 bg-dark text-light p-2" type="text" name="" id="pricevaluedisplay1">
                    <br><br>
                    <input class="col-12" min="0" max="50" step="0.1" onchange="valuedisplay();" type="range" name="" id="priceselecter1">
                </div>

                <div class="col-12 d-flex justify-content-start mt-5">
                    <span class="ps-3 fs-4 fw-bold text-uppercase text-warning">Brand</span>
                </div>

                <?php for ($z = 0; $z < 6; $z++) { ?>
                    <div class="ui  checkbox col-lg-10 col-6 mt-3 ">
                        <input id="<?php echo "z" . $z ?>" type="checkbox">
                        <label for="<?php echo  "z" . $z ?>" class="text-light" style="cursor: pointer;">Activ000</label>
                    </div>
                <?php } ?>
                <!-- checkbox -->


            </div>
            <div class="col-12 d-flex justify-content-center ">
                <button class=" btn btn-warning col-4 mt-5"><i class="bi bi-funnel"></i> filter</button>
            </div>
        </div>
        <div class=" col-lg-9 col-md-8 col-12 ">
            <div class=" text-light fw-light fs-3 mb-4 mt-1">COOLING AND LIGTING</div>
            <div class="col-12 ">
                <div class="row justify-content-center">


                    <?php for ($p = 0; $p < 5; $p++) { ?>

                        <!-- single card -->
                        <div class="col-12 col-lg-6  row p-3 mt-5  pb-5">
                            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center bg-black">
                                <img class="col-6 col-md-8 col-lg-12" src="sub_images\products_img\Q14-removebg-preview.png" alt="" srcset="">
                            </div>
                            <div class="col-12 col-md-6 justify-content-center bg-black py-3">
                                <span class=" text-uppercase fw-bolder text-warning">custom destop
                                    <?php echo $p ?></span>
                                <div class="mt-5 text-gap text-white">
                                    <ul class="list-unstyled">
                                        <li>
                                            PROCESSOR - INTEL CORE I3 10100
                                        </li>

                                        <li>
                                            MOTHERBOARD -BIOSTAR H410MH S2 DDR4
                                        </li>
                                        <li>
                                            MEMORY (RAM) - 8GB 2666 DDR4
                                        </li>
                                        <li>
                                            GRAPHIC - Intel®️ UHD Graphics 610
                                        </li>
                                        <li>
                                            POWER SUPPLY - GAMDIAS 450W PSU
                                        </li>
                                        <li>
                                            STORAGE : SSD - 240GB SSD - SATA
                                        </li>
                                        <li>
                                            CASING - GFIELD Q14 CASE
                                        </li>
                                        <li>
                                            STORAGE : SSD - 240GB SSD - SATA
                                        </li>
                                        <li>
                                            RAM Upgrade 16GB - 13,000/=
                                        </li>
                                    </ul>

                                    <p class="fw-bold f-18">Rs.109,000/=</p>
                                    <br>


                                </div>
                                <div class="col-12">
                                    <button class="col-lg-5 col-md-6 col-12 btn btn-warning fw-bolder ">quote</button>
                                </div>
                            </div>
                        </div>
                        <!-- single card -->
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="JS/script.js"></script>
</body>

</html>