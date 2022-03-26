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
            <p class="display-3 contrast bg-light text-primary m-2">Numbers to Words</p>
        </div>
    </div>

    <!-- Go back Home Btn -->
    <div class="d-flex justify-content-center mx-2">
        <a href="index.php" class="btn btn-primary text-light my-2" id="HomeBTN">
            <p> Go back to index. </p>
        </a>
    </div>

    <!-- Number to Words -->
    <div class="container">
        <div class="card my-3">
            <div class="card-header">
                Program #4
            </div>
            <!-- Input and Output -->
            <div class="card-body">

                <div class="alert alert-info">
                    <p class="text-break">Instructions: <br> Write a program that accepts a number and output its equivalent in words. <br>
                        Sample input/output dialogue: <br>
                        Input -> Enter a number : 1380 <br>
                        Output -> One thousand three hundred eighty <br>
                        Note: Maximum input number is 9999. <br>
                    </p>
                </div>

                <!-- Input -->
                <div class="card my-3">
                    <div class="card-header">
                        <p class="text-muted"> Input: </p>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row">
                                <div class="col-12">
                                    <input type="number" name="raw_Numbers" class="form-label input-responsive" min=0 max=9999>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-sm-end">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Output -->
                <div class="card my-3">
                    <div class="card-header">
                        <p class="text-muted"> Output: </p>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <?php
                            // initialize variables Termary Operator
                            $number = isset($_POST['raw_Numbers']) ? $_POST['raw_Numbers'] : '0';

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                //Functions
                                function convertNumberToWord($num = false)
                                {
                                    $num = str_replace(array(',', ' '), '', trim($num));
                                    if (!$num) {
                                        return false;
                                    }
                                    $num = (int) $num;
                                    $words = array();
                                    $list1 = array(
                                        '', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
                                        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
                                    );
                                    $list2 = array(
                                        '', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred'
                                    );
                                    $list3 = array(
                                        '', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
                                        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
                                        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
                                    );
                                    $num_length = strlen($num);
                                    $levels = (int) (($num_length + 2) / 3);
                                    $max_length = $levels * 3;
                                    $num = substr('00' . $num, -$max_length);
                                    $num_levels = str_split($num, 3);
                                    for ($i = 0; $i < count($num_levels); $i++) {
                                        $levels--;
                                        $hundreds = (int) ($num_levels[$i] / 100);
                                        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
                                        $tens = (int) ($num_levels[$i] % 100);
                                        $singles = '';
                                        if ($tens < 20) {
                                            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
                                        } else {
                                            $tens = (int)($tens / 10);
                                            $tens = ' ' . $list2[$tens] . ' ';
                                            $singles = (int) ($num_levels[$i] % 10);
                                            $singles = ' ' . $list1[$singles] . ' ';
                                        }
                                        $words[] = $hundreds . $tens . $singles . (($levels && (int) ($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
                                    } //end for loop
                                    $commas = count($words);
                                    if ($commas > 1) {
                                        $commas = $commas - 1;
                                    }
                                    return implode(' ', $words);
                                }

                                // Check if $number is not empty
                                if (($number === "") == false) {
                                    print "<p class='display-4 output_1 text-center'>";
                                    print convertNumberToWord($number); // Prints and Displays convertNumberToWord
                                    print "</p>";

                                    // Check if $number is empty
                                } else if (($number === "") == true) {
                                    print "<p class='display-1 alert alert-danger text-center'> Empty Input </p>";
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