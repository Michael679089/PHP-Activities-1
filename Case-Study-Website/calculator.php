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
            <img class="img-cover" src="https://cdn-skill.splashmath.com/panel-uploads/GlossaryTerm/ee0ca4fa432a4653a5eb54b2a7550d6f/1565147185_numberwords-1.png" alt="number to words">
            <p class="display-3 contrast bg-light text-primary m-2">Calculator Program</p>
        </div>
    </div>

    <!-- Go back Home Btn -->
    <div class="d-flex justify-content-center mx-2">
        <a href="index.php" class="btn btn-primary text-light my-2" id="HomeBTN">
            <p> Go back to index. </p>
        </a>
    </div>

    <!-- Calculator -->
    <div class="card m-3">
        <div class="card-header">
            Program #3
        </div>

        <div class="card-body">
            <div class="alert alert-info">
                <p class="text-break">Instructions: <br>
                    Write a program that mimics a calculator. The program should take as input two integers and the operation to be performed. It should then output the number, the operator and the result. (For division, if the denominator is zero, output an appropriate message).
                </p>
            </div>
        </div>

        <!-- Input and Output -->
        <div class="card-img-top">
            <div class="card m-3">
                <!-- output -->
                <div class="card-header"> Output: </div>
                <div class="card-body d-flex justify-content-center">
                    <?php
                    $cal_input1 = 0;
                    $cal_input2 = 0;
                    $cal_operator = NULL;

                    // Functions
                    function addition($x, $y)
                    {
                        $sum = $x + $y;
                        return $sum;
                    }
                    function subtraction($x, $y)
                    {
                        $difference = $x - $y;
                        return $difference;
                    }
                    function multiplication($x, $y)
                    {
                        $product = $x * $y;
                        return $product;
                    }
                    function division($x, $y)
                    {
                        if ( $y != 0) {
                            $quotient = $x / $y;
                            return $quotient;

                        } else if ($y == 0 && ($x > 0 || $x < 0 ) ) { 
                            // Check if division by zero is allowed
                            print "<div class='container text-center' style='position: absolute; opacity: 0.9; backdrop-filter: blur(10px);'>";
                            print "<div class='alert alert-danger'> <p> 0 cannot be divided </p> </div>";
                            print "</div>";
                        }
                    }

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if ($_POST['cal_input1'] === NULL) {
                            $cal_input1 = 0;
                        } else if ($_POST['cal_input2'] === NULL) {
                            $cal_input2 = 0;
                        } else {
                            $cal_input1 = $_POST['cal_input1'];
                            $cal_input2 = $_POST['cal_input2'];
                            $cal_operator = $_POST['cal_operator'];
                        }

                        // For Displaying the Numbers
                        switch ($cal_operator) {
                            case 'add':
                                print "<p class='alert alert-info'>";
                                print "$cal_input1 ➕ $cal_input2 = ";
                                print addition($cal_input1, $cal_input2);
                                print "</p>";
                                break;
                            case 'minus':
                                print "<p class='alert alert-info'>";
                                print "$cal_input1 ➖ $cal_input2 = ";
                                print subtraction($cal_input1, $cal_input2);
                                print "</p>";
                                break;
                            case 'multiply':
                                print "<p class='alert alert-info'>";
                                print "$cal_input1 ✖ $cal_input2 = ";
                                print multiplication($cal_input1, $cal_input2);
                                print "</p>";
                                break;
                            case 'divide':
                                print "<p class='alert alert-info'>";
                                print "$cal_input1 ➗ $cal_input2 = ";
                                print division($cal_input1, $cal_input2);
                                print "</p>";
                                break;
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- input -->
            <div class="card-body">
                <form class="row needs-validation" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
                    <div class="row">
                        <div class="col-5">
                            <label for="cal_input1" class="form-label">Input 1</label>
                            <input name="cal_input1" type="number" class="form-control input-responsive" placeholder="first input" novalidate required>
                            <div class="invalid-feedback">
                                Please input the first number.
                            </div>
                        </div>
                        <div class="col-2">
                            <select name="cal_operator" class="form-select input-responsive" aria-label="Default select example">
                                <option value="add">➕</option>
                                <option value="minus">➖</option>
                                <option value="multiply">✖</option>
                                <option value="divide">➗</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="cal_input2" class="form-label">Input 2</label>
                            <input name="cal_input2" type="number" class="form-control input-responsive" placeholder="second input" novalidate required>
                            <div class="invalid-feedback">
                                Please input the second number.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-sm-end my-2">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Validation Script  -->
    <script src="JS/validation.js"></script>
    <!-- BOOTSTRAP script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>