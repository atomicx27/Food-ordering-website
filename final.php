<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
  
#contactdetails{
    padding: 20px 80px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
#contactdetails #details{
    width: 40%;
}
#contactdetails #details span,#contactus-form span{
    font-size: 18px;
}
#contactdetails #details h2, #contactus-form h2{
    font-size: 26px;
    line-height: 35px;
    padding: 20px 0px;
}
#contactdetails #details h3{
    font-size: 20px;
}
#contactdetails #details li{
    list-style:none;
    display: flex;
    align-items: center;
}
#contactdetails #details i{
font-size: 17px;
padding-right: 10px;
}
#contactus-form{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:60px;
    margin: 30px;
    border: 1px solid #088178;
}
#contactus-form form{
    width: 65%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
#contactus-form form input , #contactus-form form textarea{
    width: 100%;
    padding: 15px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #088178;
}
#contactus-form form textarea{
    font-size: 15px;
    color: rgba(0, 0, 0, 0.842);
}
#contactus-form form button{
    margin-top: 4vh;
    padding: 8px 40px;
    background-color: #ffffff;
    color:#088178;
    border:2px solid #088178;
    font-weight: 600;
    transition: .5s ease;
    letter-spacing: 2px;
}
#contactus-form form button:hover{
    background-color: #088178;
    color: white;
    border:2px solid #088178;
    cursor: pointer;  
}
#contactus-form #people img{
    width: 70px;
    margin-right: 15px;
    height: 70px;
    object-fit:cover;
    border-radius:50%;
}
#contactus-form #people p{
    margin: 0;
    line-height: 25px;
    font-size: 15px;
}
#contactus-form #people span{
    display: block;
    font-weight: 600;
    font-size: 18px;
}
#contactus-form #people div{
    display: flex;
    padding-bottom: 25px;
    align-items: center;
    border: 1px solid #088178;
    margin: 15px;
    padding: 10px;
}
#aboutpagebanner h1{
    color: white;
    font-size: 5vw;
}
#aboutpagebanner h3{
    color: white;
    font-size: 1.5vw;
}
#aboutpagebanner #abouttext{
    padding: 20px 40px;
    border-radius: 5px;
    text-align: center;

}
#aboutpagebanner{
    background-color: #0082e6;
    background-size: cover;
    width: 100%;
    height: 40vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 15px;  
}
#aboutpagebanner h1{
    color: white;
    font-size: 5vw;
}
#aboutpagebanner h3{
    color: white;
    font-size: 1.5vw;
}
#aboutpagebanner #abouttext{
    padding: 20px 40px;
    border-radius: 5px;
    text-align: center;

}
#aboutdetails{
    padding: 20px 80px;
    display: flex;
    justify-content: space-between;
    
}
#aboutdetails img{
    width: 40vw;
    height: auto;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.863);
}
#aboutdetails #text{
    padding-left: 2vw;
}
#aboutdetails #text h1{
    font-size: 4vw;
    font-weight: 600;
}
#aboutdetails #text p{
    font-size: 18px;
}
#aboutdetails #text #aboutm{
    font-weight: 600;
    padding: 5px 0px;
    background-color: #ccc;
}

    </style>
  </head>
  <body>
  <section id="aboutpagebanner">
        <div id="abouttext">
           <h1>Order Placed</h1>
           <h3>Sit back,Relax and Enjoy!1</h3>
        </div>
     </section>
  <section id="contactdetails">
    <div id="details">
       <h2>Visit our agency location or contact us today.</h2>
       <h3>Head Office</h3>
       <div id="moredetails">
          <li><i class="fa fa-map"></i><p>MPSTME, Vile Parle (W), Mumbai</p></li>
          <li><i class="fa fa-envelope"></i><p>aryabhav2004@gmail.com</p></li>
          <li><i class="fa fa-phone"></i><p></p>9137023659</li>
          <li><i class="fa fa-clock-o"></i><p></p>9:00 - 20:00 Monday- Friday</li>
       </div>
    </div>
    <div id="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.9449786834048!2d72.83544851437728!3d19.110069555867852!2m
       3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9b888ae67fd%3A0xe0b9538d623ac5d2!2sMukesh%20Patel%20School%20Of%20Technolo
       gy%20Management%20%26%20Engineering!5e0!3m2!1sen!2sin!4v1667165494830!5m2!1sen!2sin"  width="600" height="450" style="border:0;" 
       allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 </section>

 <section id="contactus-form">
   <div class="container">
      <h1 style="color: #0082e6;">Contact Us</h1>
      <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <a href="home_1.html"><input type="submit" value="Submit"></a>
      </form>
    </div>
    <div id="people">
    <div>
        <img src="images/amp.jpg" alt="aryanmehta">
        <p><span>Aryan Mehta</span> Roll Number : C032<br>Phone : 9137023659 <br> Email : aryabhav2004@gmail.com</p>
     </div>
     <div>
        <img src="images/pk.png" alt="aadityarmall">
        <p><span>Pashin Kasad</span> Roll Number : C002<br>Phone : 9326430750 <br> Email : aadityarmall@gmail.com</p>
     </div>
     <div>
        <img src="images/sa.jpg" alt="arushisangle">
        <p><span>Shitij Agrawal</span> Roll Number : C011<br>Phone : 9619232329 <br> Email : arushigsangle@gmail.com</p>
     </div>
     <div>
        <img src="images/sk.jpg" alt="arushisangle">
        <p><span>SavyaSachin Kale</span> Roll Number : C011<br>Phone : 9619232329 <br> Email : arushigsangle@gmail.com</p>
     </div>
    </div>
   </div>
       </section>
    <script>
      /* Your JavaScript code */
    </script>
  </body>
</html>

<?php

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['submit'])) {
    $product_name = "Veg Biryani";
    $quantity = $_POST['qty'];
    $price = 200;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Cutlet";
    $quantity = $_POST['qty'];
    $price = 150;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Bread Jam";
    $quantity = $_POST['qty'];
    $price = 100;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Club Sandwich";
    $quantity = $_POST['qty'];
    $price = 200;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Rice Combo";
    $quantity = $_POST['qty'];
    $price = 220;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Noodles Combo";
    $quantity = $_POST['qty'];
    $price = 200;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Standard Meal";
    $quantity = $_POST['qty'];
    $price = 200;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Maharaja Meal";
    $quantity = $_POST['qty'];
    $price = 300;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Spring Roll";
    $quantity = $_POST['qty'];
    $price = 300;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['submit'])) {
    $product_name = "Veg Spring Roll";
    $quantity = $_POST['qty'];
    $price = 300;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


if (isset($_POST['submit'])) {
    $product_name = "Veg Paneer Tikka";
    $quantity = $_POST['qty'];
    $price = 250;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



if (isset($_POST['submit'])) {
    $product_name = "Veg Exotic Pizza";
    $quantity = $_POST['qty'];
    $price = 200;
    $total = $quantity * $price;

    // Insert data into the database
    $sql = "INSERT INTO orders (product_name, quantity, price, total) VALUES ('$product_name', $quantity, $price, $total)";
    if (mysqli_query($conn, $sql)) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



// Close the database connection
mysqli_close($conn);
?>
