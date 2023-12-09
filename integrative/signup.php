<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
<div class="login-form">
         <div class="text">
            SIGNUP
         </div>


<form action="./controller/signup.controller.php" method="POST">

               <div class="field">
               <div class="fas fa-user"></div>
               <input type="text" name="username" placeholder="Enter Username">
             </div>


               <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="password" placeholder="Enter Password">
             </div>

               <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="confirmpass" placeholder="Confirm Password">
             </div>

               <div class="field">
               <div class="fas fa-envelope"></div>
               <input type="email" name="email" placeholder="Enter Email">
             </div>

             <button type="submit">REGISTER</button id="register">

<div>
<p>Already have an Account?</p><a href="login.php">Login here.</a>
</div>


</form>


</body>
</html>