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

$qry = "    SELECT * FROM school_year";


$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_assoc($result)){
    $id = $row['status'];
$year = $row['year'];
    $semester = $row['semester'];
              ?>
                 <div class="center-text">
        <?php echo "School Year:"." ".$year . " " . "Semester :"." ".$semester." "."Status :"." " .$id ;?>
    </div>
              <?php
}        






$sel = "SELECT subject FROM faculty";

$qry = mysqli_query($conn, $sel);

// Check if the query was successful
if ($qry) {
    // Get the total number of subjects
    $totalSubjects = mysqli_num_rows($qry);

    // Display the total number of subjects
    echo "Total Subjects: " . $totalSubjects;
} else {
    // Display an error message if the query fails
    echo "Error executing query: " . mysqli_error($conn);
}
?>


<div>

</div>
</div>

</body>
</html>
