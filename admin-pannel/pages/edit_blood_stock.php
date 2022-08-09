<?php
      if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
        unset($_POST['submit']);
        $obj->update('tbl_bloodstock',$_POST,'sid',array($_GET['sid']));
        header('Location:display_bloodstock.php');
    }

    $singleData = $obj->select('tbl_bloodstock','*','sid',array($_GET['sid']));
    // print_r($singleData);


?>


<div class="content-header">
      <div class="container-fluid">
        <div class="col-md-4">
        <h2>Edit stock Details</h2>
         
        <h2><i class="fas fa-user"></i>BLOOD STOCK</h2><hr>
      <form action="" method="POST" class="form-group">

      <div class="form-group">
        <label for="">Blood group</label>
        <select name="bid" id="" class="form-control">
            <option selected disabled>Select BloodGroup</option>
            <?php
            $blood = $obj->select('tbl_bloodgroup');
            foreach($blood as $key => $value){ ?>
            <option value="<?=$value['bid'];?>"
            <?php
              if($value['bid'] == $singleData[0]['bid']) {echo "selected";}
            ?>
            ><?=$value['bloodgroup'];?></option>
           <?php  }
            
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">STOCK/Amount</label>
        <input name="stock" type="text" class="form-control" value="<?=$singleData[0]['stock'];?>">
    </div>
    
    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="update">Submit</button>
   </div>
    

    
    </div>
</form>