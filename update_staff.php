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

        <div class="col-lg-5 m-auto">

        <form method ="post">
        <br><br>
        <div class="card">

        <div class="card-header bg-dark">

        <h1 class="text-white text-center">Staff form(Update)</h1>
        </div>
        <br>

        <label class="m-auto"> Staff Name: </label>
        <input type="text" name="staff_name" class="form-control m-auto"> <br>

        <label class="m-auto"> Job: </label>
        <input type="text" name="job" class="form-control m-auto"> <br>

        <label class="m-auto"> Phone no: </label>
        <input type="text" name="phone_no" class="form-control m-auto"> <br>

        <label class="m-auto"> Address: </label>
        <input type="text" name="address" class="form-control m-auto"> <br>

        <label class="m-auto"> Centre id: </label>
        <input type="text" name="centre_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Manager id: </label>
        <input type="text" name="manager_id" class="form-control m-auto"> <br>

        <button class="btn btn-success m-auto" type="submit" name="done"> Update </button>
        <br><br>
        </div>

        </form>
        <br><br>
       <!-- <div class="text-center">
            <button onclick="location.href = 'staff_show.php';" type="submit" name="submit" class="float-right submit-button">Return to list</button>
            </div>
            <br><br> -->
        </div>
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

<?php
include 'db_connection.php';

$conn = OpenCon();

if(isset($_POST['done']))
{
        $staff_id = $_GET["staff_id"]; 
        $staff_name = $_POST["staff_name"];
        $job = $_POST["job"];
        $phone_no = $_POST["phone_no"];
        $address = $_POST["address"];
        $centre_id = $_POST["centre_id"];
        $manager_id = $_POST["manager_id"]; 
        
        $query = "UPDATE `staff` SET `Staff_id`='$staff_id',`Staff_Name`='$staff_name',`Job`='$job',`Phone_no`='$phone_no',`Address`='$address',`Centre_id`='$centre_id',`Manager_id`='$manager_id' WHERE Staff_id=$staff_id";
        $q=mysqli_query($conn, $query);
        header('location:staff_show.php');
}

CloseCon($conn);
?>
