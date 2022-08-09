<?php 
if(isset($_GET['DELETE']) && $_GET['DELETE'] == "DELETE"){
  
    $obj->Delete("tbl_admin","aid",array($_GET["aid"]));
}

?>


<h2>List of Admin</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>User Name</th>
        <th>Password</th>
        <th>Status</th>
       
        <th colspan="2">Action</th>
        
    </tr>

    <?php
    $requestList = $obj->select('tbl_admin');
    foreach($requestList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td><?php
            $rname = $obj->select('tbl_admin','*','aid',array($value['aid']));
            echo $rname[0]['username'];
        
        ?></td>
      <td><?=$value['password'];?></td>
        <td><?=$value['status'];?></td>
       
        <td><a href="display_admin.php?DELETE=DELETE&aid=<?=$value['aid']?>">DELETE</a></td>
        <!-- <td><a href="edit_request_list.php?action=edit&rlid=<?=$value['rlid']?>">Edit</a></td> -->
    </tr>
   <?php }
    
    ?>
</table>