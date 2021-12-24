<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $f_name = $_POST['f_name'];
    $f_mobile_no = $_POST['f_mobile_no'];
    $f_email = $_POST['f_email'];
    $querry = $_POST['querry'];
    
    
    
    
    if(!empty($f_name) && !empty($f_mobile_no) && !empty($f_email) && !empty($querry)  && !is_numeric($name))
    {
        //save to database
        $user_id = $user_data['user_id'];
        $query = "insert into feedback(user_id,f_name,f_mobile_no,f_email,querry)values('$user_id','$f_name','$f_mobile_no','$f_email','$querry')";

        mysqli_query($con,$query);
        //echo "FORM SUBMITTED !!";
    }else
    {
        echo "Please enter some valid information!!";
    }
    
}

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/aboutstyle.css">
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
<section class=" main_container background">
        <section class="about_page">
            <div class="name">
                <p class="text-extralarge">Born To Eat</p>
            </div>
            <div class="abouttext">
                <p>At the point when BORN TO EAT’s organizer Tony ventured off the shorelines of Oahu following multi day of surfing with his Navy pals in the mid 60s, he did what worked out easily for him. He went hunting down a delicious burger, a hot container of fries and a virus drink. After twenty years, in 1982, it was that feeling of place and fulfillment he was attempting to reproduce when he took a little piece of the BORN TO EAT’ s and thudded it down right in the territory of Southern California.

                Today, ‘BORN TO EAT’ s still is consistent with Tony’s unique experience and his unique vision. Also, however our menu has developed to incorporate plates of mixed greens, soups and delicate tacos, despite everything we hold fast to the fundamental rationality that new sustenance, well disposed administration and a laid back air is the ideal end to a hard day of work or play. We trust you taste it in each chomp.

                Furthermore, we trust that whether you’re a ravenous surfer or occupied salesman, you stroll into BORN TO EAT’s and state to yourself, as Tony did those numerous years back, “Ahh…this is the place I need to be.”
                </p>
            </div>
 </section>
<section class="virtual_visit">
    <h1 class="v">Virtual<span class="visit">Visit</span></h1>
    <div class="mainboxv">
        <div class="inmainv">
            <img class="vimg1" src="img/VIRTUAL-V-1.jpg" alt="">

        </div>
        <div class="inmainv">
           
                <img src="img/VIRTUAL-V-5.jpg" alt="" class="vimg2">
            
            
                <img src="img/VIRTUAL-V-6.jpg" alt="" class="vimg2">
            
        </div>
    </div>

</section>
<section class="kitchen">
    <h1 class="ktcn">KITCHEN</h1>
    <div class="ktcnmainbox">
        
            <img src="img/VIRTUAL-V-4.jpg" alt="" class="ktcimg">
        
            <img src="img/VIRTUAL-V-3.jpg" alt="" class="ktcimg">
       
            <img src="img/VIRTUAL-V-2.jpg" alt="" class="ktcimg">
       
    </div>
</section>
<section class="mrghall">
    <h1 class="mrghl">MARRIAGE <span class="mrgh"> HALL</span></h1>
    <div class="mrghallmainbox">
        
            <img src="img/MG1.png" alt="" class="mrgimg">
        
            <img src="img/MRG2.jpg" alt="" class="mrgimg">
    </div>
    <div class="mrghallmainbox">
       
            <img src="img/MG3.jpg" alt="" class="mrgimg">

            <img src="img/MG4.jpg" alt="" class="mrgimg">
       
    </div>
</section>
<section class="contact">
    <div class="email">
        <div>Email - <a href="mailto:pratyush1555@gmail.com? subject=subject text" class="m2">pratyush1555@gmail.com</a></div>
    
        <div>Contact No - <a href="tel:+91 97714 97912" class="iPqaD _F G- ddFHE eKwUx m2">+919205802246</a></div>
    </div>
    <div class="location">
        <div> Location-<a href="https://g.page/gandhali-restaurant?share" class="loc m2">825 Plot No Exhibition Rd Near Gandhi Maidan, Gargee Hotel, Patna 800001 India</a></div>
    </div>
</section>
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
        <form method="post">
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
            </form>
            <div class="thanks">
                <p>Thanks <span> for visiting</span></p>
            </div>
        </section>
    </footer>
    <script src="js/resp.js"></script>
</body>
</html>
