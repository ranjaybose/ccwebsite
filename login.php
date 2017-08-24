<?php
    
    
    if(isset($_POST['login'])) {
   
$username = $_POST['username'];
$password = $_POST['password'];
}
    
    
$connection = mysqli_connect('localhost', 'root', '', 'users');    

//Database name = users. Table name = login
$query="INSERT INTO login(username,password)VALUES('$username','$password')";
   
$result=mysqli_query($connection,$query);

if(!$result){
    
    die('login failed'.mysqli_error());
}
    
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title><!--required bootstrap cdn links--> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
   
   <div class="container"><!--Page layout -->
   <div class="jumbotron">
   <h2>Sign into your account</h2>
   
   <form action="login.php" method="post">
   
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><!--mini icon on the left side of text box-->
      <input id="username" type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>  <br>
    <input class="btn btn-primary" type="submit" name="login" value="Login">
    
    
    
   </form>
   </div>
   </div>
    
</body>
</html>
