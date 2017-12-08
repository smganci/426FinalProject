<?php
//must have session start to be logged in
session_start();

?>

<!DOCTYPE html>


<html>

<head>  
    <title>ComRad</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                  <li><a href="home.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<form action="includes/logout.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                        </form>';
                        }else{
                            echo '<form action="includes/login.php" method="POST"> 
                            <input type="text" name="uid" placeholder="Username">
                            <input type="text" name="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>                  
                               </form>';
                        }
                    ?>
                    
                <!-- action links to php file to run method tells us we need to POST which is where the variables in the php are read from -->
                  
                    <a href="signup.php">Sign up</a>
                </div>
            </div>

        </nav>
    </header>