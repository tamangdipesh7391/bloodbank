<?php 
if(isset($_GET['DELETE']) && $_GET['DELETE'] == "DELETE"){
  
    $obj->Delete("tbl_request_list","rlid",array($_GET["rlid"]));
}

?>


<h2>List of confirmed requested users</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>Request Name</th>
        <!-- <th>Blood</th> -->
        <th>Amount</th>
        <th>Date</th>
        <th colspan="2">Action</th>
        
    </tr>

    <?php
    $requestList = $obj->select('tbl_request_list');
    foreach($requestList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td><?php
            $rname = $obj->select('tbl_request_register','*','rid',array($value['rid']));
            echo $rname[0]['name'];
        
        ?></td>
            <td><?=$value['amount'];?></td> 
        <td><?=$value['date'];?></td>
       
        <td><a href="display_request_list.php?DELETE=DELETE&rlid=<?=$value['rlid']?>">DELETE</a></td>
        <td><a href="edit_request_list.php?action=edit&rlid=<?=$value['rlid']?>">Edit</a></td>
    </tr>
   <?php }
    
    ?>
</table>