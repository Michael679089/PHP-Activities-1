<!DOCTYPE html>
<html>
    <head>
        <!-- This is Boostrap 4 🔽 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--  Scripts for Bootstrap 4 🔽 -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <style>
            i {
                font-size: 15px;
            }
        </style>

        <?php
        // My Info
        $age = date("Y") - 2003;
        $phoneNum = "09173980858";
        $address = "Quezon City";
        $email = "michael.delossantos@ciit.edu.ph";

        // Headers
        function h6_Strong ($text) {
            $h6 = "<div class='alert alert-primary mx-2' <h6 class='strong'> $text </h6> </div>";
            return $h6; 
        }

        echo "<h3> Michael Jacob M. Delos Santos </h3>";
        echo "Address: $address";
        echo "<br>";
        echo "<p class='subtitle'>Age: $age";
        echo "Email: $email";
        echo "<br>";
        echo "Phone No.: $phoneNum";
        echo "<br>";
        echo "<hr>";
        echo "<p> Learning in CIIT SHS in Computer Programming Science as a Grade 12 Senior High School student. Enjoys learning Computer Science and the Arduino Framework. Knows programming languages such as HTML, CSS, JAVA, & C++. Tagalog as his primary language and English as his secondary language.";
        echo h6_Strong("Education Timeline");
        echo "<ul>";
        echo    "<li> CIIT (2020-2021) - SHS Grade 11 </li>";
        echo        "<ul>";
        echo          "<li> <b>Top 10 in class</b> </li>";
        echo          "<li> Learned C++, JAVA </li>";
        echo          "<li> taught properly to do HTML/CSS </li>";
        echo        "</ul>";
        echo    "<li> JASMS QC (2016-2020) - Grade 7 to 10 </li>";
        echo        "<ul>";
        echo          "<li> <b>3rd Honors in MATH</b> </li>";
        echo          "<li> wrote a book review of 'Lord of The Flies' by William Goldings </li>";
        echo        "</ul>";        
        echo    "<li> MotherGoose Playshool & Gradeschool (MGP) (2013-2016) - Grade 4 to 6</li>";
        echo    "<li> Pasig Catholic College (PCC) (2010-2013) - Grade 1 to 3</li>";
        echo    "<li> Ateneo De Davao (2007-2010) - Kindergarten to Grade 1 </li>";
        echo "</ul>";

        echo h6_Strong("Skills");
        echo "<i> Hard Skills </i>";
        echo "<ul>";
        echo    "<li> Programs in C++ </li>";
        echo    "<li> Programs in JAVA </li>";
        echo    "<li> Programs in HTML/CSS </li>";
        echo    "<li> Programs in AutoHotKey </li>";
        echo "</ul>";
        echo "<i> Soft Skills </i>";
        echo "<ul>";
        echo    "<li> English: Level B1 </li>";
        echo    "<li> Open-mindedness </li>";
        echo    "<li> Caring </li>";
        echo    "<li> Enthusiastic </li>";
        echo    "<li> Physically Active </li>";
        echo    "<li> Creative </li>";
        echo    "<li> Organized </li>";
        echo    "<li> Neat </li>";
        echo "</ul>";

        echo h6_Strong("Research Experience");
        echo "<ul>";
        echo    "<li>";
        echo        "<b> Research Project about Technology or Arts, CIIT SHS </b>";
        echo        "<br>";
        echo        "<i> Group Research in Practical Research 1 in CIIT (2020)</i>";
        echo        "<p> Title: How Much Do the CIIT Senior High School Students and Teachers Know About the Environmental Impacts of our Electronic Waste?</p>";
        echo    "</li>";
        echo    "<li>";
        echo        "<b> Research Proposal, CIIT SHS </b>";
        echo        "<br>";
        echo        "<i> Group Research in Filipino (2020)</i>";
        echo        "<p> Title: Seguridad ng Data at Impormasyon sa Facebook</p>";
        echo    "</li>";
        echo "</ul>";

        echo h6_Strong("Affiliations");
        echo "<ul>";
        echo "<li> News Writing Club (Grade 9) - JASMS QC (SY 2017-2018)</li>";
        echo "<li> LAPIS (Grade 11) - CIIT SHS (SY 2020-2021)</li>";
        echo "</ul>";

        echo h6_Strong("Awards and Honors");
        echo "<ul>";
        echo "<li> Top 10 in class - CIIT SHS (2020-2021) </li>";
        echo "<li> Certificate of Recognition for being Rank 8 in Grade 11-Python, General Weighted average of 92.70 in the 3rd Quarter (2020-2021)</li>";
        echo "<li> Certificate of Recognition for being Rank 3 in Grade 11-Python, General Weighted average of 93.78 in the 2nd Quarter (2020-2021)</li>";
        echo "<li> 3rd Honors in Math - JASMS QC (2016-2020) </li>";
        echo "</ul>";

        echo h6_Strong("Additonal Information");
        echo "<i> Computer Skills and Application</i>";
        echo "<ul>";
        echo "<li>Uses AutoHotKey to Automate repeated tasks and ease workflow.</li>";
        echo "<li>Knows how to use VS Code, Eclipse, & Notepad as Coding Programs.</li>";
        echo "<li>Knows the function of MS word.</li>";
        echo "</ul>";
        echo "<i> Language Skills</i>";
        echo "<ul>";
        echo "<li> Can talk in English and Tagalog well. </li>";
        echo "</ul>";
        
        echo h6_Strong("Certificates");
        echo "<ul>";
        echo "<li> Certificate of Recognition for being Rank 8 in Grade 11-Python, General Weighted average of 92.70 in the 3rd Quarter (2020-2021)</li>";
        echo "<li> Certificate of Recognition for being Rank 3 in Grade 11-Python, General Weighted average of 93.78 in the 2nd Quarter (2020-2021)</li>";
        echo "<li> Certificate of Attendance in Medical Health Services during Sept. 11,2020 at 1:30 PM to 2:30 PM- CIIT SHS (2020)</li>";
        echo "<li> Certificate of Attendance in Adobe Photoshop Essentials - Informatics (2018)</li>";
        echo "</ul>";





        





        ?>
    </body>
</html>