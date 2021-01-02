<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style/style.css
    ">

    <title>CodeIT | Sign in to CodeIT to enroll to the awesome courses for programming</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/codeit_favicon.png">

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
  	<?php

		$con = mysqli_connect('localhost', 'root', '', 'codeit');

  		if (isset($_POST['submit'])) {
  			$fname = mysqli_real_escape_string($con, $_POST['fname']);
  			$lname = mysqli_real_escape_string($con, $_POST['lname']);
  			$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  			$email = mysqli_real_escape_string($con, $_POST['email']);
  			$pass = mysqli_real_escape_string($con, $_POST['pass']);
  			$cpass = mysqli_real_escape_string($con, $_POST['cpass']);
  			$pass_hash = password_hash($pass, PASSWORD_BCRYPT);
  			$cpass_hash = password_hash($cpass, PASSWORD_BCRYPT);
				$email_query = " SELECT * FROM registration where email = '$email' ";
  			$email_result = mysqli_query($con, $email_query);
  			$row = mysqli_num_rows($email_result);
  			if ($row > 0) {
  				?>
  				<script>alert("Email already exists. If you are an existing user try logging in");</script>;
  				<?php
  			} else {
  				if ($pass === $cpass) {
					$query = " INSERT INTO registration ( fname , lname , mobile , email , pass , cpass ) values ( '$fname' , '$lname' , '$mobile' , '$email' , '$pass_hash' , '$cpass_hash' ) ";
					$result = mysqli_query($con, $query);
					if ($query) {
						header('location:login.php');
					} else {
						?>
						<script>alert("Unable to sign in...");</script>
						<?php
					}
				  } else {
					  echo "<script>alert('The password does not match you gave us');</script>";
				  }
  			}
  		}

  	?>
  	<div class="overlay"></div>
	<div class="prompt-close" data-target="error"><i class="fas fa-times-circle"></i></div>
    <div class="prompt" id="error">
        <div class="prompt-header text-danger">
            Invalid Credentials
        </div>
        <div class="prompt-body">
            
        </div>
        <div class="prompt-footer">
            <a href="#" class="btn btn-primary modal-close" onclick="closeprompt()" data-target="error">Ok, I understood</a>
        </div>
    </div>
  	<div class="container">
	  	<div class="row">
	  		<div class="col-md-2 col-sm-12">
	  			<img src="../images/password.svg" style="width: 100%;">
	  			<p class="desc text-white text-center" style="font-size: .85rem;">Create your free account to access the courses from CodeIT.</p>
	  		</div>
  			<div class="col-md-10 col-sm-12">
	  			<div class="main">
	  				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	  					<div class="row">
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="text" id="fname" placeholder="First name" name="fname" class="form-control">
	  							</div>
	  						</div>
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="text" id="lname" placeholder="Last name" name="lname" class="form-control">
	  							</div>
	  						</div>
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="text" id="mobile" placeholder="Mobile no." name="mobile" class="form-control">
	  							</div>
	  						</div>
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="text" id="email" placeholder="Email" name="email" class="form-control">
	  							</div>
	  						</div>
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="password" id="pass" placeholder="Make a strong password" name="pass" class="form-control">
	  							</div>
	  						</div>
	  						<div class="col-md-6 col-sm-12">
	  							<div class="form-group">
	  								<input type="password" id="cpass" placeholder="Confirm Password
	  								" name="cpass" class="form-control">
	  							</div>
	  						</div>
							<div class="col-12 text-center">Already a user? <a href="login.php" style="text-decoration: none;">Login</a></div>
	  						<div class="col-12 text-center my-3 justify-content-around">
	  							<input type="submit" value="Sign in" class="btn btn-primary" name="submit">
	  							<input type="reset" value="Reset" class="btn btn-danger">
	  						</div>
	  					</div>
	  				</form>
	  			</div>
	  		</div>
  		</div>
  	</div>
  	<!-- Custom JS -->
  	<scrip0t src="register.js"></scrip0t>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <scrip0t src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></scrip0t>
    <scrip0t src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></scrip0t>
  </body>
</html>