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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Born to Eat</title>
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
        <a href="job.php">Job Availability</a>
        
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
        <div class="secondhalf">
            <p class="text-large">Eat and Repeat</p>
        </div>
    </section>
    <section class="secondsection">
        <div class="thirdhalf">
            <p class="text-large2">
                We Welcomes Your HUNGER
            </p>
            <p class="text-small">
                We Inspire By your Hunger. Hunger Bring Inspiration For our Chef. Who is More Hungry To Be Inspired. Where Born To Eat Is Known For Its Hunger. The more you eat the more we got Inspired to make the dishes.
                we are greatful to have foody's like you .
            </p>
            <p class="text-small">‘food is life' and if you’re a foodie just like us, you know that the next best thing to eating food, is talking about it. Good food has a kind of love attached to it.</p>
        </div>

    </section></section>
    <hr>
    <section class="thirdsection background">
        <div class="fourthhalf">
            <p class="text-large3">
                Are you Hungry we already selected some of our best foods
            </p>
        </div>
        <div class="fifthhalf">
            <div class="maincontainer1">
                <div class="incontainer"> 
                    <p class="food-text">Vegetarian</p>
                        <div class="mainbox">
                            <div class="boxcontainer">
                                <span class="price"> ₹150- ₹280</span>
                                <img class="part-img" src="img/food1.jpg" alt="kadai-paneer">
                                <span class="aboutfood">Kadai Paneer is a vibrant, tangy, spiced paneer dish that can brighten up your day any time.The addition of Nan makes its more delicious</span>
                                <h3>Kadai Paneer</h3>
                                <div class="stars">
                                    <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                                </div>
                                <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                            </div>    
                            <div class="boxcontainer">
                                <span class="price"> ₹110- ₹160</span>    
                                <img src="img/food2.jpg" alt="dal-makhni" class="part-img">
                                <span class="aboutfood"> Dal Makhani is one of the most popular lentil recipes from the North Indian Punjabi cuisine made with Urad Dal and Rajma.</span>
                                <h3>Dal Makhni</h3>
                                <div class="stars">
                                    <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                                </div>
                                <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>

                            </div>
                        </div>
                </div>
                <div class="incontainer">
                    <p class="food-text1">Non-Vegetarian</p>
                        <div class="mainbox">
                            <div class="boxcontainer">
                                <span class="price"> ₹200- ₹320</span>
                                <img src="img/food3.jpg" alt="chicken-biryani" class="part-img">
                                <span class="aboutfood">Chicken Biryani is a flavorful rice dish with tender, succulent chicken on a bed of fragrant rice.This dish can make your whole day.</span>
                                <h3>Chicken Biryani</h3>
                                <div class="stars">
                                    <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                                </div>
                                <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                            </div>
                            <div class="boxcontainer"> 
                                <span class="price"> ₹240- ₹430</span>   
                                <img src="img/food4.jpg" alt="tandoori-chicken" class="part-img">
                                <span class="aboutfood">Chicken pieces marinated in yogurt and powdered spices, grilled in a clay pot tandoor till the outside is beautifully charred.</span>
                                <h3>Tandoori Chicken</h3>
                                <div class="stars">
                                    <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                                </div>
                                <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                            </div>
                        </div>
                </div>
            </div>
            

            <div class="maincontainer2">
                <div class="incontainer">
                    <p class="food-text2">Fast food</p>
                    <div class="mainbox">
                        <div class="boxcontainer">
                            <span class="price"> ₹90- ₹120</span>
                            <img src="img/food5.jpg" alt="tadoori momos" class="part-img">
                            <span class="aboutfood"> A serious upgrade from the classic momos, these are tossed in tandoori paste and chargrilled to perfection.Take a try you will not regret.</span>
                            <h3>Tandoori momos</h3>
                            <div class="stars">
                                <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                            </div>
                            <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                        </div>
                    </div>    
                </div>
                <div class="incontainer">
                    <p class="food-text2">Snacks</p>
                    <div class="mainbox">
                        <div class="boxcontainer">
                            <span class="price"> ₹40- ₹60</span>
                            <img src="img/food6.webp" alt="samosa" class="part-img">
                            <span class="aboutfood">Samosas are very delicious and a mouth watering snack. Mana andarki this is a favorite afterall. Onion samosa, alu samosa, corn samosa.</span>
                            <h3>Samosa</h3>
                            <div class="stars">
                                <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                            </div>
                            <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                        </div>
                    </div>    
                </div>
                <div class="incontainer">
                    <p class="food-text2">Drinks</p>
                    <div class="mainbox">
                        <div class="boxcontainer">
                            <span class="price"> ₹45- ₹95</span>
                            <img src="img/drink1.jfif" alt="softdrinks" class="part-img">
                            <span class="aboutfood"> A new Thirst, A new Drink. Feel refreshing , Feel Fresh. My New Friend. Create your own day.Drink with Guts. Drink with added Fun.</span>
                            <h3>Soft Drinks</h3>
                            <div class="stars">
                                <i class="fas fa-star">&#9733 &#9733 &#9733 &#9733 &#9734</i>
                            </div>
                            <button class="btnorder" onclick="window.location.href='orderfood.php';">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="fourthsection background">
        <div class="step">
        <h2 class="esysteps">Easy <span class="stps">Steps</span></h2>
        <section class="steps">
            
            <div class="box">
                <img src="img/step-1.jpg" alt="">
                <h3>Choose your food</h3>
            </div>
            <div class="box">
                <img src="img/step-2.jpg" alt="">
                <h3>Free and Fast Delivery</h3>
            </div>
            <div class="box">
                <img src="img/step-3.jpg" alt="">
                <h3>Easy Payment </h3>
            </div>
            <div class="box">
                <img src="img/step-4.jpg" alt="">
                <h3>Enjoy your food</h3>
            </div>
        

        </section>
        </div>

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