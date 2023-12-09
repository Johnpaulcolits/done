<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="maindash.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">GRADING SYSTEM</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
            <li><a href="dashboard.php">
            <span class="link-name">DISPLAY</span>
        </a></li>
                <li><a href="student.php">
                    <span class="link-name">STUDENT</span>
                </a></li>
                <li><a href="faculty.php">
                    <span class="link-name">FACULTY</span>
                </a></li>
                <li><a href="subject.php">
                    <span class="link-name">SUBJECTS</span>
                </a></li>
                <li><a href="grade.php">
                    <span class="link-name">GRADE</span>
                </a></li>
                <li><a href="school_year.php">
                    <span class="link-name">SCHOOL YEAR</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <!-- <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li> -->
                <li>
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
    <a href="javascript:void(0);" onclick="confirmLogout()">
    <i class="uil uil-signout"></i>
    <span class="link-name">Logout</span>
    </a>';
} else {
  header("location: logout.php");
}
?>
				</li>
                <li class="mode">
                <a href="#">
                    <i class="uil uil-moon"></i>
                <span class="link-name">Dark Mode</span>
            </a>

            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <!-- <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here..."> -->
                <form action="search.php" method="get">
        <i class="uil uil-search"></i>
        <input type="text" id="search" name="query" placeholder="Enter ID To Search">
        <button type="submit">Search</button>
    </form>
  
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>




                <div class="boxes">
                    <div class="box box1">
                    <i class="uil uil-book"></i>
                        <span class="text">Total Faculty</span>
                        <span class="number"> 
                        <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all faculty IDs from the table
            $sql = "SELECT id FROM faculty";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $totalFacultyIds = $result->num_rows;
            
                echo  $totalFacultyIds;
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
                             </span>
                        
                    </div>
                    <div class="box box2">
                    <i class="uil uil-user"></i> 
                        <span class="text">Total Students</span>
                        <span class="number">
                        <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all students IDs from the table
            $sql = "SELECT id FROM students";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $total = $result->num_rows;
            
                echo  $total . "<br>";
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
                        </span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-building"></i>
                        <span class="text">Institute</span>
                        <span class="number">

                        
                        <?php
            include "../config/database.php";
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to select all faculty IDs from the table
            "SELECT COUNT(*) as total FROM students WHERE institute = 'FCDSET'";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result) {
                // Get the number of rows (faculty IDs)
                $total = $result->num_rows;
            
                echo  $total;
            
                // Free the result set
                $result->free_result();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

?>
          

    <script src="script.js"></script>
    
</body>
</html>


