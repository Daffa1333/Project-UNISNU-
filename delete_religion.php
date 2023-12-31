<?php
    include 'config.php';

    $religion_id = $_GET['id'];
    $query = "DELETE FROM `religion` WHERE `religion_id` = '$religion_id'";
    $result = mysqli_query($conn, $query);
    header("Location: religion.php");
    exit();
?>