<?php 
   include("db.php");
   session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
    
   ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/food.css">
      
      
    <title>Born to Eat</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Allison&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Allison&family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
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

.user{
    font-size:3.0rem;
    margin-left:2rem;
    color:white;
    font-family: 'Allison', cursive;
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
.firsthalf{
text-align: center;

}
.text-extralarge {
margin-top: 9%;
font-size: 190px;
color: rgb(250, 2, 2);
font-family: 'Allison', cursive;
}
.text-large {
font-size: 50px;
font-family: Pacifico, cursive;
color: rgb(240, 167, 51);
padding-left: 30px;
text-align: center;
}
        
.mt-3{
   margin-top:8rem;
}
.tables{
   display: flex;
   flex-direction: row;
}

       
        .result{
         color:red;
        }
        td
        {
          text-align:center;
        }
        .burger {
    position: absolute;
    cursor: pointer;
    right: 5%;
    top: 30px;
    display: none;
}
.line{
    width: 33px;
    background-color: white;
    height: 4px;
    margin: 5px 3px;
}
@media only screen and (max-width:1163px){
   
   .navbar {
       display: flex;
       flex-direction: column;
       margin-top: 27%;
       height: 280px;
       margin-right: 64px;
       background-color: rgb(235, 245, 245);
       border: 2px solid black;
       border-radius: 10px;
       
       
   }
   .navbar a{
       margin-top: 5px;
       margin-bottom: 10px;
       margin-left: 0;
   }
   header .navbar a{
       color: black;
   }
   .btn-sm{
       color: black;
       border: 2px solid black;
       border-radius: 10px;
   }
   .burger{
       display: block;
   }
   .h-nav-resp{
       height: 72px;
   }
   .v-class-resp{
       opacity:0;
   }
}
   @media only screen and (max-width:870px){
    .navbar{
        margin-top:36%;
    }
    .text-extralarge {
        margin-top: 12%;
        font-size: 130px;
    }
   }
   @media only screen and (max-width:600px){
    .navbar{
        margin-top: 56%;
    }
    .text-extralarge{
        margin-top: 14%;
    }

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
        <a href="">
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
    

<section class="mt-3 background">
      <div class="container-fluid">
        
         <div class="row tables">
            <div class="col-md-5  mt-4 ">
               <table class="table" style="background-color:black;">
                  <thead>
                     <tr>
                        <th style="color:white;">No.</th>
                        <th style="color:white;">MENU</th>
                        <th style="width: 31%;color:white;" >Qty</th>
                        <th style="color:white;">Price</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td scope="row" style="color:white;">1</td>
                        <td style="width:60%">
                           <select name="vegitable" id="vegitable"  class="form-control">
                              <?php 
                                 $sql = "SELECT * FROM menu";
                                 $query = mysqli_query($conn,$sql);
                                 while($row = mysqli_fetch_assoc($query)){
                                 ?>
                              <option id="<?php echo $row['id']; ?>" value="<?php echo $row['Name']; ?>" class="vegitable custom-select">
                                 <?php echo $row['Name']; ?>
                              </option>
                              <?php  }?>   
                           </select>
                        </td>
                        <td style="width:1%">
                          <input type="number" id="qty" min="0" value="0" class="form-control">
                        </td>
                        <td>
                           <p id="price" style="color:white;"></p>
                        </td>
                        <td><button id="add" class="btn btn-primary">Add</button></td>
                     </tr>
                  </tbody>
               </table>

              

               <div role="alert" id="errorMsg" class="mt-5" >
                 <!-- Error msg  -->
              </div>
            </div>
            <div class="col-md-7  mt-4" style="background-color:black;">
               <div class="p-4">
                  <div class="text-center">
                     <h4 style="color:white;">Receipt</h4>
                  </div>
                  <span class="mt-4" style="color:white;"> Time : </span><span  class="mt-4" id="time" style="color:white;"></span>
                  <div class="row">
                     <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <span id="day" style="color:white;"></span> : <span id="year" style="color:white;"></span>
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <p style="color:white;">Order No:</p>
                     </div>
                  </div>
                  <div class="row">
                     </span>
                     <table id="receipt_bill" class="table">
                        <thead>
                           <tr>
                              <th style="color:white;"> No.</th>
                              <th style="color:white;">Product Name</th>
                              <th style="color:white;">Quantity</th>
                              <th class="text-center" style="color:white;">Price</th>
                              <th class="text-center" style="color:white;">Total</th>
                           </tr>
                        </thead>
                        <tbody id="new" >
                          
                        </tbody>
                        <tr>
                           <td style="color:white;"> </td>
                           <td style="color:white;"> </td>
                           <td style="color:white;"> </td>
                           <td class="text-right text-dark" style="color:white;">
                                <h5 style="color:white;"><strong>Sub Total:  ₹ </strong></h5>
                                <p style="color:white;"><strong>Tax (5%) : ₹ </strong></p>
                           </td>
                           <td class="text-center text-dark" >
                              <h5 style="color:white;"> <strong><span id="subTotal"></strong></h5>
                              <h5 style="color:white;"> <strong><span id="taxAmount"></strong></h5>
                           </td>
                        </tr>
                        <tr>
                           <td> </td>
                           <td> </td>
                           <td> </td>
                           <td class="text-right text-dark">
                              <h5 style="color:white;"><strong>Gross Total: ₹ </strong></h5>
                           </td>
                           <td class="text-center text-danger">
                              <h5 id="totalPayment"><strong> </strong></h5>
                               
                           </td><br>
                           <td class =""btn-sm""><button type="button">place order</button></td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
<script>
   $(document).ready(function(){
     $('#vegitable').change(function() {
      var id = $(this).find(':selected')[0].id;
       $.ajax({
          method:'POST',
          url:'fetch.php',
          
          data:{id:id},
          dataType:'json',
          success:function(data)
            {
               $('#price').text(data.price);
 
               //$('#qty').text(data.product_qty);
            }
       });
     });

    /* //second option for fast food
     $(document).ready(function(){
     $('#vegitableA').change(function() {
      var ida = $(this).find(':selected')[0].ida;
       $.ajax({
          method:'POST',
          url:'fetch2.php',
          data:{ida:ida},
          dataType:'json',
          success:function(data)
            {
               $('#price').text(data.Price);
 
               //$('#qty').text(data.product_qty);
            }
       });
     });
    */
     //add to cart 
     var count = 1;
     $('#add').on('click',function(){
    
        var name = $('#vegitable').val();
        var qty = $('#qty').val();
        var price = $('#price').text();
 
        if(qty == 0)
        {
           var erroMsg =  '<span class="alert alert-danger ml-5">Minimum Qty should be 1 or More than 1</span>';
           $('#errorMsg').html(erroMsg).fadeOut(9000);
        }
        else
        {
           billFunction(); // Below Function passing here 
        }
         
        function billFunction()
          {
          var total = 0;
       
          $("#receipt_bill").each(function () {
          var total =  price*qty;
          var subTotal = 0;
          subTotal += parseInt(total);
          
          var table =   '<tr><td>'+ count +'</td><td>'+ name + '</td><td>' + qty + '</td><td>' + price + '</td><td><strong><input type="hidden" id="total" value="'+total+'">' +total+ '</strong></td></tr>';
          $('#new').append(table)
 
           // Code for Sub Total of Vegitables 
            var total = 0;
            $('tbody tr td:last-child').each(function() {
                var value = parseInt($('#total', this).val());
                if (!isNaN(value)) {
                    total += value;
                }
            });
             $('#subTotal').text(total);
               
            // Code for calculate tax of Subtoal 5% Tax Applied
              var Tax = (total * 5) / 100;
              $('#taxAmount').text(Tax.toFixed(2));
 
             // Code for Total Payment Amount
 
             var Subtotal = $('#subTotal').text();
             var taxAmount = $('#taxAmount').text();
 
             var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
             $('#totalPayment').text(totalPayment.toFixed(2)); // Showing using ID 
        
         });
         count++;
        } 
       });
           // Code for year 
             
           var currentdate = new Date(); 
             var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/"
                + currentdate.getFullYear();
                $('#year').text(datetime);
 
           // Code for extract Weekday     
                function myFunction()
                 {
                    var d = new Date();
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";
 
                    var day = weekday[d.getDay()];
                    return day;
                    }
                var day = myFunction();
                $('#day').text(day);
     });
</script>
 
<!-- // Code for TIME -->
<script>
    window.onload = displayClock();
 
     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000); 
     }
</script>
<script src="js/resp.js"></script>


</body>
</html>