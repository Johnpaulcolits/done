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
        

    
    body {
        font-family: 'Helvetica', 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .info-box {
        margin-bottom: 20px;
    }

    .info-label {
        font-weight: bold;
        color: #555;
    }

    .info-value {
        margin-left: 10px;
    }
</style>


  
</head>
<body>

<div class="sidebar">
<a href="userdash.php">Dashboard</a>
    <a href="profile.php">Profile</a>
    <a href="grade.php">Grades</a>
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

    // Assuming you have a database connection named $conn
    $qry = "SELECT * FROM students WHERE id = '$username'";
    $result = mysqli_query($conn, $qry);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
      
    } else {
        echo "User not found in the database.";
    }
} else {
    // Redirect to the login page if not logged in
  echo "Mali";
    exit();
}




?>
<div class="container">
    <div class="info-box">
        <div class="info-label">Lastname:</div>
        <div class="info-value"><?php echo $row['lastname']; ?></div>
    </div>

    <div class="info-box">
        <div class="info-label">Firstname:</div>
        <div class="info-value"><?php echo $row['firstname']; ?></div>
    </div>

    <div class="info-box">
        <div class="info-label">Middlename:</div>
        <div class="info-value"><?php echo $row['middlename']; ?></div>
    </div>

    <div class="info-box">
        <div class="info-label">Institute:</div>
        <div class="info-value"><?php echo $row['institute']; ?></div>
    </div>

    <div class="info-box">
        <div class="info-label">Course:</div>
        <div class="info-value"><?php echo $row['course']; ?></div>
    </div>
</div>


<div>

</div>
</div>

</body>
</html>
