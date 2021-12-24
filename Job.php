<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $c_adress = $_POST['c_adress'];
    $p_adress = $_POST['p_adress'];
    $mobile_no = $_POST['mobile_no'];
    $p_exp = $_POST['p_exp'];
    $apply = $_POST['apply'];
    
    
    
    if(!empty($name) && !empty($email) && !empty($c_adress) && !empty($p_adress) && !empty($mobile_no) && !empty($p_exp) && !empty($apply) && !is_numeric($name))
    {
        //save to database
        $user_id = $user_data['user_id'];
        $query = "insert into job (user_id,name,email,c_adress,p_adress,mobile_no,p_exp,apply) values ('$user_id','$name','$email','$c_adress','$p_adress','$mobile_no','$p_exp','$apply')";

        mysqli_query($con,$query);
        echo "FORM SUBMITTED !!";
    }else
    {
        echo "Please enter some valid information!!";
    }
    
}



?>
<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/job.css">
        <style>
        .user{
            font-size:3.0rem;
            margin-left:2rem;
            color:white;
            font-family: 'Allison', cursive;
        }
    </style>
</head>
<body>
    <header class="background h-nav-resp ">
        

        <div class="logo"><img src="img/logo.jpeg" alt="logo"><span class="user"><span class="user">hi </span><?php echo $user_data['user_name'];?></span></div>

    <nav class="navbar v-class-resp">
    <a href="index.php">Home</a>
        <a href="aboutpage.php">About Us</a>
        <a href="orderfood.php">Order Food </a>
        <a href="booking.php">Bookings</a>
        <a href="Job.php">Job Availability</a>
        
        <a href="logout.php">
            <button class="btn-sm" > Log Out</button>
        </a>
    </nav>
    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

</header>
<section class=" background">
    <section class=" firstsection">
        <div class="firsthalf">
            <p class="text-extralarge"> Born To Eat</p>
        </div>
        <form method="post">     
        <section class="form jbapply">
                
                    <label for="NAME" class="clr">FULL NAME</label>
                    <input class="inptarea" id="NAME" type="text" placeholder="Full Nmae" name="name" required >
                
                    <label for="Email" class="clr">EMAIL</label>
                    <input class="inptarea" id="Email" type="Email" placeholder="Email" name="email" required>
                
                    <label for="Adress" class="clr">CURRENT ADRESS</label>
                    <input class="inptarea" id="Adress" type="text" placeholder="Current Address" name="c_adress" required>
                
                    <label for="Adress" class="clr">PERMANENT ADRESS</label>
                    <input class="inptarea" id="Adress" type="text" placeholder="Permanent Address" name="p_adress" required>
               
                    <label for="P_no" class="clr">PHONE NUMBER</label>
                    <input class="inptarea" id="P_no" type="text" placeholder="Phone" name="mobile_no" required>
               
                    <label for="P_ex" class="clr">PAST EXPIERENCE</label>
                    <input class="inptarea" id="P_ex" type="text" placeholder="Expierence" name="p_exp" required>
               
                    <label for="J_T" class="clr">APPLY FOR</label>
                    <select class="inptarea" name="apply" id="J_T">
                        <option value="Manager">Manager</option>
                        <option value="Chief">Chief</option>
                        <option value="Waiter">Waiter</option>
                        <option value="Watchman">Watchman</option>
                        <option value="Delivery boy">Delivery boy</option>
                    </select>
                
         
                     <button class="submit">Submit</button>




                     </form>
    </section>
</section>
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
            <!--<form method="post">
            <div class="contactus">
                <label for="name">Your name</label>
                <input class="contact" id="name" type="text" placeholder="YourName" name="f_name" required>
                <label for="phone">Your Phone Number</label>
                <input id="phone" type="text" class="contact" placeholder="Phone Number" name="f_mobile_no" required>
                <label for="email">Your Email</label>
                <input id="emial" type="email" class="contact" placeholder="Email" name="f_email" required>
                <label for="querry">Your Querry</label>
                <textarea name="querry" class="contact" id="querry" cols="22" rows="15" placeholder="Your Querry" name="querry"></textarea>
            </div>
            <button class="submit">submit</button>
            </form>-->
            <div class="thanks">
                <p>Thanks <span> for visiting</span></p>
            </div>
        </section>
    </footer>
    <script src="js/resp.js"></script>
</body>
</html>
