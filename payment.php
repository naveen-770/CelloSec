
<?php 
	
	session_start();
	include "db_conn.php";
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	if (isset($_SESSION['id']) && isset($_SESSION['fname'])) { 
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
	<div id="header">
		<img src="img/logo.jpg">
		<label>Cello</label>
		<ul>
			<li><a href="logout.php" class="">Logout</a></li>
			<li><a href="home.php"><i class="icon-home"></i>Home</a></li>
			<li><p class="display-4 ">Hello, <?=$_SESSION['fname']?></p></li>
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
			<center><h2><legend>Payment</legend></h2></center>

			<?php 
				

				$id =$_GET['id'];
				
				$sth = $conn->prepare("SELECT *FROM `product` WHERE product_id='$id'");

				$sth->setFetchMode(PDO:: FETCH_OBJ);
				$sth -> execute();
        		$row = $sth->fetch()					
				
			?>
			<br />
			<div class='float'>
				<center style="width: 1050px;">
				<?php 
				echo "<img class='img-polaroid' src='img/".$row->product_image."' '>";
				?>
					<h4>Product Name : <?php echo $row->product_name; ?></h3>
					<h4>Product Price : $<?php echo $row->product_price; ?></h3>
					<form method="post">
						<h4>Coupon :</h3>
						<h4><input type="text" name="search" style="width: 70%; height: 30px"></h3>
						
						<h4><input type="submit" name="submit" c></h3>
				
					</form>
					
				
			
			
			
			<?php



				if (isset($_POST["submit"])) {

					
					$str = $_POST["search"];
					$sth = $conn->prepare("SELECT * FROM `coupon` WHERE coupon_name = '$str'");

					$sth->setFetchMode(PDO:: FETCH_OBJ);
					$sth -> execute();

					if($row = $sth->fetch())
					{
			?>
			
			<table>
				<tr>
					<th><h4>Coupon Name</h4></th>
					
					<th><h4>Validity</h4></th>
				</tr>
				<tr>
					<td><?php echo $row->coupon_name; ?></td>
					<td><?php echo $row->validity;?></td>
				</tr>

			</table>
		<?php 
			}
		
		
		else{
			echo "Coupon Does not exist";
		}
	}

?>
	</center>
				
				</div>	
	
	</div>
	</div>

	<br />
</div>
	<br />
	<!-- <div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">Cello Inc.2022</p>
		</div>
	</div> -->
</body>
</html>

<?php 
}else {
	header("Location: login.php");
	exit;
	}
?>