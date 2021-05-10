<!DOCTYPE html>
<html>
    <head>
        <title>Staff</title>
        <link href="styles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body class="body">
        <div class="navbar">
            <p class="title">Covid-19 Management System</p>
            <div class="links">
                <a href="homepage.php">Homepage</a>
                <a href="isolation.php">Isolation Wards</a>
                <a href="quarantine.php">Quarantine Wards</a>
                <a href="patients.php">Patients Record</a>
                <a class="active" href="staff.php">Staff</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
                <a href="admin.php">Admin</a>
            </div>
        </div>

        <div class="container">
        <div class="col-lg-12">
            <br>
            <h1 class="text-grey text-center">Staff data</h1>
            <br>
            <br>

            <table class="table table-striped table-hover table-bordered text-center m-auto">
                <tr>

                        <th class="text-center">Staff ID</th>
                        <th class="text-center">Staff Name</th>
                        <th class="text-center">Job</th>
                        <th class="text-center">Phone no</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Centre ID</th>
                        <th class="text-center">Manager ID</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Update</th>
                </tr>
        <?php
                include 'db_connection.php';

                $conn = OpenCon();

                $ql = "select * from staff";
                $query = mysqli_query($conn, $ql);
                
                while($res = mysqli_fetch_array($query))
                {


        ?>

                <tr>

                        <td><?php echo $res['Staff_id']; ?></td>
                        <td><?php echo $res['Staff_Name']; ?></td>
                        <td><?php echo $res['Job']; ?></td>
                        <td><?php echo $res['Phone_no']; ?></td>
                        <td><?php echo $res['Address']; ?></td>
                        <td><?php echo $res['Centre_id']; ?></td>
                        <td><?php echo $res['Manager_id']; ?></td>
                        <td><button class="btn-danger btn"> <a href="delete_staff.php?staff_id=<?php echo $res['Staff_id']; ?>" class="text-white"> Delete </a> </button></td>
                        <td><button class="btn-primary btn"> <a href="update_staff.php?staff_id=<?php echo $res['Staff_id']; ?>" class="text-white"> Update </a> </button></td>
                </tr>
                <?php
                }
                CloseCon($conn);
                ?>

            </table>
            <br><br>
            <div class="text-center">
            <button onclick="location.href = 'staff_form.php';" type="submit" name="submit" >Add new record</button>
            </div>
            
        </div>
        </div>
        <br><br>
       
            <br><br>
            <div class="footer">
                <div class="sub">
                    <ul >
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="isolation.php">Isolation Wards</a></li>
                    <li><a href="quarantine.php">Quarantine Wards</a></li>
                    <li><a href="patients.php">Patients Record</a></li>
                    <li><a class="active" href="staff.php">Staff</a></li>
                    <li><a href="helpline.php">Helpline</a></li>
                    <li><a href="recommendations.php">Recommendations</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    </ul>
                    </div>
                    <br><br><br>
      <p class="p">&copy; Covid-19 Management System</p>
                </div>
    </body>
</html>