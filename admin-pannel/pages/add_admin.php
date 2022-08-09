
<?php
  if(isset($_POST['submit']) && $_POST['submit'] == 'add'){
    unset($_POST['submit']);
    $obj->Insert('tbl_admin',$_POST);
  }


?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2><i class="fas fa-user"></i>ADMIN</h2><hr>

  <form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
  
    <label>Username</label>
    <input type="text" name="name" id="name" class="form-control">

    <label>Password</label>
    <input type="password" name="password" id="password" class="form-control">

    <!-- <label>role</label>
    <input type="text" name="role" id="role" class="form-control"> -->

    <label>status</label>
    <input type="text" name="role" id="role" class="form-control">
<br>
    <div class="form-group">
     <button type="submit" class="btn btn-success" value="add">Submit</button>

</div>
</div>
</div>
</div>
</form>
</body>
</html>