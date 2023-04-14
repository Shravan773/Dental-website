<?php

$connection = mysqli_connect('localhost', 'root', '', 'appointment_db');

if (!$connection) {
    echo '<script> alert("Data Not Saved"); </script>';
} else {
    $first =  $_POST['first'];
    $second =  $_POST['second'];
    $email =  $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    // Check if the selected date is in the future
    $selected_date = new DateTime($date);
    $now = new DateTime();
    if ($selected_date <= $now) {
        echo '<script> alert("Please select a future date and time."); window.location.href = "index.php"; </script>';
        exit();
    }

    $query = "INSERT INTO appointment_form(first, second, email, number, date) VALUES( '$first', '$second', '$email', '$number', '$date')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<html>
            <head>
                <title>Appointment Booked Successfully</title>
                <link rel="stylesheet" type="text/css" href="css/demo.css">

                <meta http-equiv="refresh" content="10;url=index.php">
            </head>
            <body>
          
                <div class="container">
                    <img src="images/check02.gif" alt="Appointment Booked" class="success-img">
                    <h1>Appointment Booked Successfully</h1>
                    <p>Thank you for booking an appointment with us. We have received your request and will get back to you soon to confirm your appointment details.</p>
                    <p>Your appointment details are:</p>
                    <ul>
                        <li><strong>Full Name:</strong>   '  . $first . '  ' . $second . '</li>
                        <li><strong>Email:</strong>   ' . $email . '</li>
                        <li><strong>Phone Number:</strong>   ' . $number . '</li>
                        <li><strong>Appointment Date:</strong>   ' . $date . '</li>
                    </ul>
                </div>
            </body>
        </html>';
    }
}

?>