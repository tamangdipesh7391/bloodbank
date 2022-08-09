 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>DONOR REGISTER</h2>
          
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol> -->
        </div>
       <div class="col-md-6">
       <hr>
       </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <?php 
    if(isset($_POST['submit']) && $_POST['submit'] == 'add_register'){
        unset($_POST['submit']);
        if(isset($_GET['is_from_campaign']) && $_GET['is_from_campaign'] == '1'){
            $_POST['is_from_campaign'] = '1';
        }
        $obj->Insert('tbl_donor_register',$_POST);
    }

?>
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
           
        <form action="" method="post" class="form-group">
            <label>NAME</label>
               <input type="text" required name="name" id="name" class="form-control"><br>
            <label>PHONE</label>
               <input type="number" required name="phone" id="phone" class="form-control"> <br>
            <label>ADDRESS</label>    
                <input type="text" required name="address" id="address" class="form-control"> <br>
            <label>E-MAIL</label>  
                <input type="text" required name="email" id="email" class="form-control"> <br>
            <label>GENDER</label>
                <input type="text" required name="gender" id="gender" class="form-control"> <br>     
            <label>BIRTH DATE</label>    
                <input type="date" required name="dob" id="birthdate" class="form-control"> <br>
            <label>BLOOD GROUP</label> 
            <label for="">Blood group</label>
        <select name="bid" id="" class="form-control">
            <option selected disabled>Select BloodGroup</option>
            <?php
            $blood = $obj->select('tbl_bloodgroup');
            foreach($blood as $key => $value){ ?>
            <option value="<?=$value['bid'];?>"><?=$value['bloodgroup'];?></option>
           <?php  }
            
            ?>
        </select><br>

            <label>Health_status</label>    
            <select name="healthstatus" class="form-control">
            <option selected disabled>your health </option>
            <option>Healthy</option>
            <option>unhealthy</option>
            <option>other</option> <br>
            </select>
            <br>
            <label> DATE</label>    
                <input type="date" name="date" class="form-control" readonly value="<?=date('Y-m-d')?>"> <br>

           
            <button type="submit" name="submit" class="btn btn-success" value="add_register">Submit</button>

        </form>
          </div>
               
  
        </div>
    </div>