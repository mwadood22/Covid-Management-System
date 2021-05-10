<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['region_id'];
    
    $q = "DELETE FROM `region` WHERE Region_id = $id";

    mysqli_query($conn, $q);

    header('location:region_show.php');
    CloseCon($conn);

?>