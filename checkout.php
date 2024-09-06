<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OyeWRP76pLl1YQPqnegzoWl7ZjNeibz1cRqwurGC9XN0wBlMaTiIDRbRDWVk74L91xenjsDP9FO6ZsMmI1iVpWu00rB2MuM33";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "cancel_url" => "http://localhost/index.php",
    "locale" => "auto", 
    "line_items" => [
        [
            "quantity" => 1, 
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 2000,
                "product_data" => [
                    "name" => "T-shirt" 
                ]
            ]
        ],
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 700,
                "product_data" => [
                    "name" => "Hat"
                ]
            ]
        ]        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);


$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);



if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);


$sql = "INSERT INTO `booking`(`name`, `email`, `destination`, `departure_date`, `return_date`)
     VALUES ('$name','$email','$destination','$departure_date','$return_date')";

     if($conn->query($sql) == TRUE){
      header("location: confirmation.html"); 
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }

    }

$conn->close();
?>