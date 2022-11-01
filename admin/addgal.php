<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["a_id"])) {
       header("location:../user/ulogreg.php");
}



?>

<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Tulu language App | Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

	    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4d4d4d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000000;
}


</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		

		<?php include "header.php"; ?> 

		<?php include "sidebar.php"; ?> 
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
          

<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Add Gallery</h3>
								</div>
								<div class="panel-body">
									 <form action="../controller/gallery.php" method="post" enctype="multipart/form-data">
          

  <label>Category Name:</label><br>
  <select name="a">
      
        <?php


    $stmt=$admin -> ret("SELECT * FROM `category`");


    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 
    {
    ?>
      <option value="<?php echo $row['cname']; ?>"><?php echo $row['cname']; ?></option>

      <?php } ?>
  </select>

<br><br>
    <label>Upload Image :</label><br>
   <input type="file" name="image" placeholder="" required=""><br>

   <input type="submit" name="add" class="btn btn-warning" value="Insert">




      </form>
							</div>


      </form>
							
					
		
		<?php include"footer.php"; ?>

	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
