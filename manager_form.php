<!DOCTYPE html>
<html>
    <head>
        <title>Managers</title>
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
                <a href="staff.php">Staff</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
                <a class="active" href="admin.php">Admin</a>
                
            </div>
        </div>

        <div class="col-lg-5 m-auto">

        <form method ="post">
        <br><br>
        <div class="card">

        <div class="card-header bg-dark">

        <h1 class="text-white text-center">Manager form</h1>
        </div>
        <br>
        <label class="m-auto"> Manager ID: </label>
        <input type="text" name="manager_id" class="form-control m-auto"> <br>

        <label class="m-auto"> Manager Name: </label>
        <input type="text" name="manager_name" class="form-control m-auto"> <br>

        <label class="m-auto"> Phone no: </label>
        <input type="text" name="phone_no" class="form-control m-auto"> <br>

        <label class="m-auto"> Address: </label>
        <input type="text" name="address" class="form-control m-auto"> <br>

        <label class="m-auto"> Password: </label>
        <input type="text" name="password" class="form-control m-auto"> <br>

        <label class="m-auto"> SP ID: </label>
        <input type="text" name="sp_id" class="form-control m-auto"> <br>

        <button class="btn btn-success m-auto" type="submit" name="done"> Submit </button>
        <br><br>
        </div>

        </form>
        <br><br>
        <div class="text-center">
            <button onclick="location.href = 'manager_show.php';" type="submit" name="submit" class="float-right submit-button">Return to list</button>
            </div>
            <br><br>
        </div>
<br><br>
            <div class="footer">
                <div class="sub">
                    <ul >
                    <li><a href="homepage.php">Homepage</a></li>
                    <li><a href="isolation.php">Isolation Wards</a></li>
                    <li><a href="quarantine.php">Quarantine Wards</a></li>
                    <li><a href="patients.php">Patients Record</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="helpline.php">Helpline</a></li>
                    <li><a href="recommendations.php">Recommendations</a></li>
                    <li><a class="active" href="admin.php">Admin</a></li>
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
        $manager_id = $_POST["manager_id"];
        $manager_name = $_POST["manager_name"]; 
        $phone_no = $_POST["phone_no"];
        $address = $_POST["address"];
        $password = $_POST["password"];
        $sp_id = $_POST["sp_id"];

        $query = "INSERT INTO `manager`(`Manager_id`, `Manager_Name`, `Phone_no`, `Address`, `Password`, `sp_id`) VALUES ('$manager_id','$manager_name','$phone_no','$address','$password','$sp_id')";
        $q=mysqli_query($conn, $query);
}

CloseCon($conn);
?>
