<?php
session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($email) && !empty($mobile_no) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(10);
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $query = "insert into users (user_id,user_name,email,mobile_no,password) values ('$user_id','$user_name','$email','$mobile_no','$hash')";

            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }else
        {
            echo "Please enter some valid information!!";
        }
        
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Born To Eat</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <header class="background h-nav-resp ">
        

        <div class="logo"><img src="img/logo.jpeg" alt="logo"></div>

    <nav class="navbar v-class-resp">
        <a href="index.php">Home</a>
        <a href="aboutpage.php">About Us</a>
        <a href="orderfood.php">Order Food </a>
        <a href="booking.php">Bookings</a>
        <a href="Job.php">Job Availability</a>
       
        <a href="login.php">
        <button class="btn-sm">Log In</button>
        </a>
        
    </nav>
    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

</header>
   
<div class="maincontainer">
        <div class="signup">
            <div class="heading">
                <b>SIGN UP</b>
            </div>
            <form method="post"> 

            <div class="name">
                <label class="label" for="name">Name</label>
                <input id="text" type="text" class="area" placeholder="Name" name="user_name" required>
            </div>

            <div class="email">
                <label class="label" for="email">Email</label>
                <input id="text" type="email" class="area" placeholder="Email" name="email" required>
            </div>

            <div class="phone">
                <label class="label" for="phone">Mobile no.</label>
                <input id="text" type="phone" class="area" placeholder="Mobile no." name="mobile_no" required>
            </div>

            <div class="password">
                <label class="label" for="password">Password</label>
                <input id="text" type="password" class="area" placeholder="password" name="password" required>
            </div>


            <button class="signbtn">Sign-up</button>
            </form>
        </div>
    </div>
    
    <hr>
    <footer>
        <section class="lastsection" >
            <div class="info">
                <div class="social">
                    <img src="img/facebook.jfif" alt="facebook" class="facebook"><p class="socialtext">facebook.com</p>
                </div>
                <div class="social">
                    <img src="img/instagram.jfif" alt="instagram" class="instagram"><p class="socialtext">@instagram</p>
                </div>
                <div class="social">
                    <img src="img/twitter.jfif" alt="twitter" class="twitter"><p class="socialtext">@twitter</p>
                </div>
            </div>
            <form action="">
            <div class="contactus">
                <label for="name">Your name</label>
                <input class="contact" id="name" type="text" placeholder="YourName" required>
                <label for="phone">Your Phone Number</label>
                <input id="phone" type="text" class="contact" placeholder="Phone Number" required>
                <label for="email">Your Email</label>
                <input id="emial" type="email" class="contact" placeholder="Email" required>
                <label for="querry">Your Querry</label>
                <textarea name="querry" class="contact" id="querry" cols="22" rows="15" placeholder="Your Querry"></textarea>
            </div>
            <button class="submit">submit</button>
            </form>
            <div class="thanks">
                <p>Thanks <span> for visiting</span></p>
            </div>
        </section>
    </footer>
    <script src="js/resp.js"></script>
</body>
</html>