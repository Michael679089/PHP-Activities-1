<!DOCTYPE html>
<head>
    <title>Grading System</title>
    <!-- Scripts -->
    <!-- Bootstrap_5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <!-- Sweet Alert 2 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>
</head>

<!-- THIS PART IS THE STYLES -->
<style>
* {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

input {
    width: 200px;
    transition: ease-in-out 1s;
}

/* INSIDE CONTAINER 1 */
#banner-wrapper {
    overflow: hidden;
    height: 30vh;
}

#School-banner {
    width: 100%;
    height: 100vh;
}

/* RESULTS */
#big-fontsize {
    font-size: 5em;
    transition: ease-out 1s;
}

#big-fontsize:hover {
    font-size: 7em;
}
</style>





<!-- THIS PART IS THE BODY OF THE WEBSITE -->
<body>
    <!-- The Banner on top of the website-->
<div class="justify-content-center d-flex" id="banner-wrapper">
    <img src="https://ak.picdn.net/shutterstock/videos/1033963304/thumb/1.jpg" alt="school pattern" class="img-fluid img-responsive" id="School-banner">
</div>

    <!-- The CONTENT -->    
<div class="container-fluid my-5">
    <div class="container bg-light my-5">
        <div class="text-center p-5">
            <p class="h1"> Grading System 🎓</p>
        </div>
    </div>

        <!-- ALL THE INPUTS FOR CLASS PARTICIPATION -->
    <div class="container bg-light">
        <div>
            <p class="h3 text-center p-5"> Class Participation 👨‍🎓</p>
        </div>
        <div class="container-fluid justify-content-center d-flex p-3">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- attendance -->
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="attendance" class="h4"> Attendance: </label>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input name="attendance" type="number" class="p-2 m-2" min="50" max="100" placeholder="input 50 to 100">
                    </div>
                </div>

                <hr>

                <!-- quiz -->
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="quiz-1" class="h4"> Quiz: </label>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input name="quiz-1" type="number" class="p-2 m-2" min="50" max="100" placeholder="quiz 1 input 50 to 100"><br>
                        <input name="quiz-2" type="number" class="p-2 m-2" min="50" max="100" placeholder="quiz 2 input 50 to 100">
                    </div>
                </div>

                <hr>

                <!-- lab-works 1 & 2 -->
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="lab-work-1" class="h4"> Lab-works: </label>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input name="lab-work-1" type="number" class="p-2 m-2" min="50" max="100" placeholder="lab work 1 input 50 to 100"><br>
                        <input name="lab-work-2" type="number" class="p-2 m-2" min="50" max="100" placeholder="lab work 2 input 50 to 100">
                    </div>
                </div>

                
                <hr>

                <!-- practical and written exam -->
                <div class="row my-3">
                    <div class="col-md-6 col-sm-12">
                        <label for="written" class="h4"> Exam (written for midterm): </label>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input name="written" type="number" class="p-2 m-2" min="50" max="100" placeholder="input 50 to 100">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="practical" class="h4"> Exam (practical for final): </label>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <input name="practical" type="number" class="p-2 m-2" min="50" max="100" placeholder="input 50 to 100">
                    </div>
                </div>
                
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="my-5 p-2 px-5 btn-round">
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <!-- THIS ARE THE RESULTS -->
    <div class="container bg-light my-5">
        <div class="h1 d-flex justify-content-center p-5">
            <p>RESULTS: 📝</p>
        </div>

        <!-- VARIABLE STORING FOR LATER USE -->
        <?php 
            if (empty($_POST['attendance']) || empty($_POST['quiz-1']) || empty($_POST['quiz-2']) || empty($_POST['lab-work-1']) || empty($_POST['lab-work-2']) || empty($_POST['written']) || empty($_POST['practical'])) { // CHECK IF EMPTY
                print 
                " 
                <script type='text/javascript'> 
                    $(document).ready(function(){
                        swal({
                            title: 'Missing Inputs',
                            text: 'Please fill the inputs with numbers.',
                            icon: 'warning',
                            cancel: true
                        })
                    });
                </script>
                ";
            }
            else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $attendance = $_POST['attendance'];
                $quiz1 = $_POST['quiz-1'];
                $quiz2 = $_POST['quiz-2'];
                $lab_work_1 = $_POST['lab-work-1']; 
                $lab_work_2 = $_POST['lab-work-2'];
                $written_exam = $_POST['written'];
                $practical_exam = $_POST['practical'];

                $quizAverage = ($quiz1 + $quiz2) / 2;
                $labworksAverage = ($lab_work_1 + $lab_work_2) / 2;

                $midTermGrade = (classParticipation($attendance, $quizAverage, $labworksAverage) * 0.6) + $written_exam * 0.4;
                $finalGrade = (classParticipation($attendance, $quiz1, $quiz2, $labworksAverage) * 0.6) + $practical_exam * 0.4;
                $semestralGrade = ($midTermGrade + $finalGrade)/2 ;
            }



            function classParticipation($attendance, $quizAverage, $labworksAverage) {
                $classParticipation = ($attendance + $quizAverage + $labworksAverage) / 3;
                return $classParticipation;
            }
            
            

        ?>
        
        <!-- MIDTERM GRADE -->
        <div class="d-flex justify-content-center py-5">
            <p class="h3">Midterm Grade</p>
        </div>
        <div class="d-flex justify-content-center">
            <?php
                if (!empty($midTermGrade)){
                    echo "<p id='big-fontsize'> $midTermGrade% </p>";
                }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <?php 
                if ($midTermGrade >= 75) {
                    echo "<p class='alert alert-success'>Student has passed 👏</p>";
                } else if ($midTermGrade < 75) {
                    echo "<p class='alert alert-danger'>Student needs remedial</p>";
                }
            ?>
        </div>

        <!-- Final GRADE -->
        <div class="d-flex justify-content-center py-5">
            <p class="h3">Final Grade</p>
        </div>
        <div class="d-flex justify-content-center">
            <?php
                if (!empty($finalGrade)){
                    echo "<p id='big-fontsize'> $finalGrade%</p>";
                }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <?php 
                if ($finalGrade >= 75) {
                    echo "<p class='alert alert-success'>Student has passed 👏</p>";
                } else if ($finalGrade < 75) {
                    echo "<p class='alert alert-danger'>Student needs remedial</p>";
                }
            ?>
        </div>

        <!-- SEMESTRAL GRADE -->
        <div class="d-flex justify-content-center py-5">
            <p class="h3">Semestral Grade</p>
        </div>
        <div class="d-flex justify-content-center">
            <?php
                if (!empty($semestralGrade)){
                    echo "<p id='big-fontsize'> $semestralGrade% </p>";
                }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <?php 
                if ($semestralGrade >= 75) {
                    echo "<p class='alert alert-success'>Student has passed 👏</p>";
                } else if ($semestralGrade < 75) {
                    echo "<p class='alert alert-danger'>Student needs remedial</p>";
                }
            ?>
        </div>
    </div>

</div>






</body>