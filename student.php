<?php
include "connect.php";

$sql = "SELECT * FROM login";
$result = $conn->query($sql);





?>
<!doctype html>
<html lang="en">
<!-- divinectorweb.com -->

<head>
    <meta charset="UTF-8">
    <title>Login Form in HTML & CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #008AB8;">
    <div class="conteiner">
        <div class="row">
            <div class="card ">
                <div class="card-header d-flex justify-content-around">
                    <div class="col-sm fw-bold d-flex">
                        <img src="logo.svg" alt="" class="fonnt ">
                    </div>
                    <div class="col-sm d-flex justify-content-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a type="submit" href="#c" class="btn fs-2">About me</a>
                            <a type="submit" href="test.php" class="btn fs-2">Level</a>
                            <a type="submit" href="#a" class="btn fs-2">Group</a>
                        </div>
                    </div>

                    <div class="col-sm d-flex justify-content-end">
                        <img src="user.png" alt="" class="rounded-circle" style="width: 13%;">
                    </div>

                </div>
                <div class="card-body bo">

                    <form action="" method="post">

                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {



                        ?>

                                <div class="d-flex justify-content-center gap-2" style="margin:100px 0;">
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">F Name:</label></i>
                                            <h4 class="text-dark fs-2">Anvarjon</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">

                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Last Name:</label></i>
                                            <h4 class="text-dark fs-2">Olimjonov</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Phone:</label></i>
                                            <h4 class="text-dark fs-2">+998 98 000 10 44</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center gap-2 mt-2" style="margin:100px 0;">
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">F Name:</label></i>
                                            <h4 class="text-dark fs-2">Anvarjon</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">

                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Last Name:</label></i>
                                            <h4 class="text-dark fs-2">Olimjonov</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Phone:</label></i>
                                            <h4 class="text-dark fs-2">+998 98 000 10 44</h4>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center gap-2" style="margin:100px 0;">
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">F Name:</label></i>
                                            <h4 class="text-dark fs-2">Anvarjon</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">

                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Last Name:</label></i>
                                            <h4 class="text-dark fs-2">Olimjonov</h4>
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                        <div class="form-control d-flex gap-2 ">
                                            <i class="bi bi-person-check-fill fs-2 form-label"><label for="">Phone:</label></i>
                                            <h4 class="text-dark fs-2">+998 98 000 10 44</h4>
                                        </div>
                                    </div>


 
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class=" d-flex justify-content-end gap-2">
                            <a href="up" class="btn btn-success">Edit</a>
                            <a href="up" class="btn btn-danger">Delete</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>