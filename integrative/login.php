<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    
</head>
<body> 
  
 <div class="login-form">
         <div class="text">
            LOGIN
         </div>
    <form action="./controller/login.controller.php" method="POST">
    <div class="field">
               <div class="fas fa-user"></div>
               <input type="text" name="username" placeholder="Username">
            </div>
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit">LOGIN</button>



    </form>
    <div class="link">
               Not a member yet?
    <a href="signup.php">Signup Now</a>
   
</body>
</html>