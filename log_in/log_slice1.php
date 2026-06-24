<?php
session_start();
ob_start();
?>

<html>
<head>

<title>Register</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link rel="stylesheet" href="css/style-footer.css">
<link href="css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/slice1.js"></script>

</head>

<?php

      $var=$_GET['var'];
	$_SESSION['a'][5]=$_GET['var'];	
      $_SESSION['layer1']=$_GET['var'];

?>

<body>

<!-- login form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Voting System using visual cryptography</h1>
                    <p>This system provides high security to your account through the cryptography password.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Login to your Account</h2>
                <p class="account1">Following is the 1st image you selected.</p>
                <img src=<?php echo $var; ?> onload="changeIt(this)" height="100" width="100">
                <p class="account">Select the part you set as the 1st part.</p>
				<center><div class="test" id="test"></div></center>
			</div>
		</div>
	</div>

</div>

<!-- footer -->
<footer class="footer-distributed">
      <!-- footer left -->
      <div class="footer-left">              
            <h3>Company<span>logo</span></h3>        
            <p class="footer-links">
                  <a href="#">Home</a>
                  ·
                  <a href="#">Blog</a>
                  ·
                  <a href="#">About</a>
                  ·
                  <a href="#">Faq</a>
                  ·
                  <a href="#">Contact</a>
            </p>
            <p class="footer-company-name">Company Name &copy; 2019</p>
      </div>
      <!-- footer center-->
      <div class="footer-center">              
            <div>
                  <i class="fa fa-map-marker"></i>
                  <p><span>21 Bandaranaike Mawatha</span> Katubedda, Sri Lanka</p>
            </div>
                                
            <div>
                  <i class="fa fa-phone"></i>
                  <p>+ (9471) - 123 - 4567</p>
             </div>
                                
            <div>
                  <i class="fa fa-envelope"></i>
                  <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>      
      </div>
      <!-- footer right-->
      <div class="footer-right">              
            <p class="footer-company-about">
                  <span>About the company</span>
                  Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>
                                
            <div class="footer-icons">
                                
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-github"></i></a>
                                
            </div>
                                
      </div>
                                
</footer>
                            
<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
                                                
<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>	
</body>

</html>