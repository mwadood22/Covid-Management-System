<?php
                include 'db_connection.php';

                $conn = OpenCon();
                $id=$_GET['id'];
                $ql = "select Latitude, Longitude from patient where Region_id=$id";
                
                $query = mysqli_query($conn, $ql);
                $arr=array();
                while($res = mysqli_fetch_array($query))
                {
                    array_push($arr, $res);
                }
                echo json_encode($arr);
                CloseCon($conn);
        ?>