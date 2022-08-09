<?php
require_once("config/config.php");
require_once("config/db.php");


if (!empty($_POST) && $_POST['submit'] == 'submit') {
    if(isset($_POST['did'])){
        $check = $obj->select('tbl_donor_login','*','did',array($_POST['did']));
        if($check){
            $_SESSION['error'] = "User already registered";


        }else{
            unset($_POST['submit']);
            $_POST['password'] = sha1($_POST['password']);
            $obj->insert('tbl_donor_login',$_POST);
            header('Location:' . base_url('login'));
        }
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
        <div class="form-group">
        <form action="" method="post" class="form-group" onsubmit="return validate();">
            <label for="">Select Your User Name</label>
            <?php $donors = $obj->select('tbl_donor_register','*'); ?>
           <select name="did" id="" class="form-control">
           <?php foreach($donors as $donor){ ?>
                <option value="<?=$donor['did'];?>"><?=$donor['name'];?></option>
            <?php } ?>
           </select>
        </div>
          <div class="form-group">
          <label for="">Username</label>
            <input type="text" class="form-control" required name="username" id="username">
            <p id="username_error"></p>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" required name="password" id="password">
            <a id="password_error"></a>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" required name="" id="c_password">
            
          </div>
            <div class="form-group">
                
            <button id="submit_btn" type="submit" class="btn btn-danger mt-3" name="submit" value="submit">Login</button>
            Don't have an account?<a href="<?=base_url('register_donor.php');?>">Register Now</a>
            </div>
          </form>
        </div>
      </div>





    </div>
  </div>
</div>
<script>
  function validate(){
    let username =  document.getElementById('username').value;
    let pass =  document.getElementById('password').value;
    let cpass =  document.getElementById('c_password').value;
    // if(username == ''){
    // document.getElementById('username_error').value = "title required";
    //     return false;
    // }
    // if(pass == ''){
    // document.getElementById('password_error').value = "password required";
    //     return false;
    // }
    // if(cpass == ''){
    // document.getElementById('password_error').value = "title required";
    //     return false;
    // }
    if(pass != cpass){
        document.getElementById('password_error').value = "password not matched";
        return false;
    }
  }
</script>

<?php
?>