 
<?php 
$title = $_POST['title'];
$description = $_POST['description'];
$genre = $_POST['genre'];
$subject = $_POST['subject'];
$star = $_POST['star'];
$year = $_POST['year'];
$production = $_POST['Production'];


?>

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles1.css" />
</head>
<body>
<?php include"headerM.php" ?>

<div class="results">

<div class="results__caption">
    Movie Information saved
</div class="results">
<table>
    <tr>
<span class="results__label">Title:</span>
<span ><?php echo"$title";?></span></tr>
<tr>
    <br>
<span class="results__label">Description:</span>
<span><?php echo"$description";?></span>
</tr>
<br>
<tr>
<span class="results__label">Genre:</span>
<span class="results" ><?php echo"$genre";?></span>
</tr>
<br>
<tr>
<span class="results__label">Subject:</span>
<span ><?php echo"$subject";?></span>
</tr><br>
<tr>
<span class="results__label">Star:</span>
<span ><?php echo"$star";?></span>
</tr>
<br>
<tr>
<span class="results__label">Year:</span>
<span ><?php echo"$year";?></span>
</tr><br>
<tr>
<span class="results__label">Production:</span>
<span ><?php echo"$production";?></span>
</tr><br>
</table>
</div>


<?php include"footerM.php" ?> 
</body>
</html>

