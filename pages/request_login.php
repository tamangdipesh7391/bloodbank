<section class="breadcrumbs">
<div class="container">

  <div class="d-flex justify-content-between align-items-center">
    <h2>REQUEST LOGIN</h2>
    <ol>
      <li><a href="index.html">Home</a></li>
      
    </ol>
  </div>

</div>
</section><!-- End Breadcrumbs -->
<?php  
if(isset($_POST['submit']) && $_POST['submit'] =='login'){
    $name = $_POST['username'];
    $pass = md5($_POST['password']);
    $res = $obj->Query("SELECT * FROM tbl_request_register WHERE email = '$name' AND password = '$pass'");
    $res = mysqli_fetch_assoc($res);
    // echo $res['cid'];

    if($res){
session_start();

        $_SESSION['user_access'] = "true";
        $_SESSION['user_id'] = $res['rid'];
        header("location:order.php");
    }else{
        echo "<script>alert('Invalid username or password')</script>";
    }
}



?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
</head>
<body>
    <div class="container">
        <div class="row">
        <!-- <h1><a href="index.php">GO to main site</a></h1> -->

            <div class="col-md-6 offset-md-3" style="height:100vh">
                <h2>Login Here</h2>
                <form action="" method="post">
                    <label for="Username">Username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="Username">Password</label>
                    <input type="password" name="password" class="form-control">
                    <button type="submit" name="submit" value="login" class="mt-2 btn btn-primary">Login</button>
                    <hr>
                    Don't have an  account <a href="request_register.php">Sign Up here</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html