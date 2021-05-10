<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['sp_id'];
    
    
    $q = "DELETE FROM `super_manager` WHERE sp_id = $id";

    mysqli_query($conn, $q);

    header('location:superadmin_show.php');
    CloseCon($conn);

?>