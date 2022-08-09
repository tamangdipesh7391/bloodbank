<?php 
// if(isset($_GET['DELETE']) && $_GET['DELETE'] == "DELETE"){
  
//    $obj->Delete("tbl_bloodstock","sid",array($_GET["sid"]));

// }

$stockList = $obj->select('tbl_donor_register','distinct bid');
?>


<h2>List of Blood stock</h2>
<table class="table table-bordered table-hover table-stripped">
    <tr>
        <th>SN</th>
        <th>Blood</th>
        <th>Available</th>
        <th>Delivered</th>
        <!-- <th>Action </th> -->
        
    </tr>

    <?php
     $stockList = $obj->select('tbl_bloodgroup','*');
    foreach($stockList as $key => $value){ 
        ?>
    <tr>
        <td><?=++$key;?></td>
             <td><?php
            $dname = $obj->select('tbl_bloodgroup','*','bid',array($value['bid']));
            echo $dname[0]['bloodgroup'];
        
        ?></td>       
        
        <td>
<?php 
$rem_blood=  0 ;
$req_blood = $obj->Query("SELECT sum(tbl_request_list.amount)  as stock from tbl_request_list JOIN tbl_request_register ON tbl_request_register.rid = tbl_request_list.rid  WHERE tbl_request_register.bid = ".$value['bid']);
// echo "availabe = ".$req_blood[0]->stock;
$stock = $obj->select('tbl_donor_register JOIN tbl_donor_list ON tbl_donor_list.did = tbl_donor_register.did ',' SUM(tbl_donor_list.amount) as sold ','tbl_donor_register.bid',array($value['bid']));
// echo "sold = ".$stock[0]['sold'];
// die;

if($stock && $stock[0]['sold'] !=""){
    if($req_blood){
        $rem_blood = ($stock[0]['sold'] - $req_blood[0]->stock);

    }else{
        $rem_blood = $stock[0]['sold'];
    }
echo $rem_blood;
}
else{
echo "0";
}
?>

        </td>
      
        <td><?php if($req_blood && $req_blood[0]->stock != ''){
            echo $req_blood[0]->stock;
        }else{echo "0";}?></td>
        <!-- <td>
        <a class="btn btn-warning"  href="edit_blood_stock.php?action=edit&sid=<?=$value['sid']?>">Edit</a>
        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="display_bloodstock.php?DELETE=DELETE&sid=<?=$value['sid']?>">DELETE </a>
    
    </td> -->
    </tr>
   <?php }
    
    ?>
</table>