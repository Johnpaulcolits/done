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
    <a href="download.php"><button>Download Here</button></a>
<form action="report.php" method="get">
        <i class="uil uil-search"></i>
        <input type="text" id="search" name="query" placeholder="Enter ID To Search">
        <button type="submit">Search</button>
    </form>


    <?php

include "../config/database.php";

// Process the search query
if (isset($_GET['query'])) {
$searchQuery = $_GET['query'];

// Use the search query in your SQL query
$sql = "SELECT * FROM grades WHERE id LIKE '%$searchQuery%'";
$result = $conn->query($sql);

// Display search results

if(empty($searchQuery)){
echo '<script>
window.location.href= "report.php";
alert("Text Field Is Empty.")
</script>
"';
}else{
if ($result->num_rows > 0) {
  echo "<table border='1'>
  <tr >
      <th>ID</th>
      <th>FullName</th>
      <th>Course</th>
      <th>Section</th>
      <th>Year Level</th>
      <th>Subject Code</th>
      <th>Subject Description</th>
      <th>Time</th>
      <th>Grade</th>
      <th>Remarks</th>

     
  </tr>";
  while ($row = $result->fetch_assoc()) {
      // Output or format the search results as needed
         // Determine the remarks based on the grade
    if ($row['grade'] == 1 || $row['grade'] == 1.25 || $row['grade'] == 1.75) {
        $remarks = "Pass";
    }elseif($row['grade'] == 2 || $row['grade'] == 2.25 || $row['grade'] == 2.75){
        $remarks = "Pass";
    }elseif($row['grade'] == 3){
        $remarks = "Pass";
    }elseif($row['grade'] == 4){
        $remarks = "Need To Have A Exam";
    }
    else {
        $remarks = "Fail";
    }

      echo "<tr>
      <td>" . $row["id"]. "</td>
          <td>" . $row["name"]. "</td>
      <td>" . $row["course"]. "</td>
      <td>" . $row["section"]. "</td>
      <td>" . $row["year"]. "</td>
      <td>" . $row["code"]. "</td>
      <td>" . $row["description"]. "</td>
      <td>" . $row["time"]. "</td>
      <td>" . $row["grade"]. "</td>
      <td>$remarks</td>
    
    


  </tr>";
 
  }
} else {
  echo '<script>
  window.location.href= "report.php";
   alert("The Id Number Did Not Exist.")
 </script>
  "';
}
}
// Free the result set
$result->free_result();
}

// Close the database connection
$conn->close();
?>

</div>
</div>



</body>
</html>
