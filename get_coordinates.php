        <?php
                include 'db_connection.php';

                $conn = OpenCon();

                $ql = "select Latitude, Longitude from patient";
                
                $query = mysqli_query($conn, $ql);
                $arr=array();
                while($res = mysqli_fetch_array($query))
                {
                    array_push($arr, $res);
                }
                echo json_encode($arr);
                CloseCon($conn);
        ?>