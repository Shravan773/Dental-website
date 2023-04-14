<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .admin-container {
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            max-width: 800px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            padding: 12px;
            background-color: #333;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #555;
        }

        .error {
            color: #f00;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <h1>Appointment Form Data</h1>
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'appointment_db');

        if (!$connection) {
            echo '<p class="error">Unable to connect to the database.</p>';
        } else {
            $query = "SELECT * FROM appointment_form";
            $query_run = mysqli_query($connection, $query);
            if (mysqli_num_rows($query_run) == 0) {
                echo '<p>No data available.</p>';
            } else {
                echo '<table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Appointment Date</th>
                            </tr>
                        </thead>
                        <tbody>';
                while ($row = mysqli_fetch_assoc($query_run)) {
                    echo '<tr>
                            <td>' . $row['first'] . ' ' . $row['second'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td>' . $row['number'] . '</td>
                            <td>' . $row['date'] . '</td>
                        </tr>';
                }
                echo '</tbody>
                    </table>';
            }
        }
        ?>
        <a href="logout.php" class="btn">Logout</a>
    </div>

