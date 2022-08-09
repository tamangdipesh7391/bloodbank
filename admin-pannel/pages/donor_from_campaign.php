<?php 
if(isset($_GET['action']) && $_GET['action'] == "delete"){

    $obj->Delete("tbl_donor_list","dlid",array($_GET["dlid"]));
}
$donorList = $obj->select('tbl_donor_register','*','is_from_campaign',array(1));

if($donorList){ ?>

<h2>List of donors from campaign </h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>Donor Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Gender</th>
    </tr>

    <?php
    foreach($donorList as $key => $value){ ?>
    <tr>
        <td><?=++$key;?></td>
        <td>
            <?php
                echo $value['name'];
            ?>
        </td>
        <td><?=$value['phone'];?></td>
        <td><?=$value['address'];?></td>
        <td><?=$value['email'];?></td>
        <td><?=$value['gender'];?></td>

        

        
       
    </tr>
   <?php }
    
    ?>
</table>
<?php }else{
    echo "No donor found";
}
?>

