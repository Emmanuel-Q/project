
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>About Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body>
		
		<!-- Sidebar -->
		<div id="pgside">
			<a href="home.php"><h2>Dashboard</h2></a>
			<a href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
			<a href="carousel.php"> Carousel</a>
			<a href="about.php" class="current"> About</a>
			<a href="footer.php"> Footer</a>
			<a href="header.php"> Header</a>
			<a href="services.php"> Services</a>
			<a href="team.php"> Team</a>
			<a href="testimonial.php"> Testimonials</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    	</div>
		
		<!-- Main Content Area -->
		<div class="content">
			<h2>About Section</h2>
			<div>
			<?php
				
				include('connect.php');
				$result = $db->prepare("SELECT * FROM abouttb WHERE id=1");
				
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){ ?>

				
				<!-- Form Begins here -->
				<form action="save/saveabout.php" method="post" enctype="multipart/form-data" class="form">
					<input type="hidden" name="id" value="<?php echo $id; ?>" />
					<h3 style="text-align: center;">Edit About Page</h3>
					<!-- <span>About Image 1:</span>
					<input type="file" name="abt-img1" id="abt-img1" value="<?php echo $row['abt-img1']; ?>"><br><br>
					<span>About Image 2:</span>
					<input type="file" name="abt-img2" id="abt-img2" value="<?php echo $row['abt-img2']; ?>"><br><br> -->
					<span>About Title:</span>
					<input type="text" name="abt-title" id="abt-title" value="<?php echo $row['abt-title']; ?>"><br><br>
					<span>About Heading:</span>
					<input type="text" name="abt-h1" id="abt-h1" value="<?php echo $row['abt-h1']; ?>"><br><br>
					<label for="">About Paragraph 1:</label><br><br>
					<textarea name="abt-p1" id="abt-p1" cols="111" rows="5"><?php echo $row['abt-p1']; ?></textarea><br><br>
					<span>About Founder:</span>
					<input type="text" name="abt-founder" id="abt-founder" value="<?php echo $row['abt-founder']; ?>"><br><br>
					<label for="">About Paragraph 2:</label><br><br>
					<textarea name="abt-p2" id="abt-p2" cols="111" rows="5"><?php echo $row['abt-p2']; ?></textarea><br><br>
					<span>Button LM:</span>
					<input type="text" name="abt-lm" id="abt-lm" value="<?php echo $row['abt-lm']; ?>"><br><br>
					<span>Button CU:</span>
					<input type="text" name="abt-cu" id="abt-cu" value="<?php echo $row['abt-cu']; ?>"><br><br>
					<button type="submit" class="btn btn-success">Update</button>
				</form>

				<?php } ?>
			</div>
		</div>
	</body>
</html>