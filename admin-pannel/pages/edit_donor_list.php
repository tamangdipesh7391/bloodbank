<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
        unset($_POST['submit']);
        $obj->update('tbl_donor_list',$_POST,'dlid',array($_GET['dlid']));
        header('Location:display_donor_list.php');
    }

    $singleData = $obj->select('tbl_donor_list','*','dlid',array($_GET['dlid']));
    // print_r($singleData);

?>
    
    
    
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-5">
    <h2>Edit Donor Details</h2>

      <form action="" method="post" class="form-group">

      <div class="form-group">
        <label for="">Donor_Register</label>
        <select name="did" id="" class="form-control">
            <option selected disabled>Select Donor Name</option>
            <?php
            $donors = $obj->select('tbl_donor_register');
            foreach($donors as $key => $value){ ?>
            <option value="<?=$value['did'];?>" 
            <?php 

                if($value['did'] == $singleData[0]['did']) {echo "selected";}
            ?>
            
            ><?=$value['name'];?></option>
           <?php  }
            
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">DATE</label>
        <input name="date" type="date" class="form-control" value="<?=$singleData[0]['date'];?>">
    </div>

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
        <label for="">Amount</label>
        <input name="amount" type="text" class="form-control" value="<?=$singleData[0]['amount'];?>">
    </div>

    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="update">Submit</button>
</div>
    </div>
</form>




      </div><!-- /.container-fluid -->
    </div>
    