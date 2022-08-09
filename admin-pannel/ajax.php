<?php 

include 'config/config.php';
include 'config/db.php';


if(isset($_GET['action'])){
    if($_GET['action'] == 'getStockBlood'){
       

        $bid = $obj->select('tbl_request_register','*','rid',array($_POST['pid']));
        $bid = $bid[0]['bid'];
        $req_blood = $obj->Query("SELECT sum(tbl_request_list.amount)  as stock from tbl_request_list JOIN tbl_request_register ON tbl_request_register.rid = tbl_request_list.rid  WHERE tbl_request_register.bid = ".$bid);

        $stock = $obj->select('tbl_donor_register JOIN tbl_donor_list ON tbl_donor_list.did = tbl_donor_register.did ',' SUM(tbl_donor_list.amount) as stock ','tbl_donor_register.bid',array($bid));
        if($stock){
            if($req_blood){
                $rem = $stock[0]['stock']- $req_blood[0]->stock;
            }else{
                $rem = $stock[0]['stock'];
            }
        }else{
            $rem= 0 ;
        }
        ?>
       
        
        <label for="">Amount <span class="text-success">(Available amount: <?=$rem;?> pound)</span></label>
        <input name="amount" type="number" max="<?=$rem;?>" class="form-control">
    <?php }
}
?>