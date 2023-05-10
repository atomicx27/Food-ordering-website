<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Get the values of each item from the query string
$item1 = $_GET['item1'];
$item2 = $_GET['item2'];
$item3 = $_GET['item3'];
$item4 = $_GET['item4'];
$item5 = $_GET['item5'];
$item6 = $_GET['item6'];
$item7 = $_GET['item7'];
$item8 = $_GET['item8'];
$item9 = $_GET['item9'];
$item10 = $_GET['item10'];
$item11 = $_GET['item11'];
$item12 = $_GET['item12'];

// Insert the values into the database
$query = "INSERT INTO my_table (item1, item2, item3, item4, item5, item6, item7, item8, item9, item10, item11, item12) 
          VALUES ('$item1', '$item2', '$item3', '$item4', '$item5', '$item6', '$item7', '$item8', '$item9', '$item10', '$item11', '$item12')";

$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error: ' . mysqli_error($conn));
} else {
    echo "Data saved successfully!";
}

mysqli_close($conn);


// Establish a database connection
/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$item1 = $_GET['item1'];
$item2 = $_GET['item2'];
$item3 = $_GET['item3'];
$item4 = $_GET['item4'];
$item5 = $_GET['item5'];
$item6 = $_GET['item6'];
$item7 = $_GET['item7'];
$item8 = $_GET['item8'];
$item9 = $_GET['item9'];
$item10 = $_GET['item10'];
$item11 = $_GET['item11'];
$item12 = $_GET['item12'];


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
mysqli_close($conn);*/
?>