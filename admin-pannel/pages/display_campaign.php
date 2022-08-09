<?php 
if(isset($_GET['DELETE']) && $_GET['DELETE'] == "DELETE"){
  
    $obj->Delete("tbl_campaign","cid",array($_GET["cid"]));
}

?>


<h2>List of campaign</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>Title</th>
        <th>Description</th>
        <th>Veneu</th>
        <th>Start Date</th>
        <th>end Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Guest</th>
        <th>Remark</th>
        <th colspan="2">Action</th>
        
    </tr>

    <?php
    $requestList = $obj->select('tbl_campaign');
    foreach($requestList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td><?=$value['title'];?></td>
        <td><?=$value['description'];?></td>
        <td><?=$value['veneu'];?></td>
        <td><?=$value['start_date'];?></td>
        <td><?=$value['end_date'];?></td>
        <td><?=$value['start_time'];?></td>
        <td><?=$value['end_time'];?></td>
       <td><?=$value['guest'];?></td>
        <td><?=$value['remark'];?></td>
       
        <td><a href="display_campaign.php?DELETE=DELETE&cid=<?=$value['cid']?>">DELETE</a></td>
          <td><a href="edit_campaign.php?action=edit&cid=<?=$value['cid']?>">Edit</a></td>  
    </tr>
   <?php }
    
    ?>
</table>