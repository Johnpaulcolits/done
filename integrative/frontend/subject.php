<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Page</title>
    <link rel="stylesheet" href="student.css">

</head>
<body>
    <h1>Welcome to Subject Page</h1>
    <h2>Insert Here</h2>
    <div>
        <form action="../handler/subject.handler.php" method="POST">
            <label for="">Code</label>
            <input type="text" name="code" placeholder="Enter Code">

            <label for="">Description</label>
            <input type="text" name="description" placeholder="Enter Description">
            
            <label for="">Unit</label>
          
            <input type="text" name="unit" placeholder="Enter Unit">

            <label for="">Type</label>
        <input type="text" name="type" placeholder="Enter Type">

            <label for="">Course</label>
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

              <label for="">Institute</label>
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
              <input type="submit" name="insertsubject">
        </form>
    </div>
<h2>Update Here</h2>
    <div>
    <form action="../handler/subject.handler.php" method="POST">
            <label for="">Code</label>
          <select name="code" id="">
            <?php
$qry = "SELECT * FROM subject";

$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_assoc($result)){
    $id = $row['code'];
    echo "  <option value='$id'>$id</option>";
                      
}

?>
          </select>

            <label for="">Description</label>
            <input type="text" name="description" placeholder="Enter Description">
            
            <label for="">Unit</label>
          
            <input type="text" name="unit" placeholder="Enter Unit">

            <label for="">Type</label>
        <input type="text" name="type" placeholder="Enter Type">

            <label for="">Course</label>
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

              <label for="">Institute</label>
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
              <input type="submit" name="updatesubject">
        </form>
    </div>

    <a href="maindash.php"><button>BACK TO DASHBOARD</button></a>
</body>
</html>