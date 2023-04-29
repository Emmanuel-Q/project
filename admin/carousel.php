<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Carousel Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body>
		
		<!-- Sidebar -->
		<div id="pgside">
			<a href="home.php"><h2>Dashboard</h2></a>
			<a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
			<a href="carousel.php" class="current"> Carousel</a>
			<a href="about.php"> About</a>
			<a href="footer.php"> Footer</a>
			<a href="header.php"> Header</a>
			<a href="services.php"> Services</a>
			<a href="team.php"> Team</a>
			<a href="testimonial.php"> Testimonials</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    	</div>
		
		<!-- Main Content Area -->
		<div class="content">
			<h2>Carousel Section</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>