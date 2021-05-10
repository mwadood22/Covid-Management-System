<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['manager_id'];
    
    $q = "DELETE FROM `manager` WHERE Manager_id = $id";

    mysqli_query($conn, $q);

    header('location:manager_show.php');
    CloseCon($conn);

?>