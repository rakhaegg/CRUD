<?php
include 'connect.php';
if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];

     $sql = "insert into `crud` (name ,email , mobile , password) 
     values('$name' , '$email' , '$mobile' , '$password')";
    $result = mysqli_query($con , $sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container my-5"></div>
    
    <form method="post">
    <div class="form-group">
        <label>Name : </label>
            <input type="text" class="form-control" placeholder="Enter Your Name : " name="name" autocomplete="off">
    </div>  
    <div class="form-group">
        <label>Email : </label>
            <input type="email" class="form-control" placeholder="Enter Your Email : " name="email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Mobile : </label>
            <input type="text" class="form-control" placeholder="Enter Your Mobile : " name="mobile" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Password : </label>
            <input type="text" class="form-control" placeholder="Enter Your Passoword : " name="password">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  
</body>
</html>