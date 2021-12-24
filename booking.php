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
    $mobile_no = $_POST['mobile_no'];
    
    $t_booking = $_POST['t_booking'];
    $p_booking = $_POST['p_booking'];
    
    
    
    
    if(!empty($name) && !empty($email) && !empty($mobile_no) && !empty($t_booking) && !empty($p_booking)  && !is_numeric($name))
    {
        //save to database
        $user_id = $user_data['user_id'];
        $query = "insert into book(user_id,name,email,mobile_no,t_booking,p_booking)values('$user_id','$name','$email','$mobile_no','$t_booking','$p_booking')";

        mysqli_query($con,$query);
        //echo "FORM SUBMITTED !!";
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Allison&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Allison&family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
*{
    margin: 0;
    padding: 0;
}

.background{
    background:rgba(0, 0, 0, 0.7) url(./img/bkg.jpg);
    background-size: cover;
    background-blend-mode:darken;
    
}

.logo{
    width: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.logo img{
    width: 33%;
    border:3px solid rgb(250, 2, 2);
    border-radius: 50px;
}
header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 1rem 3%;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 10%);
    background-color: rgb(243, 221, 120);
}

header .navbar a {
    font-size: 1.3rem;
    margin-left: 2rem;
    color: white;
    text-decoration: none;
}

header .navbar a:hover {
    color:red;
}



.btn-sm {
    font-size: 15px;
    margin: 5px 12px;
    padding: 3px 9px;
    border: 2px solid white;
    border-radius: 10px;
    background-color:transparent;
    color:white;
    cursor: pointer;
}

.btn-sm:hover{
    border:2px solid red;
    color:red;
}
.firstsection{
    margin-top:14%;
}
.maincontainer{
    display:flex;
    justify-content:space-evenly;
    flex-direction:row;
}
.purpose{
    text-align:center;
}
.para{
    margin-bottom:3rem;
    font-size:3rem;
    color:red;
}
.para2{
    margin-bottom:3rem;
    margin-top:3rem;
    font-size:3rem;
    color:white;
    text-align:center;
}
.clr{
    color:white;
}

        .user{
            font-size:3.0rem;
            margin-left:2rem;
            color:white;
            font-family: 'Allison', cursive;
        }
        .submit{
    
    margin: auto;
    padding: 2px 10px 2px 10px;
    border: 2px solid black;
    border-radius: 5px;
    display: flex;
    justify-content: center;

}
.submit:hover{
    color:red;
}
.purpose{
    display: flex;
    flex-direction: column;
    
}
label{
    font-size: 20px;
    margin: auto;
    color: white;
    width:50%;
}
.inptarea{
    margin: auto;
    padding: 5px;
    width:50%;
    margin-bottom:10px;
}


    </style>
    
    <title>Born to Eat</title>
</head>
<body class="background">
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
<section class="firstsection ">
    <div class="maincontainer">
        <div class="purpose">

                    <p class="para">BOOK YOUR SPOT NOW </p>
                    <form method="post">

                    <label for="NAME" class="clr">FULL NAME</label>
                    <input class="inptarea" id="NAME" type="text" placeholder="Full Nmae" name="name" required ><br>
                
                    <label for="Email" class="clr">EMAIL</label>
                    <input class="inptarea" id="Email" type="Email" placeholder="Email" name="email" required><br>
                    
                
                    <label for="Adress" class="clr">CONTACT</label>
                    <input class="inptarea" id="Adress" type="text" placeholder="Contact" name="mobile_no" required><br>

                    <label for="type" class="clr">TYPE OF BOOKING</label>
                    <select class="inptarea" name="t_booking">
                         <option value="Table Booking">Table Booking</option>
                        <option value="Restaurant Booking">Restaurant Booking</option>
                    </select><br>
                
                    <label for="Adress" class="clr">PUPOSE OF BOOKING</label>
                    <input class="inptarea" id="UPRPOSE" type="text" placeholder="Purpose" name="p_booking" required><br>
                    <button class="submit">Submit</button>
                    </form>
               
        </div>
        
    </div>
    <p class="para2">For further enquiry contact 9205802246</p>
       
</section>