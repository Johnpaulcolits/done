<?php
include "../config/database.php";
if($_SERVER['REQUEST_METHOD'] = "POST"){
    if(isset($_POST['submit'])){

        $year = $_POST['year'];
        $semester =$_POST['semester'];
        $status = $_POST['status'];
    
        $sql = "INSERT INTO school_year(year,semester,status) VALUES('$year', '$semester', '$status')";
    
    
        $result = mysqli_query($conn,$sql);
    
    
    
        if($result){
         echo '<script>
         window.location.href="../frontend/school_year.php";
         alert("Successfully Added ")
         </script>';
        }else{
            echo "Mali";
        }
    
        }


        if(isset($_POST['updateyear'])){
            $id = $_POST['id'];
            $year = $_POST['year'];
            $semester =$_POST['semester'];
            $status = $_POST['status'];



      $qry  ="UPDATE school_year SET  year='$year',semester='$semester', status='$status' WHERE id='$id' ";

$result = mysqli_query($conn,$qry);


if($result){
    echo '<script>
    window.location.href="../frontend/school_year.php";
    alert("Successfully Updated ")
    </script>';
}

        }



}












?>