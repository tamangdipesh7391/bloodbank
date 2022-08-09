
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url('layouts/dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url('layouts/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Blood Bank</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Donor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="register_donor_display.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Interested  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('add-donor-list.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_donor_list.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="register_request_display.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Interested  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('add_request_list.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed form</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_request_list.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Confirmed list</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="<?=base_url('display_bloodstock.php');?>" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Stock Blood
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('add_blood_stock.php');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add record  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_bloodstock.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display Record</p>
                </a>
              </li>

            
              
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="<?=base_url('blood_group.php');?>" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-water"></i>
              <p>
                Blood Group
          
          <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('blood_group.php');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert bloodgroup  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_bloodgroup.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display bloodgroup</p>
                </a>
              </li>
            </ul>
              <li class="nav-item">
            <a href="<?=base_url('campaign.php');?>" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Campaign
          
          <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('insert_campaign.php');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add campaign  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_campaign.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display campaign</p>
                </a>
              </li>
          
            </ul>
            <li class="nav-item">
            <a href="<?=base_url('admin.php');?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Admin
          
          <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('add_admin.php');?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Admin  </p>
                  
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('display_admin.php');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display Admin</p>
                </a>
              </li>
          
            </ul>
       
              
         
        

        <li class="nav-item">
            <a href="<?=base_url('donor_from_campaign.php');?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Donor From Campaign
               </p>
            </a>
          </li>

         
        
         
        </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <!-- /.content -->