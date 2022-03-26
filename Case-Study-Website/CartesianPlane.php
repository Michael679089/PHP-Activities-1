<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <!-- Sweet Alert 2 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>

    <!-- Custom Style -->
    <link rel="stylesheet" href="CSS/3rd_activity.css">
    <script src="JS/validation.js"></script>
    <script src="JS/intro.js"></script>
</head>

<!-- BODY -->

<body>
    <!-- Intro Container -->
    <div class="container-fluid above-container d-flex justify-content-center display-1 intro-padding">
        <p class="text-uppercase text-center text-nowrap display-1"> 🌐 </p>
        <p class="text-uppercase text-start text-nowrap display-5">
            <b>Welcome <br> To My <br> 3rd Activity Website</b>
        </p>
    </div>

    <!-- Top Banner -->
    <div class="top-image container-fluid text-center p-md-3" id="demo">
        <div>
            <img class="img-cover" src="https://image.shutterstock.com/image-vector/cartesian-coordinate-system-plane-0-600w-1218965347.jpg" alt="number to words">
            <p class="display-3 contrast bg-light text-primary m-2">Cartesian Plane Program</p>
        </div>
    </div>

    <!-- Go back Home Btn -->
    <div class="d-flex justify-content-center mx-2">
        <a href="index.php" class="btn btn-primary text-light my-2" id="HomeBTN">
            <p> Go back to index. </p>
        </a>
    </div>

    <!-- Cartesian Plane -->
    <div class="container-fluid" id="container-1">
        <div class="card m-2">
            <div class="card-header">Program #1</div>
            <div class="card-img-top">
                <canvas id="canvas_1">
                    Your browser does not support the HTML canvas tag.
                </canvas>
            </div>
            <!-- Input & Ouput -->
            <div class="card-body">
                <div class="alert alert-info">
                    <p class="text-break">Instructions: <br> 
                        Write a program that prompts the user to input the x-y coordinate of a point in a Cartesian plane. The program should then output a message indicating whether the point is the origin point, is located on the x (or y) axis, or appears in a particular quadrant.
                    </p>
                </div>
                <!-- Input -->
                <div class="card m-sm-3 m-1">
                    <div class="card-header">
                        <div class="text-muted"> Input Number Only:</div>

                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="container d-flex justify-content-center">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 p-3">
                                            <label for="input-x">X - Coordinate</label>
                                            <br>
                                            <input type="number" name="input-x" placeholder="input x-coordinate" class="input-responsive form-control">
                                        </div>
                                        <div class="col-md-6 p-3">
                                            <label for="input-y">Y - Coordinate</label>
                                            <br>
                                            <input type="number" name="input-y" placeholder="input x-coordinate" class="input-responsive form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-2">
                                    <div class="col-auto d-flex justify-content-sm-end">
                                        <input type="submit" class="btn btn-dark">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Output -->
                <div class="card m-sm-3 m-1">
                    <div class="card-header">
                        <div class="text-muted"> Output:</div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <?php


                            // The Event when Submit is clicked
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $coorX = $_POST['input-x'];
                                $coorY = $_POST['input-y'];


                                // Checks if inputs are NULL
                                if ($coorX == NULL) {
                                    print
                                        " 
                                    <script type='text/javascript'> 
                                        $(document).ready(function(){
                                            swal({
                                                title: 'Missing Inputs',
                                                text: 'Cartesian Plane is missing inputs.',
                                                icon: 'warning',
                                                cancel: true
                                            })
                                        });
                                    </script>
                                    ";
                                }
                                if ($coorX == NULL) {
                                    $coorX = 0;
                                }

                                if ($coorY == NULL) {
                                    $coorY = 0;
                                }

                                print "coordinate: (X: $coorX, Y: $coorY)";
                                print "<br>";

                                $coorY = $coorY * -1;

                                // Check if point is the origin point
                                if (($_POST['input-x'] == 0 && $_POST['input-y'] == 0)) {
                                    print "<div class='alert alert-info my-2'> The point is at the origin point. ( X = 0 and Y = 0 ). </div>";
                                }

                                // Which point is the quadrant
                                else if ($coorX >= 1 && $coorY <= -1) {
                                    print "<div class='alert alert-info my-2'> This point is in the 1st quadrant </div>";
                                } else if ($coorX <= -1 && $coorY <= -1) {
                                    print "<div class='alert alert-info my-2'> This point is in the 2nd quadrant </div>";
                                } else if ($coorX <= -1 && $coorY >= -1) {
                                    print "<div class='alert alert-info my-2'> This point is in the 3rd quadrant </div>";
                                } else if ($coorX >= 1 && $coorY >= 1) {
                                    print "<div class='alert alert-info my-2'> This point is in the 4th quadrant </div>";
                                }

                                // Create the Point in the Canvas Cartesian Plane
                                print
                                    "
                                <script type='text/javascript'>
                                $(document).ready(function() {
                                    var canvas_1 = document.getElementById('canvas_1');
                                    var ctx = canvas_1.getContext('2d');
                            
                                    // FUNCTIONS
                                    function point(x, y, canvas) {
                                        canvas.beginPath();
                                        canvas.moveTo(x, y);
                                        canvas.lineTo(x + 0.5, y + 0.5);
                                        canvas.stroke();
                                    }
                                    //displaying the origin point
                                    var transX = canvas_1.width * 0.5;
                                    var transY = canvas_1.height * 0.5;
                                    ctx.translate(transX, transY);
                                    point(0,0,ctx);
        
                                    point($coorX, $coorY, ctx);
                                });
                                </script>
                                ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- BOOTSTRAP script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>