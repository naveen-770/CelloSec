<?php 
	
	session_start();
	include "db_conn.php";
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	if (isset($_SESSION['id']) && isset($_SESSION['uname'])) { 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cello</title>
	
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="php/jquery-1.7.2.min.js"></script>

	<script src="php/carousel.js"></script>


</head>
<body>
	<div id="header" style= "background-color: black; ">
		<img src="img/logo.jpg">
		<label>Cello</label>
		
		<ul>
			<li><a href="logout.php" class="">Logout</a></li>
			<li><a href="home.php"><i class="icon-home"></i>Home</a></li>
			<li><p class="display-4 ">Hello, <?=$_SESSION['uname']?></p></li>
		</ul>
	</div>
			
	
	


<div id="container">

	<div class="nav">
	
			 <ul>
				<li><a href="#"><i></i>  </a></li>
				
			</ul>
	</div>
	
	
	<div id="carousel">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel"></div>
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
	

	<div id="video">
		<video controls autoplay width="445px" height="300px">
			<source src="video/clothing2.mp4" type="video/mp4">
		</video>
	</div>

	
	<div id="content">
		<div id="product" style="position:relative; margin-top:30%;">
			<center><h2><legend>Feature Items</legend></h2></center>
			<br />
			<script>console.log('PHP: " . $query . "',$query);</script>
			
			<?php 
				


				
				$sth = $conn->prepare("SELECT *FROM `product` WHERE category='feature' ORDER BY product_id DESC");

				$sth->setFetchMode(PDO:: FETCH_OBJ);
				$sth -> execute();
				
				if (true) 
    			{
        			// OUTPUT DATA OF EACH ROW
        			while($row = $sth->fetch())
					{						
						echo "<div class='float'>";
						echo "<center>";
						echo "<a href='payment.php?id=".$row->product_id."'><img class='img-polaroid' src='img/".$row->product_image."' '></a>";
						echo " ".$row->product_name."";
						echo "<br />";
						echo "$ ".$row->product_price."";
						echo "<p><a href='payment.php?id=".$row->product_id."' class='button'>Buy Now</a></p>";
						echo "<br />";
						echo "</center>";
						echo "</div>";
					}
				}
			?>
		</div>
	</div>

	<br />
</div>
	<br />
	<div id="footer" style="position:relative;">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">Cello Inc.2022</p>
		</div>
	</div>
</body>
</html>

<?php 
}else {
	header("Location: index.php");
	exit;
	}
?>