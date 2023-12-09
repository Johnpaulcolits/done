<?php

include "../config/database.php";

// Process the search query
if (isset($_GET['query'])) {
$searchQuery = $_GET['query'];

// Use the search query in your SQL query
$sql = "SELECT * FROM students WHERE id LIKE '%$searchQuery%'";
$result = $conn->query($sql);

// Display search results

if(empty($searchQuery)){
echo '<script>
window.location.href= "faculty.php";
alert("Text Field Is Empty.")
</script>
"';
}else{
if ($result->num_rows > 0) {
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
     
  </tr>";
  while ($row = $result->fetch_assoc()) {
      // Output or format the search results as needed
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
    
    


  </tr>";
 
  }
} else {
  echo '<script>
  window.location.href= "maindash.php";
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
<a href="maindash.php"><button>Back To Main Page</button></a>