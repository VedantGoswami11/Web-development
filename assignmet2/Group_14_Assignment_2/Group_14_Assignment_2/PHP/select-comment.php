<?php
    include 'dbh.php';

    session_start();
    if(isset($_SESSION['user_id'])){
    $id2 = $_SESSION['user_id'];

    //$sql = "SELECT * FROM msg ORDER BY id DESC";

    $sql = "SELECT * FROM msg WHERE id=$id2 ORDER BY id DESC";

    $resultComment = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultComment) > 0) {
        while ($row = mysqli_fetch_assoc($resultComment)) {
?>

<div class="item">
    <h2><?php echo $row['name']; ?></h2>
    <p><?php echo $row['msg']; ?></p>
</div>

    <?php } } } ?>

    

   