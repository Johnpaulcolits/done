<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Year</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <h2>Insert Here</h2>
<form  action="../handler/schoolyear.handler.php" method="POST">
            <label for="schoolYear">School Year:</label>
            <input type="text"  name="year" required>

            <label for="semester">Semester:</label>
            <select  name="semester" required>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="summer">Summer</option>
            </select>

            <select name="status" id="">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
            </select>



            <input type="submit" value="Add School Year" name="submit">

           
        </form>
<h2>Update Here</h2>
<form  action="../handler/schoolyear.handler.php" method="POST">



<label for="schoolYear">ID:</label>
               <select name="id" id="" required>
            
<option value="">Select</option>
<?php
         include "../config/database.php";
$sel = "SELECT * FROM school_year";

$qry = mysqli_query($conn,$sel);

while($row = mysqli_fetch_assoc($qry)){


echo "<option >{$row['id']}</option>";
}

?>
               </select>
            <label for="schoolYear">School Year:</label>
             <input type="text" name="year" placeholder="Enter Year">

            <label for="semester">Semester:</label>
            <select  name="semester" required>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="summer">Summer</option>
            </select>

            <select name="status" id="">
                <option value="active">active</option>
                <option value="inactive">inactive</option>
            </select>



      
            <input type="submit" value="Update Schoo Year" name="updateyear">
           
        </form>
        <a href="maindash.php"><button>Back Here</button></a>
</body>
</html>

