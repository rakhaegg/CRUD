<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from  `crud` where id=$id";
$result = mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $password = $_POST['password'];

     $sql = "update `crud` set id=$id , name = '$name' , email = '$email' , mobile = '$mobile' , password='$password' where id=$id " ;
    $result = mysqli_query($con , $sql);

    if($result){
        echo "Update Success";
        //header('location:display.php');
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
            <input type="text" class="form-control" placeholder="Enter Your Name : " name="name" autocomplete="off" 
            value=<?php echo $name; ?> >
    </div>  
    <div class="form-group">
        <label>Email : </label>
            <input type="email" class="form-control" placeholder="Enter Your Email : " name="email" autocomplete="off" 
            value=<?php echo $email; ?>>
    </div>
    <div class="form-group">
        <label>Mobile : </label>
            <input type="text" class="form-control" placeholder="Enter Your Mobile : " name="mobile" autocomplete="off"
            value=<?php echo $mobile; ?>>
    </div>
    <div class="form-group">
        <label>Password : </label>
            <input type="text" class="form-control" placeholder="Enter Your Passoword : " name="password"
            value=<?php echo $password; ?>>
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  
</body>
</html>