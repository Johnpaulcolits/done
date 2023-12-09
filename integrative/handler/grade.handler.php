<?php
include "../config/database.php";
if($_SERVER['REQUEST_METHOD'] ="POST"){
if(isset($_POST['insertgrade'])){
$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$section = $_POST['section'];
$year= $_POST['yearlevel'];
$code = $_POST['code'];
$description = $_POST['description'];
$time = $_POST['time'];
$grade = $_POST['grade'];




$sql = "SELECT * FROM grades WHERE id='$id'";

$res= mysqli_query($conn,$sql);
if($res){
    echo '<script>
    window.location.href="../faculty/entergrade.php";
    alert("This ID Is Already Taken")
    </script>';

}else{
   
    $qry = "INSERT INTO grades (id, name, course, section, year, code, description, time, grade)
VALUES ('$id','$name', '$course', '$section', '$year', '$code', '$description', '$time', '$grade')";

$result = mysqli_query($conn,$qry);
if($result){
    echo '<script>
    window.location.href="../faculty/entergrade.php";
    alert("Grade Inserted Successfully!")
    </script>';
}
   
}

}
}
















?>