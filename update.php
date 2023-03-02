<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id"; // value stored
  $result=mysqli_query($con,$sql); //for execute the above query 
  if($result){
    // echo "Data updated successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Crud Operators</h1>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Name" name="name"
                    autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Please Enter Your Email Address" name="email"
                    autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Please Enter Your Mobile Number" name="mobile"
                    autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Please Enter Your Password" name="password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>