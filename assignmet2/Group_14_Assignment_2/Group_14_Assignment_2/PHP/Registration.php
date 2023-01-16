<?php
$x = false;
session_start();
$message='';
if(isset($_SESSION['email_alert'])){
    $message = "Email id already exists";
    $x = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../css/newAccount.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    
    <script src="../newAccount.js" defer></script>
</head>
<body>
    
<div class="container">
        
    <div class="gif">

    <img src="../Pictures/sammy-workflow.gif" alt="">
    </div>
    <div class="form-container">
        <form id="form" name="form" action="./back-end.php" method="post">
            <div class="login"> 
                <p class="account">Already have an account? </p>
                <button type="button" class="haveAccount"><a href="./login2.php"> Sign In</a></button>
            </div>
            <h1>Welcome to Coded! </h1>

            <h4 style="color:red"><center><?php echo $message;?></center></h4>
            <h4 style="font-size:20px;">Register your account</h4>
            <div class="input-control">
                <label for="email">Email Address</label>
                <input id="email" name="email" type="text" placeholder="Email" value=<?php if($x){echo $_SESSION['email'];}?>>
                <div class="error" class="success"></div>
            </div>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="User name">
                <div class="error" class="success"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Password">
                <div class="error" class="success"></div>
            </div>
            <div class="input-control">
                <label for="password">Retype Password</label>
                <input id="password2" name="password2" type="password" placeholder="Password">
                <div class="error" class="success"></div>
            </div>
            <input type="checkbox" id="checkbox2" name="checkbox2" value="checkbox2" onclick="clickCheckBox2()" >
            <label for="checkbox2"> I agree to the terms and conditions*</label><br>
            <p id="check-text">*Please accept the terms and conditions</p>

            <button type="submit" id="submitbtn" name="submit">Sign Up</button>
            <button type="submit"id="resetbtn" onClick="refresh();">Reset</button> 
            
            
        </form>
    </div>
</div>
    <?php unset($_SESSION['email_alert']);?>
    <script src="./lab5.js" defer></script>
    
</body>
</html>

