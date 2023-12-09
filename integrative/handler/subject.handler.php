<?php

include "../config/database.php";
if(isset($_POST['insertsubject'])){

    $code = $_POST['code'];   
    $description = $_POST['description'];  
    $unit = $_POST['unit'];  
    $type = $_POST['type'];  
    $course = $_POST['course'];  
    $institute = $_POST['institute'];  


  $qry = "INSERT INTO subject (code,description, unit, type,course ,institute) VALUES ('$code', '$description', '$unit', '$type', '$course', '$institute')";

 


   

    if(empty($code) ||empty($description) || empty($unit) || empty($type)) {
        echo '<script>
        window.location.href= "../frontend/subject.php";
         alert("Some Text Field are Empty Please Fill In")
        </script>
        "';
    }else{
        $result = mysqli_query($conn,$qry);
        if($result){
            echo '<script>
            window.location.href= "../frontend/maindash.php";
             alert("Added Successfuly")
            </script>
            "';
        }
    }

}







if(isset($_POST['updatesubject'])){
    $code = $_POST['code'];   
    $description = $_POST['description'];  
    $unit = $_POST['unit'];  
    $type = $_POST['type'];  
    $course = $_POST['course'];  
    $institute = $_POST['institute'];  


    $qry = "UPDATE subject SET description='$description',unit='$course',type='$type',course='$course',institute='$institute' WHERE code='$code'";


    $result = mysqli_query($conn,$qry);
    if(empty($code) || empty($description) || empty($unit) || empty($type)){
        echo '<script>
        window.location.href= "../frontend/subject.php";
         alert("Some Text Field are Empty Please Fill In")
        </script>
        "';
    }else{
        if($result){
            echo '<script>
            window.location.href= "../frontend/dashboard.php";
             alert("Updated Successfuly")
            </script>
            "';        
        }
    }
}





?>