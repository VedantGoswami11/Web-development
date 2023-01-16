<?php

    include 'dbh.php';
    session_start();

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
    <title>JAVA</title>
</head>

<body>

    <div class="article-container">
        <?php
            $SQL = "SELECT * FROM courses";
            $result = mysqli_query($conn, $SQL);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                    
                    /*
                    echo "<div class='article-box'> 
                    <h3>".$row['c_id'] ."</h3>
                    <p>".$row['c_title'] ."</p>
                    <p>".$row['c_language'] ."</p>
                    <p>".$row['c_level'] ."</p>
                    <p>".$row['c_description'] ."</p>
                    <p>".$row['c_class'] ."</p>
                    <p>".$row['c_code_id'] ."</p>
                    </div>";
                    */
                }
            }
        ?>
    </div>

    <!-- navigation bar -->
    <header class="header">

        <nav id="nav">
            <div id="SUB_TITLE">
                <h1>Coded</h1>
            </div>
            <ul>
                <li><form action="search.php" method="POST" class="searchbtn2">
                    <input type="text" name = "search" placeholder="Search..." name="search">
                    <button type="submit" name="submit-search">Search Courses</button>
                     </form></li>
                <li><a class="home" href="index.php">
                        <div>Home</div>
                    </a></li>
                <li><a class="Courses" id="Active" href="sql.html">Courses</a></li>
                <?php 
            
            if(isset($_SESSION['user_id'])){
        ?> <li><a class="About Me" href="logout.php">Logout</a></li>
        <?php 
            }
            else{
        ?> <li><a class="About Me" href="Registration.php">Sign up</a></li>
        <?php
        }
        ?>
                <!-- <li><a class="Sign in" href="#">Sign up</a></li> -->

            </ul>

        </nav>
    </header>
    <!-- navigation bar ends here-->


    <!-- Create second nav bar -->

    <div id="secondry_nav">
        <ul>
            <li><a href="sql.php" class="Active_nav_two">SQL</a></li>
            <li><a href="java.php">JAVA</a></li>
            <li><a href="javascript.php">JAVASCRIPT</a></li>
            <li><a href="php.php">PHP</a></li>
            <li><a href="../HTML/Code.html">CODE CONVERTER</a>
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

    <!-- creating filter by using radio button -->
    <div class="genral_paragraph second_section_two">
        <div class="shorting">
            <label id="FilterBy">Filter by :</label>


            <input type="radio" name="filterLevel" class="filterLevel" required>Level
            <input type="radio" name="filterLevel" class="filterLevel" required> Resourses
        </div>
    </div>
    <!-- level one and its courses  -->
    <section class="second_section_two "  >
        <div class="main_title">
             JAVA Courses
        </div>
        <div class="genral_paragraph">
                   
        </div>

        <div class="parent_box java_courses" id="java_one">
            <div class="right_column">
            <h4><a href="https://www.udemy.com/course/java-the-complete-java-developer-course/"> 1. Java Programming Masterclass updated to Java 17</a></h4>

                <div class="course_img">
                    <img src="../Pictures/JAVA-1.png" alt="Computer Essentials">
                </div>

            </div>

            <div class="left_column">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                Learn Java In This Course And Become a Computer Programmer. Obtain valuable Core Java Skills And Java Certification.
                    <br>
                    <br>Users: (50,096) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:3.9<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: JAVA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Intermediate
                </p>

            </div>
        </div>

        <!-- second course -->

        <div class="parent_box java_courses" id="java_two">
            <div class="right_column">
                <h4><a href="https://www.codecademy.com/learn/learn-java">
                Learn Java</a></h4>

                <div class="course_img">
                    <img src="../Pictures/JAVA-2.png" alt="Intro to Programming">
                   
                </div>

            </div>



            <div class="left_column">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                Learn to code in Java — a robust programming language used to create software, web and mobile apps, and more.
                    <br>
                    <br>Users: (20,115) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:4.3<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: SQL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Beginner
                </p>

            </div>
        </div>

        <!-- Third Course -->

        <div class="parent_box java_courses" id="java_three">
            <div class="right_column">
                <h4><a href="https://www.coursera.org/specializations/java-programming">Java Programming and Software Engineering Fundamentals Specialization
                    </a></h4>

                <div class="course_img">
                    <img src="../Pictures/JAVA-3.png" alt="Intro to Database">
                </div>
            </div>

            <div class="left_column" id="bg_color_left">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                Explore a Career as a Software Engineer. Learn the basics of programming and software development
                    <br>
                    <br>Users: (20,786) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:4.2<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: JAVA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Beginner
                </p>
                
            </div>
        </div>


        <!-- forth course -->

        <div class="parent_box java_courses" id="java_four">
            <div class="right_column">
                <h4><a href="https://www.udemy.com/course/java-in-depth-become-a-complete-java-engineer/">Java In-Depth: Become a Complete Java Engineer!
                    </a></h4>

                <div class="course_img">
                    <img src="../Pictures/JAVA-4.png" alt="Intro to Database">

                </div>

            </div>

            <div class="left_column">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                Grow Your Portfolio as a Software Engineer. Learn about Object Oriented Design in four project-based courses.
                    <br>
                    <br>Users: (29,521) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:3.9<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: JAVA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Intermediate 
                </p>

            </div>
        </div>

        <!-- fifth course -->

        <div class="parent_box java_courses" id="java_five">
            <div class="right_column">
                <h4><a href="https://www.coursera.org/specializations/object-oriented-programming">Object Oriented Programming in Java Specialization
                    </a></h4>

                <div class="course_img">
                    <img src="../Pictures/JAVA-5.png" alt="Intro to Database">

                </div>

            </div>

            <div class="left_column">
                <br>
                <br>
                <br>
                <p class="genral_paragraph v2">
                Grow Your Portfolio as a Software Engineer. Learn about Object Oriented Design in four project-based courses.
                    <br>
                    <br>Users: (25,099) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Rating:3.5<span>&#9733</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cost: [FREE!]
                    <br>
                    <br>Language: JAVA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Level: Intermediate
                </p>

            </div>
        </div>

    </section>

    <!-- creating resourse tab -->
    <div id="resourses">
        <div class="main_title">
            Resourses
        </div>

        <div id="row_one">
            <div class="blur_btn blur_css">
            <a href="https://www.geeksforgeeks.org/structured-query-language/?ref=gcse">Geeks for Geeks</a>    
            </div>
            <div class="blur_btn blur_css">
            <a href="https://www.w3schools.com/sql/default.asp">W3 Schools</a>
            </div>
        </div>

        <div id="row_two">
            <div class="blur_btn blur_css">
            <a href="https://www.tutorialspoint.com/sql/">Tutorials Point</a>
        </div>
        </div>
        <div id="row_three">
            <div class="blur_btn blur_css">
            <a href="https://sqlzoo.net/wiki/SQL_Tutorial">SQL Zoo</a>
            </div>
            <div class="blur_btn blur_css">
            <a href="https://www.khanacademy.org/computing/computer-programming/sql">Khan Academy</a>
            </div>
        </div>
    </div>
    <!-- FOOTER SECTION -->
    <footer>
    <div class="col_one">
            <h3>Useful Links</h3>
            <a href="java.php">JAVA</a>
            <a href="javascript.php">JAVA SCRIPT</a>
            <a href="sql.php">SQL</a>
            <a href="php.php">PHP</a>
            <a href="../HTML/Code.html">CODE CONVERTER</a>
        </div>

        <div class="col_two">
            <h3>News Letter</h3>
            <form>
                <input type="text" placeholder="Enter Your email">
                <br>
                <button type="submit">Join Now</button>
            </form>


        </div>
        <div class="col_three">

            <h3>Contact us</h3>
            <p>E-mail: coded2022@gmail.com</p>
            <p>13,Rockway,Nepean
                <br>OTTAWA,K2G 0M3,ON,CA
            </p>

        </div>

    </footer>
<!-- Following is the comment box system -->

<div class="wrapper">
        <form id="form">
            <div class="inputBox">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="inputBox">
                <label for="msg">Message:</label>
                <br>
                <textarea id="msg" placeholder="Enter your message" required></textarea>
            </div>
            <button id="commentbtn"> Send </button>
            <button id="editbtn"> Edit </button>
            <button id="deletebtn"> Delete </button>
        </form>
        <hr>
        <div class="content" id="content">
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-comment.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#commentbtn").on("click", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'insert-comment.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Comment Submitted Successfully.');
                            $("#form").trigger("reset");
                        }else {
                            alert("Comment Can't Submit.");
                        }
                    }
                });
            });
/*
            $("#deletebtn").on("click", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var msg = $("#msg").val();

                $.ajax({
                    url: 'delete-comment.php',
                    type: 'POST',
                    data: {name: name, msg: msg},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Comment deleted Successfully.');
                            $("#form").trigger("reset");
                        }else {
                            alert("Comment Can't be deleted.");
                        }
                    }
                });
            });
            */
        });
    </script>
</body>

</html>