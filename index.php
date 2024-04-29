<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'> 
    alert('$message');

    </script>";
}


$host="localhost";
$user="root";
$password="";
$db="managementsys";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Result Management System</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav>
            <label class="logo">TCSC</label>

            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Admission</a></li>
                <li><a href="login.php" class="btn btn-success">Login</a></li> 
            </ul>
        </nav>

        <div class="section1">
            <label class="img_text">We Teach Students With Care</label>
            <img class="main_img" src="Class.jpg">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="welcome_img" src="college.jpg" alt="">
                </div>
                <div class="col-md-8">
                    <h1>Welcome To TCSC</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia pariatur veniam veritatis ullam consectetur expedita vitae, mollitia tempora quod accusantium atque adipisci eveniet rerum autem suscipit voluptas nam possimus magnam.</p>

                </div>
            </div>

        </div>


        <center>
            <h1>Our Teachers</h1>
        </center>

        <div class="container">
            <div class="row">

                <?php 

                while($info=$result->fetch_assoc())
                {

                

                ?>

                <div class="col-md-4">
                    <img class="teacher" src="<?php echo "{$info['image']}" ?>">

                    <h3><?php echo "{$info['name']}" ?></h3>
                    
                    <h5><?php echo "{$info['description']}" ?></h5>
                </div>

                    <?php 

                    }

                    ?>
                
            </div>
        </div>




        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="teacher" src="web.jpg" alt="">
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sapiente autem ex blanditiis facilis nam, ullam harum quae non. Ex necessitatibus possimus blanditiis excepturi, modi similique ipsa exercitationem vitae tempora!</p>
                </div>

                <div class="col-md-4">
                   <img class="teacher" src="graphic.jpg" alt="">
                   <h3>Graphic Design</h3>
                   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur minus eum eveniet nesciunt debitis ipsa, distinctio qui suscipit quibusdam laboriosam optio maiores alias voluptates iste dolorem libero eligendi delectus voluptatum.</p> 
                </div>

                <div class="col-md-4">
                   <img class="teacher" src="marketing.png" alt="">
                   <h3>Marketing</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi consequuntur voluptatum, unde cum modi, ex ratione, laborum neque hic et pariatur nostrum tenetur corporis deleniti est adipisci. Corporis, asperiores odio?</p> 
                </div>
            </div>
        </div>


        <center>
            <h1 class="adm">Admission Form</h1>
        </center>

        <div align="center" class="admission_form"></div>

        <form align="center" action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input type="input_deg" type="text" name="Name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input type="input_deg" type="text" name="Email">
            </div>

            <div class="adm_int">
                <label class="label_text">Contact</label>
                <input type="input_deg" type="text" name="Contact">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="Message"></textarea>
            </div>

            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="Submit" value="Register" name="apply">
            </div>

            <footer class="footer_text">
                <h3>All Rights Reserved by ©Yash Mishra</h3>
            </footer>
        </form>
    </body>
</html>