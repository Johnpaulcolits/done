<?php

include "../config/database.php";
if(isset($_POST['insertstudent'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $dbirth = $_POST['dbirth'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
$municipality = $_POST['municipality'];
$barangay = $_POST['barangay'];
$zipcode = $_POST['zipcode'];
$number = $_POST['number'];
$institute = $_POST['institute'];
$course = $_POST['course'];
$gname = $_POST['gname'];
$gnumber = $_POST['gnumber'];
$address = $_POST['address'];



  $qry = "INSERT INTO students (id,firstname,lastname,middlename,dbirth,gender,province,
  municipality,barangay,zipcode,number,institute,course,gname,gnumber,address) VALUES ('$id', '$firstname', '$lastname', '$middlename', '$dbirth', '$gender', '$province', '$municipality', '$barangay', '$zipcode', '$number', '$institute', '$course', '$gname', '$gnumber', '$address')";

 


   

    if(empty($id) || empty($lastname) || empty($firstname) || empty($middlename) || empty($dbirth) || empty($zipcode) || empty($number) 
    || empty($gname) || empty($gnumber) || empty($address) || empty($province) || empty($municipality) || empty($barangay)) {
        echo '<script>
        window.location.href= "../frontend/student.php";
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
        }else{
            echo "WRONG";
                }
    }

}

if(isset($_POST['updatestudent'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $dbirth = $_POST['dbirth'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
$municipality = $_POST['municipality'];
$barangay = $_POST['barangay'];
$zipcode = $_POST['zipcode'];
$number = $_POST['number'];
$institute = $_POST['institute'];
$course = $_POST['course'];
$gname = $_POST['gname'];
$gnumber = $_POST['gnumber'];
$address = $_POST['address'];



  $qry = "UPDATE students SET firstname='$firstname', lastname='$lastname', middlename='$middlename', dbirth='$dbirth', gender='$gender', province='$province', municipality='$municipality', barangay='$barangay', zipcode='$zipcode', number='$number', institute='$institute', course='$course', gname='$gname', gnumber='$gnumber', address='$address' WHERE id='$id'";

 


   

    if(empty($id) || empty($lastname) || empty($firstname) || empty($middlename) || empty($dbirth) || empty($zipcode) || empty($number) 
    || empty($gname) || empty($gnumber) || empty($address)|| empty($province) || empty($municipality) || empty($barangay)) {
        echo '<script>
        window.location.href= "../frontend/student.php";
         alert("Some Text Field are Empty Please Fill In")
        </script>
        "';
    }else{
        $result = mysqli_query($conn,$qry);
        if($result){
            echo '<script>
            window.location.href= "../frontend/dashboard.php";
             alert("Update Successfuly")
            </script>
            "';
        }else{
            echo "WRONG";
                }
    }

}