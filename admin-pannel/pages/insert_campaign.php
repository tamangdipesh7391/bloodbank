
<?php
  if(isset($_POST['submit']) && $_POST['submit'] == 'add_campaign'){
    unset($_POST['submit']);
    $obj->Insert('tbl_campaign',$_POST);
  }


?>
<div class="col-md-4">
<h2><i class="fas fa-user"></i>CAMPAIGN PROGRAM</h2><hr>
<form method="POST" action="" class="form-group">
  
  <div class="form-group">
    <label> TITlE</label>
       <input type="text" name="title" class="form-control">
    </div>
  <div class="form-group">
    <label>DESCRIPTION</label>
      <textarea name="description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>VENUE</label>
      <input type="text" name="veneu" class="form-control">
  </div>
  <div class="form-group">
    <label>START DATE</label>   
      <input type="date" name="start_date" class="form-control">
  </div>
  <div class="form-group">  
    <label>END DATE</label>   
      <input type="date" name="end_date" class="form-control"> 
  </div>
  <div class="form-group">
    <label>START TIME</label>   
      <input type="time" name="start_time" class="form-control">
  </div>
  <div class="form-group">  
    <label>END TIME</label>   
      <input type="time" name="end_time" class="form-control"> 
  </div>
  <div class="form-group">
    <label>GUEST</label>
      <input type="text" name="guest" class="form-control">
  </div>
  <div class="form-group"> 
    <label>REMARK</label>
      <input type="text" name="remark" class="form-control">
  </div> 
     <button type="submit" name="submit" class="btn btn-success" value="add_campaign">SUBMIT</button> 
  </div>
</form>