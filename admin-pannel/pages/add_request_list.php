<?php
  $bloodrequest = $obj->select('tbl_request_register');
      if(isset($_POST['submit']) && $_POST['submit'] == 'add_request'){
        unset($_POST['submit']);
        $obj->Insert('tbl_request_list',$_POST);
    }
  ?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-5">


      <form action="" method="POST" class="form-group">

      <div class="form-group">
      
        <label for="">Request_register</label>
       <select name="rid" id="person"  class="form-control my-select2">
            <option selected disabled>Select Name</option>
            <?php
          

            foreach($bloodrequest as $key => $value){ ?>
            <option value="<?=$value['rid'];?>"><?=$value['name'];?> 
          (
          <?php 
          
          $blood = $obj->select('tbl_bloodgroup','*','bid',array($value['bid']));
          echo $blood[0]['bloodgroup'];
          ?>)

          <?php $check = $obj->select('tbl_request_list','*','rid',array($value['rid']));
          
          if($check){ ?>
          -R
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

    <!-- <div class="form-group">
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

    <div class="form-group" id="stock">
        <label for="">Amount</label>
        <input name="amount" type="text"  class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="add_request">Submit</button>
   </div>
    </div>
</form>




      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script>
  $(document).ready(function(){
    $('#person').on('change',function(){
      var val = $('#person').val();
      console.log(val)
      $.ajax({
        type:'POST',
        data:{pid:val},
        url:"ajax.php?action=getStockBlood",
        success:function(res){
          $('#stock').html(res);
          console.log(res)
        }
      })
    })
  });
</script>