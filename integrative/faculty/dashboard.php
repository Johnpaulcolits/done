<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .content {
            margin-left: 250px;
            padding: 16px;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="sidebar">
<a href="dashboard.php">Dashboard</a>
    <a href="students.php">Students</a>
    <a href="grades.php">Grades</a>
    <a href="report.php">Reports</a>
    <?php
// Start the session

session_start();
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // echo 'Logged in as ' . $_SESSION['username'] . '<br>'.'<br>';
    echo '<script>
    function confirmLogout() {
        var confirmLogout = confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            window.location.href = "logout.php"; // Redirect to logout.php if the user clicks "OK"
        }
    }
</script>';

echo ' 
    <a href="javascript:void(0);" onclick="confirmLogout()">   Logout
 </a>';
} else {
  header("location: logout.php");
}
?>
</div>

<div class="content">


<?php


include "../config/database.php";

// Query to retrieve data from the database
$query = "SELECT lastname, COUNT(*) AS total_students FROM faculty GROUP BY student ";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the results and display the summary
    echo "Summary of Total Students per Subject:\n"."<br>";
    while ($row = $result->fetch_assoc()) {
        

?>
<div class="container">
<?php 
 echo "{$row['lastname']} {$row['total_students']} students\n"."<br>";
       

       ?>

</div>
       <?php 
    }

    // Close the result set
    $result->close();
} else {
    echo "Error executing the query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<div>

</div>
</div>

</body>
</html>
