<?php

include "../config/database.php";
if(isset($_POST['insertfaculty'])){

    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $dbirth = $_POST['dbirth'];
    $gender = $_POST['gender'];
    $institute = $_POST['institute'];
    $course = $_POST['course'];
    $number = $_POST['number'];


   $qry =  "INSERT INTO faculty (id,lastname, firstname, middlename, dbirth,gender,institute,course,number) VALUES ('$id', '$lastname', '$firstname', '$middlename', '$dbirth', '$gender', '$institute', '$course', '$number')";

 


   

    if(empty($id) || empty($lastname) || empty($firstname) || empty($middlename) || empty($dbirth) || empty($number)) {
        echo '<script>
        window.location.href= "../frontend/faculty.php";
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







if(isset($_POST['updatefaculty'])){
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $dbirth = $_POST['dbirth'];
    $gender = $_POST['gender'];
    $institute = $_POST['institute'];
    $course = $_POST['course'];
    $number = $_POST['number']; 


   $qry= "UPDATE faculty SET lastname='$lastname', firstname='$firstname', middlename='$middlename', dbirth='$dbirth' , gender='$gender' , institute='$institute', course='$course', number='$number'    WHERE id='$id'";


    $result = mysqli_query($conn,$qry);
    if(empty($id) || empty($lastname) || empty($firstname) || empty($middlename) || empty($dbirth) || empty($number)){
        echo '<script>
        window.location.href= "../frontend/faculty.php";
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