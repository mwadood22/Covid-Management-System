<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $id = $_GET['staff_id'];

    $q = "DELETE FROM `staff` WHERE Staff_id = $id";

    mysqli_query($conn, $q);

    header('location:staff_show.php');
    CloseCon($conn);

?>
