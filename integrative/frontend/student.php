<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <h1>Welcome To Student Page</h1>
    <h2>Insert Here</h2>
<form action="../handler/student.handler.php" method="POST">    
<label for="">Id number:</label>
        <input type="text" name="id" placeholder="Enter Id Number">
      </br>
     <label for="">Firstname:</label>
     <input type="text" name="firstname" placeholder="Enter Firstname">
     </br>
     <label for="">Lastname :</label>
     <input type="text" name="lastname" placeholder="Enter Lastname">
     </br>
     <label for="">Middle Name :</label>
     <input type="text" name="middlename" placeholder="Enter Middle Name">
     </br>
     <label for="">Date of Birth :</label>
     <input type="date" name="dbirth" placeholder="Enter Date Of Birth">
     </br>
     <label for="">Gender :</label>
     <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
     </select>
     </br>
     <label for="">Home Address</label>
     
     <input type="text" name="province" placeholder="Enter Province">
     <input type="text" name="municipality" placeholder="Enter Municipality">
     <input type="text" name="barangay" placeholder="Enter Barangay">
     </br>
     <label for="">Zip Code</label>
     <input type="text" name="zipcode" placeholder="Enter Zipcode">
     </br>
     <label for="">Contact Num :</label>
     <input type="text" name="number" placeholder="Enter Contact Num"> 
     </br>
     <label for="">Institute :</label>
     <select name="institute" id="">
     </br>
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
     </br>
     <label for="">Course :</label>
     <select name="course" id="">
     </br>
     <?php
            include "../config/database.php";
            $qry = "SELECT * FROM course";

            $result = mysqli_query($conn,$qry);



          while($row = mysqli_fetch_assoc($result)){
                      $id = $row['course'];

         echo "  <option value='$id'>$id</option>";
                      
          }

            ?>
      </br>
    </select>
    </br>
<label for="">In-case of Emergency</label>
<input type="text" name="gname" placeholder="Enter Name of Guardian">
<input type="text" name="gnumber" placeholder="Enter Contact Number ">
<input type="text" name="address" placeholder="Enter Address">
</br>
<input type="submit" name="insertstudent">
    </form>

    <h2>Update Here</h2>
<form action="../handler/student.handler.php" method="POST">
    <label for="">Id number:</label>
       <select name="id" id="">
       <?php
$qry = "SELECT * FROM students";

$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    echo "  <option value='$id'>$id</option>";
                      
}

?>
       </select>
       </br>
     <label for="">Firstname:</label>
     <input type="text" name="firstname" placeholder="Enter Firstname">
     </br>
     <label for="">Lastname :</label>
     <input type="text" name="lastname" placeholder="Enter Lastname">
     </br>
     <label for="">Middle Name :</label>
     <input type="text" name="middlename" placeholder="Enter Middle Name">
     </br>
     <label for="">Date of Birth :</label>
     <input type="date" name="dbirth" placeholder="Enter Date Of Birth">
     </br>
     <label for="">Gender :</label>
     <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
     </select>
     </br>
     <label for="">Home Address</label>
     
     <input type="text" name="province" placeholder="Enter Province">
     <input type="text" name="municipality" placeholder="Enter Municipality">
     <input type="text" name="barangay" placeholder="Enter Barangay">
     </br>
     <label for="">Zip Code</label>
     <input type="text" name="zipcode" placeholder="Enter Zipcode">
     </br>
     <label for="">Contact Num :</label>
     <input type="text" name="number" placeholder="Enter Contact Num"> 
     </br>
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
     </br>
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
     </br>
<label for="">In-case of Emergency</label>
<input type="text" name="gname" placeholder="Enter Name of Guardian">
<input type="text" name="gnumber" placeholder="Enter Contact Number ">
<input type="text" name="address" placeholder="Enter Address">
</br>

<input type="submit" name="updatestudent">

    </form>

          </br>

    <a href="maindash.php"><button>BACK TO DASHBOARD</button></a>

</body>
</html>