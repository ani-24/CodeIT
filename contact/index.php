<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      CodeIT | Contact us | Ask your questions, give suggestions or talk to us
    </title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="../sidenav/style/style.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/codeit_favicon.png" />
  </head>
  <body>
    <div class="sidenav">
      <nav>
        <ul>
          <a href="../index.php">
            <li>Home</li>
          </a>
          <a href="../course/index.php">
            <li>Courses</li>
          </a>
          <a href="#">
            <li>Contact us</li>
          </a>
          <?php
                    if (!isset($_SESSION['fname'])) {
                        echo '<a href="../register/login.php" target=_blank">
                        <li>Login</li>
                    </a>
                    <a href="../register/register.php" target=_blank">
                        <li>Sign in</li>
                    </a>';
                    } else {
                      echo '<a href="../account/my_account.php" target=_blank"><li>My account</li></a>
                      <a href="../register/logout.php" target=_blank"><li>Logout</li></a>';
                    }
                ?>
        </ul>
      </nav>
    </div>
    <div class="overlay"></div>
    <div class="modal-close" data-target="invalid"><i class="fas fa-times-circle"></i></div>
      <div class="modal" id="invalid">
        <div class="modal-body" style="text-align: center;">
          
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-danger">Sign in</a>
          <a href="#" class="btn btn-primary" style="margin-left: 20px;">Login</a>
        </div>
    </div>
    <header>
      <div class="container">
        <a href="../index.php" class="logo">CodeIT</a>
        <nav>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../course/index.php">Courses</a></li>
            <li><a href="#">Contact</a></li>
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
      <div id="contact">
        <div class="headerLine">Feel free to contact us</div>
        <div class="form">
          <form action="contact.php" onsubmit="return validate()" method="POST">
            <div class="grid grid-2">
              <div class="grid-item">
                <div class="input-area">
                  <input required type="text" id="fname" name="fname" />
                  <span class="form-label"> Your first name here: </span>
                </div>
              </div>
              <div class="grid-item">
                <div class="input-area">
                  <input type="text" name="lname" id="lname" placeholder="optional" />
                  <span class="form-label"> Your last name here: </span>
                </div>
              </div>
              <div class="grid-item">
                <div class="input-area">
                  <input type="text" name="mobile" required id="mobile" />
                  <span class="form-label"> Mobile number: </span>
                </div>
              </div>
              <div class="grid-item">
                <div class="input-area">
                  <input type="text" name="email" required id="email" />
                  <span class="form-label"> Email: </span>
                </div>
              </div>
            </div>
            <div style="width: 90%">
              <div class="input-area">
                <input type="text" name="message" id="message" required />
                <span class="form-label"> Write your message here: </span>
              </div>
            </div>
            <div style="height: 70px; width: 90%; display: flex; justify-content: space-around; align-items: center;">
              <input style="cursor: pointer;" type="submit" value="Submit" class="btn btn-success" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="../sidenav/script.js"></script>
  </body>
</html>
