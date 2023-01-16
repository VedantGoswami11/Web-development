<?php 
$is_invalid = false;
if($_SERVER["REQUEST_METHOD"] === "POST"){
  include 'dbh.php';
    // $mysqli = require __DIR__."./dbh.php";
    $sql = sprintf("SELECT * FROM logins WHERE email = '%s'",$conn->real_escape_string($_POST["email"])); 
    $result = $conn->query($sql);
  
    $user = $result->fetch_assoc();

    if ($user){
        if(password_verify($_POST["password"],$user["password"])){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
            exit;
        }
        

    }
      $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    
<form class="login"  method = "POST">
<h1>Login</h1>
    <?php 
    if($is_invalid): ?>
    <em style="color:red;" > Invalid Login</em>
    <?php endif;?>
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= htmlspecialchars($_POST['email'] ?? '')?> " >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
</body>
</html>