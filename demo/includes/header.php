<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand " href="index.php">Home</a>
            <a class="navbar-brand " href="about.php">about</a>
            <a class="navbar-brand " href="package-list.php"> Packages</a>

            <a class="navbar-brand " href="about.php">Privacy policy</a>
            <?php
                if (isset($_SESSION['email'])) {
                    ?>
                <a class="navbar-brand " href="about.php">contact Us</a>
                <a class="navbar-brand " href="about.php">Enquiry</a>
                <?php } ?>
            
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-brand nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>