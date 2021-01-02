<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="CodeIT is my platform to share my knowledge with the world and espcially to those who do not have knowledge about programming or technology. I in this platform try to clear the doubts of the world and I give my 100% to it. I share the knowledge of technology programming programming languages...">
	<title>CodeIT | Free videos, courses, notes, problems, text and more |</title>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="home/style/style.css">
	<link rel="stylesheet" href="sidenav/style/style.css">
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/codeit_favicon.png" type="image/jpg">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	<div class="sidenav">
		<nav>
			<ul>
				<a href="#">
					<li>Home</li>
				</a>
				<a href="course/index.php">
					<li>Courses</li>
				</a>
				<a href="contact/index.php">
					<li>Contact us</li>
				</a>
				<?php
					if (!isset($_SESSION['fname'])) {
						echo '<a href="register/login.php" target="_blank">
						<li>Login</li>
					</a>
					<a href="register/register.php" target="_blank">
						<li>Sign in</li>
					</a>';
					} else {
						echo '<a href="account/my_account.php" target="_blank"><li>My account</li></a>
						<a href="register/logout.php"><li>Logout</li></a>';
					}
				?>
			</ul>
		</nav>
	</div>
	<div class="overlay"></div>
	<div class="scrollbar-indicator"></div>
    <header>
        <div class="container">
            <a href="index.php" class="logo">CodeIT</a>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="course/index.php">Courses</a></li>
                    <li><a href="contact/index.php">Contact</a></li>
										<?php
											if (!isset($_SESSION['fname'])) {
												echo '<li style="padding: 0 20px;"><a href="register/login.php" target="_blank" class="btn btn-white" style="color: #00242b; font-weight: bold;">Login</a></li>
                    		<li><a href="register/register.php" target="_blank" class="btn btn-danger" style="color: #ffffff;">Sign in</a></li>';
											} else {
												echo '<li><a href="account/my_account.php" target="_blank" class="btn btn-primary" style="color: #fff;">My account</a></li>
												<li><a href="register/logout.php" class="btn btn-danger" style="color: #fff;">Logout</a></li>';
											}
										?>
                </ul>
						</nav>
				<div class="menu_bar">
					<div class="bar" id="bar1"></div>
					<div class="bar" id="bar2"></div>
					<div class="bar" id="bar3"></div>
				</div>
      </div>
    </header>
    <div id="home">
			<div class="headerText">
				<h1 class="title">Welcome to Coding World</h1>
				<p class="desc">Let's learn exciting and awesome stuffs from programming together through video lectures, notes, test, quiz and other.</p>
			</div>
      <p style="position: absolute; width: 100%; text-align: center; top: 70vh; font-size: 1.7rem; color: white;">Our featured courses</p>
    </div>
    <div class="courses" style="width: 80%; margin: auto; transform: translateY(-100px);">
        <div class="grid-3">
            <div class="grid-item">
				<div class="card card-badge" data-badge="Free">
					<div class="card-img">
						<video src="images/html_thumbnail.mp4" muted autoplay style="width: 100%;"></video>
					</div>
					<div class="card-body">
						<h4 class="card-title">HTML 5 for beginners</h4>
						<p class="card-desc">This is a course for everyone. Anyone can join this course for free no matter what is his programming experience weater it is 10years or it is 0.</p>
						<div class="card-footer">
							<a href="#" class="btn btn-primary">Enroll now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item">
				<div class="card card-badge" data-badge="Free">
					<div class="card-img">
						<video src="images/css_thumbnail.mp4" muted autoplay loop style="width: 100%;" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title">CSS 3 for beginners</h4>
						<p class="card-desc">This is a course for everyone. Anyone who knows HTML, can take this course for free.</p>
						<div class="card-footer">
							<a href="#" class="btn btn-primary">Enroll now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item">
				<div class="card card-badge" data-badge="Free">
					<div class="card-img">
						<video src="images/js_thumbnail.mp4" loop muted autoplay style="width: 100%;" alt="">
					</div>
					<div class="card-body">
						<h4 class="card-title">JS for beginners</h4>
						<p class="card-desc">This is a course for everyone. Anyone who knows a bit of HTML and CSS can take this course to become a front-end web developer.</p>
						<div class="card-footer">
							<a href="#" class="btn btn-primary">Enroll now</a>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
	<footer>
		<div class="container">
			<div class="grid-3">
				<div class="grid-item section">
					<h1>About me</h1>
					<span class="desc">
						Aniket Kumar founded the company <i><b>CodeIT</b></i> in the year 2021 with the aim to share his knowledge with the world and also kept in his mind that technology is the future so he started teaching about technology and different programming language to the world.
					</span>
				</div>
				<div class="grid-item section">
					<h1 style="margin-bottom: 30px;">Quick Links</h1>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="course/index.php">Courses</a></li>
						<li><a href="contact/index.php">Contact us</a></li>
					</ul>
				</div>
				<div class="grid-item section">
					<h1 style="margin-bottom: 30px;"><?php
						if (!isset($_SESSION['fname'])) {
							echo 'Get connected with CodeIT';
						} else {
							echo 'CodeIT User Area';
						}
					?></h1>
					<div style="margin-bottom: 30px;">
						<?php
							if (!isset($_SESSION['fname'])) {
								echo '<a href="register/register.php" target="_blank" class="btn btn-outline-danger">Sign in</a>
								<a href="register/login.php" target="_blank" class="btn btn-outline-white">Login</a>';
							} else {
								echo '<a href="account/my_account.php" target="_blank" class="btn btn-outline-white">My account</a>
								<a href="register/logout.php" class="btn btn-outline-danger">Logout</a>';
							}
						?>
					</div>
					<div>
						<a href="contact/index.php" class="btn btn-outline-primary">Drop a message</a>
					</div>
				</div>
			</div>
			<hr>
			<div class="follow">
				<ul>
					<li><a href="https://www.youtube.com/channel/UCzNnPrIK80r3Xhk5MTjvfBw/" target="_blank"><i class="fab fa-youtube"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a href="https://github.com/Aniket-umar" target="_blank"><i class="fab fa-github"></i></a></li>
				</ul>
			</div>
			<hr>
			<div class="copyright">
				© 2021 copyright: <a href="index.php">CodeIT.42web.io</a>
			</div>
		</div>
	</footer>
	<script src="home/script.js"></script>
	<script src="sidenav/script.js"></script>
</body>
</html>