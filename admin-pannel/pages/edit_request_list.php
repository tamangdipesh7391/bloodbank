<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
        unset($_POST['submit']);
        $obj->update('tbl_request_list',$_POST,'rlid',array($_GET['rlid']));
        header('Location:display_request_list.php');
    }
    $singleData = $obj->select('tbl_request_list','*','rlid',array($_GET['rlid']));
    // print_r($singleData);
  ?>
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-5">
        <h2>Edit request Details</h2>

      <form action="" method="POST" class="form-group">

      <div class="form-group">
        <label for="">Request_register</label>
       <select name="rid" id=""  class="form-control">
            <option selected disabled>Select Name</option>
            <?php
            $bloodrequest = $obj->select('tbl_request_register');
            foreach($bloodrequest as $key => $value){ ?>
            <option value="<?=$value['rid'];?>"
            <?php
                    if($value['rid'] == $singleData[0]['rid']) {echo "selected";}
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

<!-- jQuery
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html> -->