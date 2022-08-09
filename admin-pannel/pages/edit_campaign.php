<?php 
    if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
        unset($_POST['submit']);
        $obj->update('tbl_campaign',$_POST,'cid',array($_GET['cid']));
        header('Location:display_campaign.php');
    }

    $singleData = $obj->select('tbl_campaign','*','cid',array($_GET['cid']));
    // print_r($singleData);

?>
    
    
    
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="col-md-5">
    <h2>Edit Donor Details</h2>

      <form action="" method="post" class="form-group">

      <div class="form-group">
    
    <label> TITlE</label>
       <input type="text" name="title" class="form-control" value="<?= $singleData[0]['title'];?>">
    </div>
  <div class="form-group">
    <label>DESCRIPTION</label>
      <textarea name="description" class="form-control" ><?= $singleData[0]['description'];?></textarea>
  </div>
  <div class="form-group">
    <label>VENUE</label>
      <input type="text" name="veneu" class="form-control" value="<?= $singleData[0]['veneu'];?>">
  </div>
  <div class="form-group">
    <label>START DATE</label>   
      <input type="date" name="start_date" class="form-control" value="<?= $singleData[0]['start_date'];?>">
  </div>
  <div class="form-group">  
    <label>END DATE</label>   
      <input type="date" name="end_date" class="form-control" value="<?= $singleData[0]['end_date'];?>"> 
  </div>
  <div class="form-group">
    <label>START TIME</label>   
      <input type="time" name="start_time" class="form-control" value="<?= $singleData[0]['start_time'];?>">
  </div>
  <div class="form-group">  
    <label>END TIME</label>   
      <input type="time" name="end_time" class="form-control" value="<?= $singleData[0]['end_time'];?>"> 
  </div>
  <div class="form-group">
    <label>GUEST</label>
      <input type="text" name="guest" class="form-control" value="<?= $singleData[0]['guest'];?>">
  </div>
  <div class="form-group"> 
    <label>REMARK</label>
      <input type="text" name="remark" class="form-control" value="<?= $singleData[0]['remark'];?>">
  </div> 
    <div class="form-group">
    <button type="submit" name="submit" class="btn btn-success" value="update">Submit</button>
</div>
    </div>
</form>




      </div><!-- /.container-fluid -->
    </div>
    