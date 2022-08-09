<?php 
                $requestList = $obj->select('tbl_campaign','*','cid',array($_GET['cid']));

 ?>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol> -->
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <h2>About <?=$requestList[0]['title'];?>  </h2>
            <table class="table table-bordered table-hover ">
                <tr>
                  
                    <th>Title</th>
                    <td><?=$requestList[0]['title'];?></td>
                </tr>
                <tr>
                  
                    <th>Description</th>
                    <td><?=$requestList[0]['description'];?></td>
                </tr>
                <tr>
                  
                  <th>Venue</th>
                  <td><?=$requestList[0]['veneu'];?></td>
              </tr>
              <tr>
                  
                  <th>Start Date</th>
                  <td><?=$requestList[0]['start_date'];?></td>
              </tr>
              <tr>
                  
                  <th>end Date</th>
                  <td><?=$requestList[0]['end_date'];?></td>
              </tr>
              <tr>
                  
                  <th>Start Time</th>
                  <td><?=$requestList[0]['start_time'];?></td>
              </tr>

              <tr>
                  <th>End Time</th>
                  <td><?=$requestList[0]['end_time'];?></td>
              </tr>

              <tr>
                  <th>Guest</th>
                  <td><?=$requestList[0]['guest'];?></td>
              </tr>

              <tr>
                  <th>Remark</th>
                  <td><?=$requestList[0]['remark'];?></td>
              </tr>
                    
                
                    
              

               
            </table>

            <p>Click this link to register for donating blood. <a href="<?=base_url('donor_register.php?is_from_campaign=1')?>">Click Here</a></p>
        </div>
    </div>
</div>