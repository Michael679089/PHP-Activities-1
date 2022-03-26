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
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
            <img class="img-cover" src="https://images.unsplash.com/photo-1512125098323-cce1035bf4bf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHRlbGVwaG9uZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=8" alt="number to words">
            <p class="display-3 contrast bg-light text-primary m-2" >Telephone Dial</p>
        </div>
    </div>

    <!-- Go back Home Btn -->
    <div class="d-flex justify-content-center mx-2">
        <a href="index.php" class="btn btn-primary text-light my-2" id="HomeBTN">
            <p> Go back to index. </p>
        </a>
    </div>

    <!-- Telephone Dial -->
    <div class="card m-3">
        <div class="card-header"> Program #2 </div>
        <div class="card-body">
            <div class="alert alert-info">
                <p class="text-break">Instructions: <br> Write a program that will input a single character and print out the corresponding digit on the telephone digits and letters on a telephone are associated as follows: <br>
                    2 - ABC 6 - MNO <br>
                    3 - DEF 7 - PQRS <br>
                    4 - GHI 8 - TUV <br>
                    5 - JKL 9 - WXY <br>
                    There is no digit corresponding to Z. For this letter, your program should print a message indicating that they do not exist on a telephone dial. The program should accept either in uppercase or lowercase letter.</p>
            </div>


            <!-- Input and Output -->
            <!-- INPUT -->
            <div class="card my-3">
                <div class="card-header">
                    <p class="text-muted"> Input Letter: </p>
                </div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="telephoneCharacter" placeholder="Input letter." class="form-label input-responsive" maxlength="1">
                            </div>
                            <div class="col-12">
                                <div class="col-auto d-flex justify-content-sm-end">
                                    <input type="submit" class="btn btn-dark">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- OUTPUT -->
            <div class="card my-3">
                <div class="card-header">
                    <p class="text-muted"> Output: </p>
                </div>
                <div class="card-img-bottom text-center">
                    <div class="text-uppercase">
                        <div class="container-fluid my-2">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $character = $_POST['telephoneCharacter'];
                                if (($character == NULL) == true) {
                                    print
                                        " 
                                    <script type='text/javascript'> 
                                        $(document).ready(function(){
                                            swal({
                                                title: 'Missing Inputs',
                                                text: 'Telephone Dial is missing inputs.',
                                                icon: 'warning',
                                                cancel: true
                                            })
                                        });
                                    </script>
                                    ";
                                    print "No Input";
                                } else if (($character == NULL) == false) {
                                    if (in_array(strtoupper($character), ['A', 'B', 'C'])) {
                                        print "<h3 class='text-info alert alert-info'> 2 - ABC</h3>";
                                    } else if (in_array(strtoupper($character), ['D', 'E', 'F'])) {
                                        print "<h3 class='text-info alert alert-info'> 3 - DEF</h3>";
                                    } else if (in_array(strtoupper($character), ['G', 'H', 'I'])) {
                                        print "<h3 class='text-info alert alert-info'> 4 - GHI</h3>";
                                    } else if (in_array(strtoupper($character), ['J', 'K', 'L'])) {
                                        print "<h3 class='text-info alert alert-info'> 5 - JKL</h3>";
                                    } else if (in_array(strtoupper($character), ['M', 'N', 'O'])) {
                                        print "<h3 class='text-info alert alert-info'> 6 - MNO</h3>";
                                    } else if (in_array(strtoupper($character), ['P', 'Q', 'R', 'S'])) {
                                        print "<h3 class='text-info alert alert-info'> 7 - PQRS</h3>";
                                    } else if (in_array(strtoupper($character), ['T', 'U', 'V'])) {
                                        print "<h3 class='text-info alert alert-info'> 8 - TUV</h3>";
                                    } else if (in_array(strtoupper($character), ['W', 'X', 'Y'])) {
                                        print "<h3 class='text-info alert alert-info'> 9 - WXY</h3>";
                                    } else if (in_array(strtoupper($character), ['Z'])) {
                                        print "<h3 class='text-danger alert-danger'> Z does not exist on a telephone dial. </h3>";
                                    }
                                }
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