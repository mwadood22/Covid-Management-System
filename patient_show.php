<!DOCTYPE html>
<html>
    <head>
        <title>Patients Record</title>
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
                <a class="active" href="patients.php">Patients Record</a>
                <a href="staff.php">Staff</a>
                <a href="helpline.php">Helpline</a>
                <a href="recommendations.php">Recommendations</a>
                <a href="admin.php">Admin</a>
            </div>
        </div>

        <div class="container">
        <div class="col-lg-12 ">
            <br>
            <h1 class="text-grey text-center">Patients data</h1>
            <br>
            <br>

            <table class="table table-striped table-hover table-bordered text-center m-auto">
                <tr>

                        <th class="text-center">Patient ID</th>
                        <th class="text-center">Patient Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Quarantine Ward ID</th>
                        <th class="text-center">Isolation Ward ID</th>
                        <th class="text-center">Manager ID</th>
                        <th class="text-center">Phone no</th>
                        <th class="text-center">Region ID</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Update</th>
                </tr>
        <?php
                include 'db_connection.php';

                $conn = OpenCon();

                $ql = "select * from patient";
                
                $query = mysqli_query($conn, $ql);
                
                while($res = mysqli_fetch_array($query))
                {
        ?>
                <tr>
                        <td><?php echo $res['P_id']; ?></td>
                        <td><?php echo $res['Name']; ?></td>
                        <td><?php echo $res['Status']; ?></td>
                        <td><?php echo $res['Address']; ?></td>
                        <td><?php echo $res['Q_Ward_id']; ?></td>
                        <td><?php echo $res['I_Ward_id']; ?></td>
                        <td><?php echo $res['Manager_id']; ?></td>
                        <td><?php echo $res['Phone_no']; ?></td>
                        <td><?php echo $res['Region_id']; ?></td>
                        
                        <td><button class="btn-danger btn"> <a href="delete_pat.php?P_id=<?php echo $res['P_id']; ?>" class="text-white"> Delete </a> </button></td>
                        <?php
                        $iward=$res['I_Ward_id'];
                        $qward=$res['Q_Ward_id']; 
                        if($iward == NULL)
                        { ?>
                        <td><button class="btn-primary btn"> <a href="update_pat.php?P_id=<?php echo $res['P_id']; ?>" class="text-white"> Update </a> </button></td>
                        <?php }
                        if($qward == NULL)
                        {?>
                        <td><button class="btn-primary btn"> <a href="update_pat1.php?P_id=<?php echo $res['P_id']; ?>" class="text-white"> Update </a> </button></td>
                        <?php } ?>
                </tr>
                <?php
                }
                CloseCon($conn);
                ?>

            </table>
            <br><br>
            <div class="text-center">
            <button onclick="location.href = 'pat_choice.php';" type="submit" name="submit" >Add new record</button>
            </div>
            <br><br>
            <div id="map" style="width: 100%; height: 400px; border: 1px solid black;"></div>
            
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
                    <li><a class="active" href="patients.php">Patients Record</a></li>
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
                        	url: "get_coordinates.php",
                            type: "GET",
                            success: function(response) {
                                var result = JSON.parse(response);
                                alert(result);
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