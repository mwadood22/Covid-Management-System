<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['centre_id'];
    
    $q = "DELETE FROM `centre` WHERE Centre_id = $id";

    mysqli_query($conn, $q);

    header('location:centre_show.php');
    CloseCon($conn);

?>