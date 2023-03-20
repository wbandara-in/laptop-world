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
    <title>contact us</title>
</head>

<body class="bg-black">
    <?php
    include "header.php";
    ?>
    <div class="col-12 m-0 justify-content-center ps-lg-0 ps-md-4 ps-4">
        <div class="col-12 d-flex justify-content-center mt-lg-0 mt-3">
            <h2 class="text-uppercase fs-3 fw-bolder text-warning">contact us</h2>
        </div>
        <div class="row col-12 col-lg-12 d-flex justify-content-center  mt-5  mb-3 ">
            <div class="col-lg-5 col-12 bg-danger p-1 rounded-3 border border-2 border-light">
                emmbed map link map
            </div>
            <div class="col-12 ms-lg-5 col-lg-4 p-3 border rounded-3 border-light border-2 mt-lg-0 mt-md-2 mt-2">
                <div class="col-12 mt-1">
                    <span class="text-light mt-2">User name</span>
                </div>
                <div class="col-12 border border-1 rounded-2 border-light m-0">
                    <input class="col-12  input-customize-contact-us bg-black text-light" type="text" name="" id="">
                </div>
                <div class="col-12 mt-1">
                    <span class="text-light mt-2">email</span>
                </div>
                <div class="col-12 border border-1 rounded-2 border-light m-0">
                    <input class="col-12 input-customize-contact-us bg-black text-light" type="text" name="" id="">
                </div>
                <div class="col-12 mt-1">
                    <span class="text-light mt-2">subject</span>
                </div>
                <div class="col-12 border border-1  rounded-2 border-light m-0">
                    <input class="col-12 input-customize-contact-us bg-black text-light" type="text" name="" id="">
                </div>
                <div class="col-12 mt-1">
                    <span class="text-light mt-2">message</span>
                </div>
                <div class="col-12 border border-1  rounded-2 border-light m-0">
                    <textarea class="col-12 bg-black textarea-customize-contact-us pt-2" name="" id="" cols="30" rows="7"></textarea>
                </div>
                <div class="col-12 border-0 mt-2"><button class="col-12 btn btn-warning">send message</button></div>
            </div>
        </div>
    </div>
    <div>
        <div class="col-12 row d-flex ps-lg-0 ps-md-3 ps-4 justify-content-center text-light text-center">
            <div class="col-lg-3 col-md-4 col-12 rounded-3 border border-2 border-light m-lg-4 m-md-3 mt-2 p-2 contact-buttons">
                <i class="bi bi-geo-fill fs-3 me-2"></i> <span class="fw-bold fs-3">find us</span>
            </div>
            <div class="col-lg-3 col-md-4 col-12 rounded-3 border border-2 border-light m-lg-4 m-md-3 mt-2 p-2 contact-buttons">
                <i class="bi bi-telephone fs-3 me-2"></i> <span class="fw-bold fs-3">contact us</span>
            </div>
            <div class="col-lg-3 col-md-4 col-12 rounded-3 border border-2 border-light m-lg-4 m-md-3 mt-2 p-2 contact-buttons">
                <i class="bi bi-envelope-at-fill fs-3 me-2"></i> <span class="fw-bold fs-3">email</span>
            </div>
        </div>

    </div>
    <?php
    include "footer.php";
    ?>
    <!-- <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script> -->
</body>

</html>