<?php

    include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style_page2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400&display=swap" rel="stylesheet">
    <!-- bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>SQL</title>
</head>
<h1>Search Page</h1>
<body>
<form action="search.php" method="POST">
        <input type="text" name = "search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
    <h1>Front Page</h1>
    <h2>All Courses:</h2>
<div class="article-container">
<header class="header">

<nav id="nav">
    <div id="SUB_TITLE">
        <h1>Coded</h1>
    </div>
    <ul>
        <li><a class="home" href="index.html">
            <form action="search.php" method="POST" class="searchbtn2">
            <input type="text" name = "search" placeholder="Search.." name="search">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i>Search</button>
            </form>
                <div>Home</div>
            </a></li>
        <li><a class="Courses" id="Active" href="sql.html">Courses</a></li>
        <li><a class="Sign in" href="#">Sign up</a></li>

    </ul>

</nav>
</header>
<!-- navigation bar ends here-->


<!-- Create second nav bar -->

<div id="secondry_nav">
<ul>
    <li><a href="sql.html" class="Active_nav_two">SQL</a></li>
    <li><a href="java.html">JAVA</a></li>
    <li><a href="javascript.html">JAVASCRIPT</a></li>
    <li><a href="php.html">PHP</a></li>
    <li><a href="./Code.html">CODE CONVERTER</a>
</ul>
</div>


<!-- adding java scipt to secondry nav bar -->
<script>
window.onscroll = function () { myFunction() };

var navbar = document.getElementById("secondry_nav");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
</script>

<!-- <section class="second_section_two "  >
        <div class="main_title">
             SQL Courses
        </div>
        <div class="genral_paragraph">
                   
        </div>

        <div class="parent_box sql_courses" id="sql_one">
            <div class="right_column">
                <h4><a href="https://www.coursera.org/professional-certificates/google-data-analytics"> Google Data Analytics Professional Certificate</a></h4>

                <div class="course_img">
                    <img src="ce.jpg" alt="Computer Essentials">
                </div>

            </div>

            <div class="left_column">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                    This is your path to a career in data analytics. In this program, you’ll learn in-demand skills that will have you job-ready in less than 6 months. No degree or experience required.
                    <br>
                    <br>Users: (50,096) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:4.5<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: SQL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Beginner
                </p>

            </div>
        </div> -->

<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * from courses WHERE c_id LIKE '%$search%' OR c_title LIKE '%$search%' OR c_language LIKE '%$search%' OR c_level LIKE '%$search%' OR c_description LIKE '%$search%' OR c_class LIKE '%$search%' OR c_code_id LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        echo "There are ".$queryResult." results!";

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                

                echo "<div class='article-box'> 
                    <h3>".$row['c_id'] ."</h3>
                    <p>".$row['c_title'] ."</p>
                    <p>".$row['c_language'] ."</p>
                    <p>".$row['c_level'] ."</p>
                    <p>".$row['c_description'] ."</p>
                    <p>".$row['c_class'] ."</p>
                    <p>".$row['c_code_id'] ."</p>
                    </div>";
            }
        } else {
            echo "There are no result matching your search!";
        }
    }

?>
</div>
