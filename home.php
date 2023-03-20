<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/semantic.css">
    <link rel="stylesheet" href="bootstrap-icons-1.10.3/bootstrap-icons.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>HOME</title>
</head>

<body class="bg-black-1 overflow-x-hidden">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-12  ">

                <?php
                include "header.php"
                ?>

                <div class=" col-12 mt-2">
                    <!-- replace search items here -->
                </div>

                <!-- carousel by main -->

                <!-- swiper start -->

                <div class="col-12 mt-3">
                    <div class="row justify-content-center">

                        <div class="col-11">
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-img col-12">
                                        <img src="main_carousel_images/carouselmain.png" alt="">
                                    </div>
                                    <div class="swiper-slide swiper-img">
                                        <img src="main_carousel_images/web_banner_sample_45-min.png" alt="">
                                    </div>
                                    <div class="swiper-slide swiper-img">
                                        <img src="main_carousel_images/web_banner_sample_3-minss.png" alt="">
                                    </div>
                                    <div class="swiper-slide swiper-img">
                                        <img src="main_carousel_images/carouselmain.png" alt="">
                                    </div>
                                    <div class="swiper-slide swiper-img">
                                        <img src="main_carousel_images/carouselmain.png" alt="">
                                    </div>
                                    <div class="swiper-slide swiper-img">
                                        <img src="main_carousel_images/web_banner_sample_1-min.png" alt="">
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- swiper end -->


                <!-- swiper start -->

                <div class="col-12 height-1 mt-3  ">
                    <div class="row justify-content-center h-100 ">
                        <div class="col-11">

                            <!--swiper 2 start -->

                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <?php

                                    for ($i = 0; $i < 15; $i++) {
                                    ?>
                                        <div class="swiper-slide swiper2">
                                            <div class="swiper3 bg-dark rounded-3-1">
                                                <img src="sub_images/category_img/top list.png" alt="">
                                            </div>
                                            <div class="bg-light bg-opacity-25 swipertitle-under py-2">
                                                <span class="text-warning fs-6 text-uppercase fw-bold py-2">
                                                    item name dfgbzed dfbzgfthz
                                                </span>
                                            </div>
                                        </div>
                                    <?php

                                    }

                                    ?>





                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                            <!--swiper 2 end-->
                        </div>


                    </div>

                </div>
                <!-- swiper end -->



                <!-- carousel 2 card display -->
                <div class="col-12  justify-content-center pt-3 mt-5 pb-3">
                    <div class="col-12 justify-content-center align-items-center text-light" style="display: flex;flex-direction: column;">
                        <h4 class="fs-3 fw-lighter">The Take Over Is Complete</h4>
                        <h3 class="fw-bolder fs-2 text-uppercase">new arrivals</h3>
                        <div class="col-12 justify-content-center align-items-center" style="display: flex;flex-direction: row;">
                            <p>new stock in store . pick up . delivary</p>
                        </div>
                    </div>
                    <!-- reserved for product swiping  -->
                    <div class="row justify-content-center">
                        <div class="col-12  mt-5 ">
                            <div #swiperRef="" class="swiper mySwiper3">

                                <div class="swiper-wrapper">
                                    <?php
                                    for ($d = 0; $d < 8; $d++) {
                                    ?>

                                        <div class="swiper-slide">
                                            <div class="col-12 bg-black bg-opacity-50">
                                                <img src="sub_images/category_img/top list.png" alt="">
                                            </div>
                                            <div class="col-12 mt-3">
                                                <p class="text-light fw-light f-14 text-uppercase">
                                                    items deatil load fro DBMSdsfsdfsdfs dfsdfsd fsdfsdfsd fsdffdgfgdfg
                                                </p>
                                            </div>
                                            <div class="col-12 fw-bolder  mt-4">
                                                <p class="text-warning">
                                                    LKR 000000/=
                                                </p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>


                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>

                    <!-- reserved for product swiping  -->
                </div>
                <!-- carousel 2 card display -->

                <br><br><br><br>


                <div class="col-12 text-light mt-5">
                    <div class="col-12 justify-content-center align-items-center text-light mb-5" style="display: flex;flex-direction: column;">
                        <h4 class="fs-3 fw-lighter">Light on the wallet</h4>
                        <h3 class="fw-bolder fs-2 text-uppercase">custom desktops</h3>
                        <div class="col-6 text-center justify-content-center align-items-center" style="display: flex;flex-direction: row;">
                            <p>We have the technical resources and the expertise in both, hardware equipment as well as
                                customize the solution, and are one of the leading computer suppliers in Sri Lanka.</p>

                        </div>
                    </div>
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
                                        <div class="mt-5 text-gap">
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
        </div>
    </div>



    <!-- footer -->
    <?php include "footer.php" ?>
    <!-- footer -->


    <script src="JS/jquery.js"></script>
    <script src="JS/swiper-bundle.min.js"></script>
    <script src="JS/bootstrap.bundle.js"></script>
    <script>
        $(document).ready(function() {

            var swiper = new Swiper(".mySwiper", {
                cssMode: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });


            var swiper2 = new Swiper(".mySwiper2", {
                slidesPerView: 2,
                spaceBetween: 10,

                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    400: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    650: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    800: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1000: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                },

                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },



            });

        });
        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                400: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>

</body>

</html>