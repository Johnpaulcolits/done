<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Grade</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}
select{
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
.center-text {
    text-align: center;
    font-size: 24px; /* Adjust the font size as needed */
    color: #333;
}
.classbutton {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 20px; /* Adjust as needed */
}

    </style>
</head>
<body>
  

   <?php              
   include "../config/database.php";
$qry = "    SELECT * FROM school_year ";


$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_assoc($result)){
    $id = $row['status'];
$year = $row['year'];
    $semester = $row['semester'];
              ?>
              
              <div class="center-text">
   
    </div>
    <?php
    if ($id == 'active') {
                  
?>
             
             <h2>Insert Grade</h2>
 <h2>Student Information Form</h2>
    
    <form action="../handler/grade.handler.php" method="post">

    <label for="">ID Number:
        <input type="text" name="id" placeholder="Enter ID Number">
    </label>
        <label for="name">Name:</label>
     <input type="text" name="name" placeholder="Enter Student Fullname" required>

        <label for="">Course:</label>
      
      <select name="course" id="">
        <option value="BSCE">BSCE</option>
        <option value="BSIT">BSIT</option>
        <option value="BSM">BSM</option>
        <option value="BITM">BITM</option>
      </select>

        <label for="">Section:</label>
      <input type="text" name="section" placeholder="Enter Section">

        <label for="">Year Level:</label>
        <!-- <input type="text" name="yearlevel" placeholder="Enter Year Level"> -->
      <select name="yearlevel" id="">
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
        <option value="4th Year">4th Year</option>
        <option value="5th Year">5th Year</option>
      </select>

        <label for="">Subject Code:</label>
      <input type="text" name="code" placeholder="Enter Subject Code">

        <label for="">Subject Description:</label>
      <input type="text" name="description" placeholder="Enter Subject Description">

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="grade">Grade:</label>
      <input type="text" name="grade" placeholder="Enter Student Grade">

        <button type="submit" name="insertgrade">Submit</button>
        
    </form>
  

             <?php


                 
                
                } 
                }
               


               ?>
            
                
                
<a href="grades.php"><button>Return To Grades</button></a>
        
</body>
</html>