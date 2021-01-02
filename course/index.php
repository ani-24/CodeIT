<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIT | Courses for free | Free video Lectures , notes , test , quiz and more...</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="../sidenav/style/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/codeit_favicon.png">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="overlay"></div>
<div class="sidenav">
		<nav>
			<ul>
				<a href="../index.php">
					<li>Home</li>
				</a>
				<a href="#">
					<li>Courses</li>
				</a>
				<a href="../contact/index.php">
					<li>Contact us</li>
				</a>
                <?php
                    if (!isset($_SESSION['fname'])) {
                        echo '<a href="../register/login.php" target="_blank">
                        <li>Login</li>
                    </a>
                    <a href="../register/register.php" target="_blank">
                        <li>Sign in</li>
                    </a>';
                    } else {
                        echo '<a href="../account/my_account.php" target="_blank"><li>My account</li></a>
						<a href="../register/logout.php" target="_blank"><li>Logout</li></a>';
                    }
                ?>
			</ul>
		</nav>
	</div>
    <header>
        <div class="container">
            <a href="index.php" class="logo">CodeIT</a>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="../contact/index.php">Contact</a></li>
                    <?php
						if (!isset($_SESSION['fname'])) {
                            echo '<li style="padding: 0 20px;"><a href="../register/login.php" target="_blank" class="btn btn-white" style="color: #00242b; font-weight: bold;">Login</a></li>
                            <li><a href="../register/register.php" target="_blank" class="btn btn-danger" style="color: #ffffff;">Sign in</a></li>';
                        } else {
                            echo '<li><a href="../account/my_account.php" target="_blank" class="btn btn-primary" style="color: #fff;">My account</a></li>
												<li><a href="../register/logout.php" target="_blank" class="btn btn-danger" style="color: #fff;">Logout</a></li>';
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
    <div class="container">
        <div id="courses">
            <div class="search-area">
                <input type="text" placeholder="try 'python'" name="search" id="search-box"><button class="search-btn btn btn-danger">Search</button>
			</div>
		    <div class="search-icon"><i class="fas fa-search fa-2x"></i></div>
            <div class="course-area">
                <div class="card" data-tag="html">
                    <div class="card-img">
                        <img src="../images/codeit_favicon.png" alt="HTML 5">
                    </div>
                    <div class="card-body">
                            <p class="card-desc">Complete HTML 5 tutorial for absolute beginners</p>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary not-available">Enroll now</a>
                            </div>
                    </div>
                </div>
                <div data-tag="css" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="css" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="python" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="vue js" class="card">
                    <div class="card-img">
                        <img src="../images/wallpaper.jpg" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="react js" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="angular js" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="bootstrap 4" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="bootstrap 5" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>
                <div data-tag="materialize css" class="card">
                    <div class="card-img">
                        <img src="../images/codeit_icon.png" alt="CSS">
                    </div>
                    <div class="card-body">
                        <p class="card-desc">Complete CSS tutorial for absolute beginners</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary not-available">Enroll now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="../sidenav/script.js"></script>
</body>
</html>