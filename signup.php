<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Trip Planner </title>
        <!-- Custom CSS ===>>>>-->
        <link href="index.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
         

    </head>
    <body style="padding-top: 50px;">
         <!-- Header -->
		  <?php
		  include 'includes/header.php';
		  ?>
		  <!--Header end---->
        
          <div id = "signup-bg">

        <div class="container-fluid decor_bg sbg" id="content">
            
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        
                    <br><br><br>
                    <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
                                 ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?>
                    </div>
                   <?php session_destroy()?>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
                    <h2>User Registeration </h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Full Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="create Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Mobile No." maxlength="10" size="10" name="MobileNumber" required = "true">
                            </div>
                          
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        </div>
        
    <!--Footer-->
    <?php
    include 'includes/footer.php';
	?>
    <!--Footer end-->
        </body>
        
        </html>