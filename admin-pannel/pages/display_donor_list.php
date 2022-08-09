<?php 
if(isset($_GET['action']) && $_GET['action'] == "delete"){

    $obj->Delete("tbl_donor_list","dlid",array($_GET["dlid"]));
}

?>


<h2>List of confirmed donors</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>Donor Name</th>
        <!-- <th>Blood</th> -->
        <th>Amount</th>
        <th>Date</th>
        <th colspan="2">Action</th>
    </tr>

    <?php
    $donorList = $obj->select('tbl_donor_list');
    foreach($donorList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td><?php
            $dname = $obj->select('tbl_donor_register','*','did',array($value['did']));
            echo $dname[0]['name'];
        
        ?></td>
            
        <td><?=$value['amount'];?></td> 
        <td><?=$value['date'];?></td>
        
        <td><a href="display_donor_list.php?action=delete&dlid=<?=$value['dlid']?>">Delete</a></td>
        <td><a href="edit_donor_list.php?action=edit&dlid=<?=$value['dlid']?>">Edit</a></td>
    </tr>
   <?php }
    
    ?>
</table>