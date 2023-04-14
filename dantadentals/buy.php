<?php

$connection = mysqli_connect('localhost', 'root', '', 'buy_db');

if (!$connection) {
    echo '<script> alert("Data Not Saved"); </script>';
} else {
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    $plan = $_POST['plan'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];


    // Check if the selected date is in the future
    $query = "INSERT INTO buy_form(name, email, address, city, state,code,plan,cardname,cardnumber,expmonth,expyear,cvv) VALUES( '$name','$email', '$address', '$city','$state','$code','$plan','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<html>
            <head>
                <title>Plan Purchased Successfully</title>
                <link rel="stylesheet" type="text/css" href="css/demo.css">

                <meta http-equiv="refresh" content="20;url=index.php">
            </head>
            <body>
          
                <div class="container">
                    <img src="images/check02.gif" alt="Plan Purchased" class="success-img">
                    <h1>Plan Purchased Successfully</h1>
                    <p>Thank you for purchasing a pricing plan from Danta Dentals. We have received your request and will process it as soon as possible. Our team will get back to you shortly to confirm your payment and provide you with all the details of your selected plan. We appreciate your trust in our services and look forward to helping you achieve optimal oral health.</p>
                    <p>Your details are:</p>
                    <ul>
                        <li><strong>Plan Purchased</strong>   ' . $plan . '</li>
                        <li><strong>Full Name:</strong>   '  . $name .  '</li>
                        <li><strong>Email:</strong>   ' . $email . '</li>
                        <li><strong>Address:</strong>   ' . $address . '</li>
                        <li><strong>City</strong>   ' . $city . '</li>
                        <li><strong>State</strong>   ' . $state . '</li>
                        <li><strong>Zip-Code</strong>   ' . $code . '</li>



                    </ul>
                </div>
            </body>
        </html>';
    }
}
