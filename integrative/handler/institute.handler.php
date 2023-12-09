<?php

include "../config/database.php";
if($_SERVER['REQUEST_METHOD'] ="POST"){

    if(isset($_POST['assfaculty'])){
        $id = $_POST['id'];
        $subject = $_POST['subject'];

$qry = "UPDATE faculty SET subject='$subject' WHERE id='$id' ";

$result = mysqli_query($conn,$qry);

if($result){
    echo '<script>
    window.location.href="../frontend/grade.php";
    alert("Successfully Assigned ")
    </script>';
}else{  
echo "Di pa";
}

    }


    if(isset($_POST['assstudent'])){
        $lastname = $_POST['lastname'];
        $student = $_POST['student'];

        $qry = "UPDATE faculty SET student='$student' WHERE lastname='$lastname' ";
        $result = mysqli_query($conn,$qry);

        if($result){
            echo '<script>
            window.location.href="../frontend/grade.php";
            alert("Successfully Assigned ")
            </script>';
        }else{
            echo "Wala pa";
        }


    }
}






?>