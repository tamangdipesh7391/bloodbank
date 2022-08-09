  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Blood Bank </h1>
      <h2>You are precious so is your Blood</h2>
      <a href="<?=base_url('donor_register')?>" class="btn-get-started ">Donate Now</a>
      <a href="<?=base_url('request_register')?>" class="btn-get-started ">Request Blood</a>

    </div>
  </section><!-- End Hero -->



 <!-- ======= What We Do Section ======= -->
 <section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
          <p>With the right donor data management and blood stock management, BBMS works closely with blood banks to maintain their information and also recruit, engage and retain donors as per the demand. Folks in search of blood can get access to blood availability info.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bi-speaker-fill"></i></div>
              <h4><a href="">Motivates</a></h4>
              <p>Safe blood saves lives.Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life and can be used individually for patients accroding to their bloodgroup.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Blood Transfusion Service</a></h4>
              <p>Services are ensuring adequate, safe and timely supply of blood and blood products through voluntary non-remunerable blood donation to meet the transfusion requirements of the people of Nepal.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Funding program</a></h4>
              <p>By the help of people fund we conduct the funding program for the needy people and needy organization.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End What We Do Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/aa.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p>
            BBMS is a service motive for the welfare of the society. We work to encourage and inspire people to donate blood and provide fresh blood to needy one in need to save life.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> One unit of donated blood can save upto three people when supplied into three different components as Red blood cells, Fresh frozen plasma and Platelet concentrate/ platelet rich plasma.</li>
              <li><i class="bx bx-check-double"></i> As per the data, under normal circumstances, someone needs a blood transfusion in every two seconds. Blood transfusions are used for trauma victims - due to accidents and burns - heart surgery, organ transplants, women with complications during childbirth, newborns and premature babies, and patients receiving treatment for leukemia, cancer or other diseases, such as sickle cell disease and Thalassemia.</li>
            </ul>
            <!-- <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    
    </section><!-- End About Section -->

 

    <!-- ======= Services Section ======= -->
    <?php 

$campaignData = $obj->select('tbl_campaign');

?>
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Campiagns</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">
        <?php foreach($campaignData as $key=>$value){ ?>
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-file-earmark-person-fill"></i>
              <h4><a href="#"><?=$value['title'];?></a></h4>
              <p><?=$value['description'];?> <br>
              <a href="<?=base_url('campaign_details.php?cid='.$value['cid']);?>" class="btn btn-info mt-2">View Details</a></p>


            </div>
          </div>
      <?php   } ?>
          
          
         
         
           
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Pictures</li>
              <li data-filter=".filter-app">Donation</li>
              <!-- <li data-filter=".filter-card">card</li> -->
              <li data-filter=".filter-web">Events</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/1.png" class="img-fluid" alt="">
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Donation 1</a></h4>
                <!-- <p>App</p> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/44.jpg" class="img-fluid" alt="">
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Events 3</a></h4>
                <p>event</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/dd.jpg" class="img-fluid" alt="">
               
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Donation 2</a></h4>
                <!-- <p>App</p> -->
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/portfolio-4.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">card 2</a></h4>
                <p>card</p>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/33.jpg" class="img-fluid" alt="">
               
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Event 2</a></h4>
                <p>event</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/thumb.jpg" class="img-fluid" alt="">
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Donation 3</a></h4>
                <!-- <p>App</p> -->
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/portfolio-7.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <a href="assets/img/portfolio/portfolio-8.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">card 3</a></h4>
                <p>card</p>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/portfolio/22.jpg" class="img-fluid" alt="">
               
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Event 1</a></h4>
                <p>event</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You can freely contact with us </p>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.456051836028!2d85.32047061438455!3d27.703202132282343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a64b5f13e1%3A0x28b2d0eacda46b98!2sPutalisadak%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1651126422251!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>

        </div>

        <?php
  if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
    // print_r ($_POST);
    unset($_POST['submit']);
    $obj->Insert('tbl_contact',$_POST);
  }
?>


        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="" method="post" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
            
              <div class="text-center"><button type="submit" name="submit" value="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
    <section id="funding" class="funding">
      <div class="container">
    <div class="section-title">
          <h2>Funding</h2>
          <p>You can freely fund for the needy peoples </p>
          <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-phone"></i>
                  <h4>Account Number:</h4>
                  <p>007070605040003300</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>bbms11@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p> 9825363500<br> 9866324700</p>
                </div>
              </div>
            </div>

          </div>

        </div>
        </div>
      </div>
    </section>