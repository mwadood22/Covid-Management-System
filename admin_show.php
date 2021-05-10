<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
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

        
        <br><br>
        <div class="card">

        <div class="card-header bg-dark">

        <h1 class="text-white text-center">Super admin panel</h1>
        </div>
        <br><br><br>
        <button onclick="location.href = 'manager_show.php';" class="btn btn-success m-auto" type="submit" name="done"> Managers </button>
       <br>
        <button onclick="location.href = 'region_show.php';" class="btn btn-success m-auto" type="submit" name="done"> Regions </button>
      <br>
        <button onclick="location.href = 'centre_show.php';" class="btn btn-success m-auto" type="submit" name="done"> Centres </button>
       <br>
        <button onclick="location.href = 'superadmin_show.php';" class="btn btn-success m-auto" type="submit" name="done"> Super admins </button>
        <br>


        <br><br>
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


