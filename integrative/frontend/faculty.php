<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
<h1>Welcome to Faculty Page</h1>
    <h2>Add Here</h2>
<div class="container">
    <form action="../handler/faculty.handler.php" method="POST">
        <label for="">Id number:</label>
        <input type="text" name="id" placeholder="Enter Id Number">
     <label for="">Lastname :</label>
     <input type="text" name="lastname" placeholder="Enter Lastname">
     <label for="">Firstname :</label>
     <input type="text" name="firstname" placeholder="Enter Firstname">
     <label for="">Middle Name :</label>
     <input type="text" name="middlename" placeholder="Enter Middle Name">
     <label for="">Date of Birth :</label>
     <input type="date" name="dbirth" placeholder="Enter Date Of Birth">
     <label for="">Gender :</label>
     <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
     </select>
     <label for="">Institute :</label>
     <select name="institute" id="">
     <?php
            include "../config/database.php";
            $qry = "SELECT * FROM institutes";

            $result = mysqli_query($conn,$qry);



          while($row = mysqli_fetch_assoc($result)){
                      $id = $row['institute'];

         echo "  <option value='$id'>$id</option>";
                      
          }

            ?>
     </select>
     <label for="">Course :</label>
     <select name="course" id="">
             <?php


include "../config/database.php";
$qry = "SELECT * FROM course";

$result = mysqli_query($conn,$qry);



while($row = mysqli_fetch_assoc($result)){
          $id = $row['course'];

echo "  <option value='$id'>$id</option>";
          
}

?>

     </select>
     <label for="">Contact Num :</label>
     <input type="text" name="number" placeholder="Enter Contact Num"> 
     <input type="submit" name="insertfaculty">


    </form>
    </div>
    <h2>Update Here</h2>
    
<div class="container">
<form action="../handler/faculty.handler.php" method="POST">
        <label for="">Id number:</label>
     <select name="id" id="">
     <?php
  
  $qry = "SELECT * FROM faculty";
  
  $result = mysqli_query($conn,$qry);
  
  while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      echo "  <option value='$id'>$id</option>";
                        
  }
  
  
       ?>
     </select>
     <label for="">Lastname :</label>
     <input type="text" name="lastname" placeholder="Enter Lastname">
     <label for="">Firstname :</label>
     <input type="text" name="firstname" placeholder="Enter Firstname">
     <label for="">Middle Name :</label>
     <input type="text" name="middlename" placeholder="Enter Middle Name">
     <label for="">Date of Birth :</label>
     <input type="date" name="dbirth" placeholder="Enter Date Of Birth">
     <label for="">Gender :</label>
     <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
     </select>
     <label for="">Institute :</label>
     <select name="institute" id="">
     <?php
            include "../config/database.php";
            $qry = "SELECT * FROM institutes";

            $result = mysqli_query($conn,$qry);



          while($row = mysqli_fetch_assoc($result)){
                      $id = $row['institute'];

         echo "  <option value='$id'>$id</option>";
                      
          }

            ?>
     </select>
     <label for="">Course :</label>
     <select name="course" id="">
             <?php


include "../config/database.php";
$qry = "SELECT * FROM course";

$result = mysqli_query($conn,$qry);



while($row = mysqli_fetch_assoc($result)){
          $id = $row['course'];

echo "  <option value='$id'>$id</option>";
          
}

?>

     </select>
     <label for="">Contact Num :</label>
     <input type="text" name="number" placeholder="Enter Contact Num"> 
     <input type="submit" name="updatefaculty">


    </form>
    </div>
    <a href="maindash.php"><button>BACK TO DASHBOARD</button></a>
</body>
</html>