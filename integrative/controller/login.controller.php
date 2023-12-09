<?php
include "../config/database.php";
include "../model/login.model.php";
// include "";


class UserController {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new UserModel($dbConnection);
    }



    public function handleRequest() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            

        
            $user = $this->userModel->verifyUser($username, $password);

        


            if ($user  ) {
                $_SESSION['username'] = $username;
                // echo 'Login successful! Welcome ' . $user['username'];
              header("location: ../user/userdash.php");
                        } else {
                            echo '<script>
                            window.location.href= "../login.php";
                             alert("Invalid Username Or Password!!")
                            </script>
                            "';
            }

            

           
        } 
    }

    public function handleAdmin(){
        session_start();
        if($_SERVER['REQUEST_METHOD'] =="POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];


            $admin = $this->userModel->verifyAdmin($username,$password);

            $row = mysqli_fetch_array($admin);

            if ($row["usertype"]=="admin"   ) {
                $_SESSION['username']=$username;
                // echo 'Login successful! Welcome ' . $user['username'];
              header("location:../frontend/maindash.php");
                        } else {
                            echo '<script>
                            window.location.href= "../login.php";
                             alert("Invalid Username Or Password!!")
                            </script>
                            "';
            }


        }
    }

    
    public function handleFaculty(){


        session_start();
        if($_SERVER['REQUEST_METHOD'] = "POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];


        // $faculty = $this->userModel->verifyFaculty($username,$password);
          $faculty = $this->userModel->verifyFaculty($username,$password);
            $row = mysqli_fetch_array($faculty);

            
            if ($row["usertype"]=="faculty"   ) {
                $_SESSION["username"] = $username;
                // echo 'Login successful! Welcome ' . $user['username'];
           header("location: ../faculty/dashboard.php");
                        } else {
                            echo '<script>
                            window.location.href= "../login.php";
                             alert("Invalid Username Or Password!!")
                            </script>
                            "';
            }


        }
    }

 

    
    

}

    
$usercontroller = new UserController($conn);
$usercontroller->handleRequest();
$usercontroller->handleAdmin();
$usercontroller->handleFaculty();

// class AdminController{
  

// public function getAdmin(){
//     if($_SERVER["REQUEST_METHOD"]=="POST"){
//         $username =$_POST["username"];
//         $password =$_POST["password"];
        
        
//         $sql="select * from login where username = '" .$username."' and  password = '" .$password."'";
        
        
//         $result=mysqli_query($conn,$sql);
        
//         $row = mysqli_fetch_array($result);;
        
        
//         //admin
//         if($row["usertype"]=="admin"  ){
//             $_SESSION["username"]=$username;
        
//             header("location: ../view/admin.php");
        
        
        
        
        
        
//         }elseif($row["usertype"]=="user"){
//             $_SESSION["username"]=$username;
//             header("location: ../view/users.php");
        
        
//         }else{
//             echo '<script>
//             window.location.href= "login.php";
//              alert("Login Failed. Invalid Username or password!!!!")
//             </script>
//             "';
//         }
        
        
        
        
        
//         }
// }
// }



// $usercontroller = new UserController($conn);
// $usercontroller->handleRequest();
// $usercontroller->handleAdmin();











    

?>

