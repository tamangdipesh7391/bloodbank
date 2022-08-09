<?php 
if(isset($_GET['action']) && $_GET['action'] == "delete"){

    $obj->Delete("tbl_request_register","rid",array($_GET["rid"]));
}

?>


<h2>List of Interested requester</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th> Name</th>
        <th> Phone </th>
        <th> Address </th>
        <th> E-mail</th>
        <th> Gender</th>
        <th> Birth Date</th>
        <th>Blood Group</th>
        <th>Description</th>
        <th>Date</th>
        
        <th colspan="2">Action</th>
    </tr>

    <?php
    $requestList = $obj->select('tbl_request_register');
    foreach($requestList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td><?=$value['name'];?></td>
        <td><?=$value['phone'];?></td>
        <td><?=$value['address'];?></td>
        <td><?=$value['email'];?></td>
        <td><?=$value['gender'];?></td>
        <td><?=$value['dob'];?></td>

        <td><?php
            $dname = $obj->select('tbl_bloodgroup','*','bid',array($value['bid']));
            echo $dname[0]['bloodgroup'];
        
        ?></td>       
         <td><?=$value['description'];?></td>
        <td><?=$value['date'];?></td>
        
        <td><a href="register_request_display.php?action=delete&rid=<?=$value['rid']?>">Delete</a></td>
      
    </tr>
   <?php }
    
    ?>
</table>