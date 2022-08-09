<?php
// print_r($_SESSION); die;
if(isset($_SESSION['user_id'])){
    $rid = $_SESSION['user_id'];
    $donor_history = $obj->select('tbl_request_list as rl join tbl_request_register as rr ON rr.rid = rl.rid','*','rl.rid',array($rid));
}

?>
<div class="container">
    
        <?php if($donor_history){ ?>
             <h1>History of <?=($donor_history[0]['name'])?($donor_history[0]['name']):"User";?>

   

    </h1> <hr>
    <table class="table table-bordered table-hover">
        <tr>
            <th>SN</th>
            <th>Date</th>
            <th>Amount</th>
        </tr>
        <?php foreach($donor_history as $key=>$value){ ?>
            <tr>
                <td><?=++$key;?></td>
                <td><?=$value['date'];?></td>
                <td><?=$value['amount'];?></td>

            </tr>
      <?php   } ?>
    </table>
    <?php  } else{ ?>
        <p style="color:red">No result found.</p>
        <?php }?> 

</div>

