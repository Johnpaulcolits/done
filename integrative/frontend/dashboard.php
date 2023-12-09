<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
       <link rel="stylesheet" href="dashboard.css">

</head>
<body>
    <h2>Welcome To Display Page</h2>
    <ul>
    <a href="maindash.php"><button>BACK TO DASHBOARD</button></a>



    </ul>
    


       

   <div id="horizontal-line"></div>
   <h2>Subject Output</h2>
   </form>
        
        <?php
include "../config/database.php";



// Check if the delete button is clicked
if (isset($_GET['delete_id'])) {
$id_to_delete = $_GET['delete_id'];

// Delete the record from the database
$query = "DELETE FROM subject WHERE code = '$id_to_delete'";
$result = mysqli_query($conn, $query);

// Check if the delete operation was successful
if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
}


$display ="SELECT * FROM subject";
$result = $conn->query($display);
if($result->num_rows > 0){
echo "<table border='1'>
<tr >
    <th>Code</th>
    <th>Description</th>
    <th>Unit</th>
    <th>Type</th>
    <th>Course</th>
    <th>Institute</th>
    <th>Action</th>

</tr>";
while($row = $result->fetch_assoc()){
    $id  = $row['code'];
         
    echo "<tr>
    <td>" . $row["code"]. "</td>
    <td>" . $row["description"]. "</td>
    <td>" . $row["unit"]. "</td>
    <td>" . $row["type"]. "</td>
    <td>" . $row["course"]. "</td>
    <td>" . $row["institute"]. "</td>
    <td><a href='?delete_id={$row['code']}'><button>Delete</button></a></td>

  


</tr>";
}
echo "</table>";
}else{
echo "0 results";
}




?>

<div id="horizontal-line"></div>
<h2>Faculty Output</h2>
<?php
include "../config/database.php";



// Check if the delete button is clicked
if (isset($_GET['delete_id'])) {
$id_to_delete = $_GET['delete_id'];

// Delete the record from the database
$query = "DELETE FROM faculty WHERE id = '$id_to_delete'";
$result = mysqli_query($conn, $query);

// Check if the delete operation was successful
if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
}


$display ="SELECT * FROM faculty";
$result = $conn->query($display);
if($result->num_rows > 0){
    echo "<table border='1'>
    <tr >
        <th>ID</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Institute</th>
        <th>Course</th>
        <th>Phone Number</th>
        <th>Delete</th>
      

    </tr>";
while($row = $result->fetch_assoc()){
    $id  = $row['id'];
         
    echo "<tr>
    <td>" . $row["id"]. "</td>
    <td>" . $row["lastname"]. "</td>
    <td>" . $row["firstname"]. "</td>
    <td>" . $row["middlename"]. "</td>
    <td>" . $row["dbirth"]. "</td>
    <td>" . $row["gender"]. "</td>
    <td>" . $row["institute"]. "</td>
    <td>" . $row["course"]. "</td>
    <td>" . $row["number"]. "</td>
    <td><a href='?delete_id={$row['id']}'><button>Delete</button></a></td>
     
  
  


</tr>";

}
echo "</table>";
}else{
echo "0 results";
}




?>


<div id="horizontal-line"></div>
<div id="horizontal-line"></div>
<h2>Student Output</h2>
<?php
include "../config/database.php";



// Check if the delete button is clicked
if (isset($_GET['delete_id'])) {
$id_to_delete = $_GET['delete_id'];

// Delete the record from the database
$query = "DELETE FROM students WHERE id = '$id_to_delete'";
$result = mysqli_query($conn, $query);

// Check if the delete operation was successful
if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
}


$display ="SELECT * FROM students";
$result = $conn->query($display);
if($result->num_rows > 0){
    echo "<table border='1'>
    <tr >
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Middlename</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Province</th>
        <th>Municipality</th>
        <th>Barangay</th>
        <th>Zipcode</th>
        <th>Phone Number</th>
        <th>Institute</th>
        <th>Course</th>
        <th>Guardian Name</th>
        <th>Guardian Number</th>
        <th>Address</th>
        <th>Delete</th>
       
      

    </tr>";
while($row = $result->fetch_assoc()){
    $id  = $row['id'];
         
    echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["firstname"]. "</td>
        <td>" . $row["lastname"]. "</td>
        <td>" . $row["middlename"]. "</td>
        <td>" . $row["dbirth"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["province"]. "</td>
        <td>" . $row["municipality"]. "</td>
        <td>" . $row["barangay"]. "</td>
        <td>" . $row["zipcode"]. "</td>
        <td>" . $row["number"]. "</td>
        <td>" . $row["institute"]. "</td>
        <td>" . $row["course"]. "</td>
        <td>" . $row["gname"]. "</td>
        <td>" . $row["gnumber"]. "</td>
        <td>" . $row["address"]. "</td>
        <td><a href='?delete_id={$row['id']}'><button>Delete</button></a></td>
      
     
      
 

    </tr>";

}
echo "</table>";
}else{
echo "0 results";
}




?>



</body>
</html>