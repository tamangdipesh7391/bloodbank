</div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php 
$blood_groups_data = $obj->Query("SELECT DISTINCT(tbl_donor_register.bid),tbl_bloodgroup.bloodgroup FROM `tbl_donor_list` JOIN tbl_donor_register ON tbl_donor_register.did = tbl_donor_list.did JOIN tbl_bloodgroup ON tbl_bloodgroup.bid = tbl_donor_register.bid ORDER BY tbl_donor_register.bid ASC");
foreach($blood_groups_data as $key => $value){
    $blood_groups[] = $value->bloodgroup;
}
// print_r($blood_groups);

$blood_data = $obj->Query("SELECT COUNT(tbl_donor_register.did) as blood_amt,tbl_donor_register.bid,tbl_donor_register.bid as blood_id FROM `tbl_donor_list` JOIN tbl_donor_register ON tbl_donor_register.did = tbl_donor_list.did  GROUP BY tbl_donor_register.bid ORDER BY tbl_donor_register.bid ASC");
foreach($blood_data as $key => $value){
    $blood_count[] =$value->blood_amt;
}
// print_r($blood_count);
?>
<script src="<?=base_url('layouts/plugins/jquery/jquery.min.js');?>"></script>
<script src="<?=base_url('layouts/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?=base_url('layouts/plugins/daterangepicker/daterangepicker.js');?>"></script>
<script src="<?=base_url('layouts/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<script src="<?=base_url('layouts/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<script src="<?=base_url('layouts/dist/js/adminlte.js');?>"></script>
<script src="<?=base_url('layouts/dist/js/demo.js');?>"></script>
<script src="<?=base_url('layouts/dist/js/pages/dashboard.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  setTimeout(function(){
    $('.alert').hide('slow');
    
  },5000)
   $('.my-select2').select2();
</script>
<script>
  var bloodGroups = <?=json_encode($blood_groups);?>;
  var bloodCount = <?=json_encode($blood_count);?>;
  const labels = bloodGroups;

  const data = {
    labels: labels,
    datasets: [{
      label: 'Monthly Report of Blood Groups',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: bloodCount
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };
</script>
<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

</body>
</html>
