<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == 'add_donor'){
        unset($_POST['submit']);
        $obj->Insert('tbl_donor_list',$_POST);
    }

?>
    
    
    
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-5">


      <form action="" method="post" class="form-group">

      <div class="form-group">
        <label for="">Donor_Register</label>
        <select name="did" id="" class="form-control my-select2">
            <option selected disabled>Select Donor Name</option>
            <?php
            $donors = $obj->select('tbl_donor_register');
            foreach($donors as $key => $value){ ?>
            <option value="<?=$value['did'];?>"><?=$value['name'];?>
        
        
            (
          <?php 
          
          $blood = $obj->select('tbl_bloodgroup','*','bid',array($value['bid']));
          echo $blood[0]['bloodgroup'];
          ?>)

          <?php $check = $obj->select('tbl_donor_list','*','did',array($value['did']));
          
          if($check){ ?>
          -D
        <?php  }
          ?>
        
        </option>
           <?php  }
            
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">DATE</label>
        <input name="date" type="date" class="form-control">
    </div>
<!-- 
    <div class="form-group">
        <label for="">Blood group</label>
        <select name="bid" id="" class="form-control">
            <option selected disabled>Select BloodGroup</option>
            <?php
            $blood = $obj->select('tbl_bloodgroup');
            foreach($blood as $key => $value){ ?>
            <option value="<?=$value['bid'];?>"><?=$value['bloodgroup'];?></option>
           <?php  }
            
            ?>
        </select>
    </div> -->

    <div class="form-group">
        <label for="">Amount</label>
        <input name="amount" type="text" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="add_donor">Submit</button>
</div>
    </div>
</form>




      </div><!-- /.container-fluid -->
    </div>
    