<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <div class="booking-form">
            <h2>Hotel booking form</h2>
            <form action="checkout.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
 
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
           
                <label for="destination">Destination:</label>
                <input type="text" name="destination" id="destination" required>
           
                <label for="departure-date">Departure Date:</label>
                <input type="date" name="departure-date" id="departure-date" required>
               
                <label for="return-date">Return Date:</label>
                <input type="date" name="return-date" id="return-date" required>

                <button type="submit">Book Now</button>
            </form>
        </div>
    </div>
</body>
</html>










<?php

//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $destination = $_POST["destination"];
    $departure_date = $_POST["departure-date"];
    $return_date = $_POST["return-date"];


    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
      
    if (empty($_POST["destination"])) {
      $destinationErr = "please enter a destination";
    } else {
      $destination = test_input($_POST["destination"]);
    }
  
    if (empty($_POST["departure-data"])) {
      $departureErr = "Date is required";
    } else {
      $departureErr = test_input($_POST["departure-date"]);
    }
  
    if (empty($_POST["return-date"])) {
      $return_date = "Date is required";
    } else {
      $returnErr = test_input($_POST["return-date"]);
    }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



    
