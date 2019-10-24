<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home - SpaceX Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Themify Icon -->
	<link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="assets/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="assets/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

</head>

<body>

<!-- /.main-menu -->


<!-- /.fixed-navbar -->


<!-- /#notification-popup -->
<script type="text/javascript">

function openbox(id){
    display = document.getElementById(id).style.display;

    if(display=='block'){
       document.getElementById(id).style.display='none';
    }else{
       document.getElementById(id).style.display='block';
    }
}
</script>



<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-10 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-database text-inverse"></i>
						
						<a href="#" onclick="openbox('box'); return false"><h2 class="counter text-inverse">10</h2></a>
						<p class="text">Количество серверов</p>
						
						
						
						<table class="table table-bordered">
							<thead>
								<tr>
							
								<th>№ уязвимости</th>
								<th>Описание уязвимости</th>
								<th>Рекомендации по устранению уязвимости</th>
								<th>Дата обнаружения уязвимости</th>
								</tr>
							</thead>
							<tbody>
								<tr>
										
								<td><a href="index3.php" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse"><?php 
    $conn = mysqli_connect("localhost", "root", "", "mytable"); 
    // Check connection 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }  
    $sql = "SELECT CVE_ID FROM mytable where QID = '115229'"; 

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 

      // output data of each row 
    while($row = $result->fetch_assoc()) { 

      echo "" . $row["CVE_ID"]; 
	  
    } 
    

    } else { echo "0 results"; } 
    $conn->close(); 
  ?></h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse"><?php 
    $conn = mysqli_connect("localhost", "root", "", "mytable"); 
    // Check connection 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }  
    $sql = "SELECT Solution FROM mytable where QID = '256208'"; 

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 

      // output data of each row 
    while($row = $result->fetch_assoc()) { 

      echo "" . $row["Solution"]; 
	  
    } 
    

    } else { echo "0 results"; } 
    $conn->close(); 
  ?></h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								</tr>
								<tr>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse"><?php 
    $conn = mysqli_connect("localhost", "root", "", "mytable"); 
    // Check connection 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }  
    $sql = "SELECT CVE_ID FROM mytable where QID = '256208'"; 

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 

      // output data of each row 
    while($row = $result->fetch_assoc()) { 

      echo "" . $row["CVE_ID"]; 
	  
    } 
    

    } else { echo "0 results"; } 
    $conn->close(); 
  ?></h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse"><?php 
    $conn = mysqli_connect("localhost", "root", "", "mytable"); 
    // Check connection 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }  
    $sql = "SELECT Solution FROM mytable where QID = '42444'"; 

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 

      // output data of each row 
    while($row = $result->fetch_assoc()) { 

      echo "" . $row["Solution"]; 
	  
    } 
    

    } else { echo "0 results"; } 
    $conn->close(); 
  ?></h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								</tr>
								<tr>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse"><?php 
    $conn = mysqli_connect("localhost", "root", "", "mytable"); 
    // Check connection 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    }  
    $sql = "SELECT Solution FROM mytable where QID = '115229'"; 

    $result = $conn->query($sql); 
    if ($result->num_rows > 0) { 

      // output data of each row 
    while($row = $result->fetch_assoc()) { 

      echo "" . $row["Solution"]; 
	  
    } 
    

    } else { echo "0 results"; } 
    $conn->close(); 
  ?></h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								<td><a href="#" onclick="openbox('box'); return false" ><h4 style="color:green; class="counter text-inverse">CVE-2015-1728</h4></a></td>
								</tr>
							</tbody>
						</table>
						

						</div>
						
						
					</div>
					<!-- .statistics-box .with-icon -->
				</div>
				<!-- /.box-content -->

				
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->
			
			<!-- /.col-lg-9 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		
		<!-- /.row small-spacing -->

		
			<!-- /.col-lg-4 col-xs-12 -->

			
		<!-- /.row -->		
		<footer class="footer">
				
			
			
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- &#9806;
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Sparkline Chart -->
	<script src="assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/scripts/chart.sparkline.init.min.js"></script>

	<!-- Percent Circle -->
	<script src="assets/plugin/percircle/js/percircle.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="assets/plugin/chart/chartist/chartist.min.js"></script>
	<script src="assets/scripts/jquery.chartist.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>