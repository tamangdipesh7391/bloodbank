<?php
require_once("config/config.php");
require_once("config/db.php");


if (!empty($_POST) && $_POST['submit'] == 'submit') {
  $username = $_POST['username'];
  $password = sha1($_POST['password']);
  // $_POST['password'] = sha1($_POST['password']);
  $user_select = $obj->Query("SELECT * FROM tbl_donor_login WHERE username='$username' and password='$password' AND status = 1");
  // print_r($user_select); die;

  if ($user_select) {
    $user_select = $user_select[0];
    session_start();
   
    $_SESSION['user_id'] = $user_select->did;
    $_SESSION['donor-status'] = "donor-status";

  // print_r($_SESSION); die;

    header('Location:' . base_url('/'));
  } else {
    $_SESSION['error'] = "Invalid username or password";
  }
}
?>

<link rel="stylesheet" href="<?= base_url('layouts/plugins/fontawesome-free/css/all.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('layouts/dist/css/bootstrap.css'); ?>">


<div class="container">
  <div class="row">
    <div class="col-md-5 m-auto">
      <div class="card text-dark border-danger mt-5" >
        <div class="card-header bg-danger text-light">
          <h2>Login Form</h2>
          <?php if(isset($_SESSION['error'])){ ?>
            
            <div class="alert alert-danger">
              <?=$_SESSION['error'];?>
            </div>
        <?php  }?>
        </div>
        <div class="card-body">
          <form action="" method="post" class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username">

            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            <button class="btn btn-danger mt-3" name="submit" value="submit">Login</button>
            Don't have an account?<a href="<?=base_url('register_donor.php');?>">Register Now</a>
          </form>
        </div>
      </div>





    </div>
  </div>
</div>


<?php
?>