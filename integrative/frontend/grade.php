<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute Page</title>
    <link rel="stylesheet" href="student.css">

</head>
<body>
<h2>Assign Subject Here</h2>
           <form action="../handler/institute.handler.php" method="POST">
                   <label for="">Choose Faculty:</label>
                   <select name="id" id="">
                    
                    <?php
                    include "../config/database.php";
                    $qry ="SELECT * FROM faculty";
                    $result = mysqli_query($conn,$qry);

                    while($row = mysqli_fetch_assoc($result)){
                             $id = $row;

                      echo "<option >{$id['id']}</option>";
                    }
              $qry 
              
?>

                   </select>
<label for="">Choose Subject</label>
                   <select name="subject" id="">
                   <?php
                    include "../config/database.php";
                    $qry ="SELECT * FROM subject";
                    $result = mysqli_query($conn,$qry);

                    while($row = mysqli_fetch_assoc($result)){
                             $id = $row;

                      echo "<option >{$id['code']} {$id['description']}</option>";
                    }
              $qry 
              
?>
                   </select>

                   <input type="submit" name="assfaculty">
           </form>
           <h2>Assign Student Here</h2>
           <form action="../handler/institute.handler.php" method="POST"> 
            <label for="">Choose Faculty Assigned Subject Here:</label>
            <select name="lastname" id="">
            <?php
                    include "../config/database.php";
                    $qry ="SELECT * FROM faculty";
                    $result = mysqli_query($conn,$qry);

                    while($row = mysqli_fetch_assoc($result)){
                             $id = $row;

                      echo "<option >{$id['lastname']}</option>";
                    }
              $qry 
              
?>
            </select>
            <label for="">Choose Student</label>
            <select name="student" id="">
            <?php
                    include "../config/database.php";
                    $qry ="SELECT * FROM students";
                    $result = mysqli_query($conn,$qry);

                    while($row = mysqli_fetch_assoc($result)){
                             $id = $row;

                      echo "<option >{$id['id']}{$id['lastname']}{$id['firstname']}</option>";
                    }
              $qry 
              
?>
            </select>

            <input type="submit" name="assstudent">
           </form>
           <a href="maindash.php"><button>BACK TO DASHBOARD</button></a>
</body>
</html>