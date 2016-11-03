<?php
session_start();
/*ob_start();*/
?>


<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 200px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}
</style>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  if (isset($_SESSION["authorized"]))
  {
     session_destroy();
     header("Location: http://tsuts.tskoli.is/2t/0802992579/cookies/logout.html");
        ob_end_flush();
        exit;
  }
  else 
  {
     if( isset($_POST['username'])){
       if ($_POST["username"] == "admin" && $_POST["password"] == "password") {
          $_SESSION["authorized"] = true;
          session_regenerate_id();
       }
     }
  }
}

?>


<h2>Login Form</h2>
Username: admin Password:password<br>
<form action="login.php" method="post">
  <div class="container">   
    <?php
       /*print_r($_SESSION);*/
 
      if( isset($_SESSION["authorized"]) ){
           echo "<button type='submit'>Logout</button>";
          }
       else{
            echo "<label><b>Username</b></label>";
    	    echo "<input type='text' placeholder='Enter Username' name='username' required><br>";
            echo "<label><b>Password</b></label>";
            echo "<input type='password' placeholder='Enter Password' name='password' required><br>";
            echo "<button type='submit'>Login</button>";
          }
     ?>
    
   </div>
</form>
<?php /*ob_end_flush();*/ ?>
</body>
</html>