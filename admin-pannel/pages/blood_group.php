
<?php
  if(isset($_POST['submit']) && $_POST['submit'] == 'add_bloodgroup'){
    unset($_POST['submit']);
    $check = $obj->select('tbl_bloodgroup','*','bloodgroup',array($_POST['bloodgroup']));
    if(count($check) > 0){
        $_SESSION['error'] = "Blood Group is already added.";
        header('Location:blood_group.php');
    }
    $obj->Insert('tbl_bloodgroup',$_POST);
    header('Location:blood_group.php');
  }


?>

<div class="container">
 <div class="row">
 <div class="col-md-4">
  
  <h2><i class="fas fa-hand-holding-water"></i>Blood Group</h2><hr>
<?php if(isset($_SESSION['error'])){ ?>
    <div class="alert alert-danger">
    <?=$_SESSION['error'];?>
</div>
<?php } ?>
  <form action="" method="post" class="form-group" enctype="multipart/form-data">
<div class="form-group">
    <label>Group</label>
    <input type="text" name="bloodgroup" id="name" class="form-control">

<!-- <select name="name" class="form-control">
<option selected disabled>Please choose bloodgroup</option>
<option>A+</option>
<option>B+</option>
<option>AB+</option> -->

</select>
</div>



<div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="add_bloodgroup">Submit</button>
   </div>

</div>
</div>
</div>
</form>
