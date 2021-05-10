<!DOCTYPE html>
<html>
    <head>
        <title>Total Cases</title>
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
                <a class="active" href="homepage.php">Homepage</a>
                <a href="isolation.php">Isolation Wards</a>
                <a href="quarantine.php">Quarantine Wards</a>
                <a href="patients.php">Patients Record</a>
                <a href="staff.php">Staff</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
                <a href="admin.php">Admin</a>
            </div>
        </div>

        <div class="container">
        <div class="col-lg-4 m-auto">
            <br>
            <h1 class="text-grey text-center">Total Cases</h1>
            <br>
            <br>

            <table class="table table-striped table-hover table-bordered text-center m-auto">
                <tr>

                        <th class="text-center">Total Patients</th>
                </tr>
        <?php
                include 'db_connection.php';

                $conn = OpenCon();
                $id=$_POST["region_id"];
                $ql = "select count(*) from information where Region_id=$id";
                $query = mysqli_query($conn, $ql);
                $res = mysqli_fetch_array($query);
                $total=$res[0];

        ?>

                <tr>

                        <td><?php echo $total; ?></td>
                        
                </tr>
                <?php
                CloseCon($conn);
                ?>

            </table>
            <br><br>
         <!--   <div class="text-center">
            <button onclick="location.href = 'admin_show.php';" type="submit" name="submit" class="float-left submit-button">Admin Menu</button>
            </div>
            
            <div class="text-center">
            <button onclick="location.href = 'region_form.php';" type="submit" name="submit" class="float-right">Add new record</button>
            </div> -->
            
        </div>
        </div>
        <div id="map" style="width: 50%; height: 400px; border: 1px solid black;" class="m-auto"></div>
        <br><br>
        
            <br><br>
            <div class="footer">
                <div class="sub">
                    <ul >
                    <li><a class="active" href="homepage.php">Homepage</a></li>
                    <li><a href="isolation.php">Isolation Wards</a></li>
                    <li><a href="quarantine.php">Quarantine Wards</a></li>
                    <li><a href="patients.php">Patients Record</a></li>
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="helpline.php">Helpline</a></li>
                    <li><a href="recommendations.php">Recommendations</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    </ul>
                    </div>
                    <br><br><br>
      <p class="p">&copy; Covid-19 Management System</p>
                </div>
                <script type="text/javascript">
                	
                    jQuery(document).ready(function(){
                    	
                        $.ajax({
                        	url: "get_coordinates_p.php?id=<?php echo $id ?>",
                            type: "GET",
                            success: function(response) {
                            	var result = JSON.parse(response);
                                renderMap(result);
                            }
                        });
                        
                        function renderMap(result) {    

							var mapOptions = {
								zoom: 5,
								center:new google.maps.LatLng(30.3894, 69.3532),
								mapTypeId: google.maps.MapTypeId.ROADMAP
							};
			
							var map = new google.maps.Map(document.getElementById('map'), mapOptions);	
			
							var infoWindow = new google.maps.InfoWindow;
							//infoWindow.setPosition({lat: 31.5204, lng: 74.3587});
            				infoWindow.open(map);
            				map.setCenter({lat: 31.5204, lng: 74.3587});
			
							for(let i = 0; i < result.length; i++) {
                            
                           
                  
                            	var marker = new google.maps.Marker({
									position: new google.maps.LatLng(result[i].Latitude, result[i].Longitude),
									map: map,
									animation: google.maps.Animation.DROP,
									icon: {
										url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
										labelOrigin: new google.maps.Point(75, 32),
										size: new google.maps.Size(32,32),
										anchor: new google.maps.Point(16,32)
									}
								});
        
        					}
						}
						
                });
                
                function initMap() {
                
                }
	</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrt3fvZJoTCA0oav2zYS2v937Ja7NZg2E&callback=initMap">
    </script>
    </body>
</html>