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


if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Welcome, $username!";

    $qry = "SELECT subject FROM faculty WHERE id = '$username' GROUP BY subject";
    $result = mysqli_query($conn, $qry);

    if ($result->num_rows > 0) {

        while( $row = mysqli_fetch_assoc($result)){
            ?>
            <div class="fsubject">
                <?php
                 echo "Here Are the Subjects That You Handle :  " . $row['subject'];
                ?>
            </div>
            <?php
           
        }
        // $row = mysqli_fetch_assoc($result);
        // echo "Your email is: " . $row['faculty'];

    } else {
        echo "User not found in the database.";
    }
}

?>

<a href="entergrade.php"><button>Enter Grades Here</button></a>
</div>

</body>
</html>
