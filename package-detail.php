<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>

<body>
   <div id="page" class="page">
      <!-- ***site header html start*** -->
      <?php include 'include/navbar.php'; ?>
      <!-- ***site header html end*** -->
      <main id="content" class="site-main">
         <section class="package-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Package Detail</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***career section html start form here*** -->
            <div class="inner-package-detail-wrap">
               <div class="container">
                  <?php
                  include('admin/includes/config.php');
                  $pkgid = $_GET['pkgid'];
                  // echo $pkgid;
                  $sql = "SELECT * from tbltourpackages where PackageId = $pkgid";
                  $query = $dbh->prepare($sql);
                  $query->execute();
                  $results = $query->fetchAll(PDO::FETCH_OBJ);
                  $cnt = 1;
                  if ($query->rowCount() > 0) {
                     foreach ($results as $result) {
                        //   print_r($result);
                     }
                  }
                  ?>
                  <div class="row">
                     <div class="col-lg-8 primary right-sidebar">
                        <div class="single-packge-wrap">
                           <div class="single-package-head d-flex align-items-center">
                              <div class="package-title">
                                 <h2><?php echo htmlentities($result->PackageName); ?></h2>
                                 <div class="rating-start-wrap">
                                    <div class="rating-start">
                                       <span style="width: 80%"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="package-price">
                                 <h6 class="price-list">
                                    <span>BDT<?php echo htmlentities($result->PackagePrice); ?>
                                       <?php if ($_SESSION['email']) { ?>
                                          <a href="booking.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="outline-btn outline-btn-blue">Book now</a>
                                       <?php } else { ?>
                                          <a href="sign-in.php" class="outline-btn outline-btn-blue">Book now</a>
                                       <?php } ?>
                                    </span>

                                 </h6>
                              </div>
                           </div>
                           <div class="package-meta">
                              <ul>
                                 <li>
                                    <i class="fas fa-clock"></i>
                                    7D/6N
                                 </li>
                                 <li>
                                    <i class="fas fa-user-friends"></i>
                                    pax: 10
                                 </li>
                                 <li>
                                    <i class="fas fa-swimmer"></i>
                                    Category : <?php echo htmlentities($result->PackageType); ?>
                                 </li>

                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php echo htmlentities($result->PackageLocation); ?>
                                 </li>
                              </ul>
                           </div>
                           <figure class="single-package-image">
                              <img src=admin/packageimages/<?php echo htmlentities($result->PackageImage); ?> alt="">
                           </figure>
                           <div class="package-content-detail">
                              <article class="package-overview">
                                 <h3>OVERVIEW :</h3>
                                 <p><?php echo htmlentities($result->PackageDetails); ?></p>
                              </article>
                              <article class="package-include bg-light-grey">
                                 <h3>INCLUDE & EXCLUDE :</h3>
                                 <ul>
                                    <li><i class="fas fa-check"></i>Specialized bilingual guide</li>
                                    <li><i class="fas fa-times"></i>Guide Service Fee</li>
                                    <li><i class="fas fa-check"></i>Private Transport</li>
                                    <li><i class="fas fa-times"></i>Room Service Fees</li>
                                    <li><i class="fas fa-check"></i>Entrance Fees</li>
                                    <li><i class="fas fa-times"></i>Driver Service Fee</li>
                                    <li><i class="fas fa-check"></i>Breakfast And Lunch Box</li>
                                    <li><i class="fas fa-times"></i>Any Private Expenses</li>
                                 </ul>
                              </article>
                              <article class="package-ininerary">
                                 <h3>ITINERARY :</h3>
                                 <p>Malesuada incidunt excepturi proident quo eros? Id interdum praesent magnis, eius cumque? Integer aptent officiis recusandae habitasse iure, quisque culpa!</p>
                                 <ul>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 1</span>
                                       <?php echo htmlentities($result->PackageFetures); ?>
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 2</span>
                                       Visit the main museums and lunch included
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 3</span>
                                       Excursion in the natural oasis and picnic
                                    </li>
                                    <li>
                                       <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                       <span>DAY 4</span>
                                       Transfer to the airport and return to the agency
                                    </li>
                                 </ul>
                              </article>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="sidebar">
                           <div class="related-package">
                              <h3>RELATED IMAGES</h3>
                              <p>Quaerat inventore! Vestibulum aenean volutpat gravida. Sagittis, euismod perferendis.</p>
                              <div class="related-package-slide">
                                 <div class="related-package-item">
                                    <img src="assets/images/img1.jpg" alt="">
                                 </div>
                                 <div class="related-package-item">
                                    <img src="assets/images/img2.jpg" alt="">
                                 </div>
                                 <div class="related-package-item">
                                    <img src="assets/images/img3.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="package-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1842709.558546195!2d89.99170719708209!3d25.57026586280484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37507e8f34bd207f%3A0xf5ef6117f496d6e!2sMeghalaya%2C%20India!5e0!3m2!1sen!2sbd!4v1716905203621!5m2!1sen!2sbd" width="600" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                           <div class="package-list">
                              <div class="overlay"></div>
                              <h4>MORE PACKAGES</h4>
                              <ul>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Vacation Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Homeymoon Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>New Year Packages</a>
                                 </li>
                                 <li>
                                    <a href="#"><i aria-hidden="true" class="icon icon-arrow-right-circle"></i>Weekend Packages</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***career section html start form here*** -->
         </section>
      </main>
      <?php include 'include/footer.php'; ?>
      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- ***custom search field html*** -->
      <?php include 'include/custom_search.php'; ?>
      <!-- ***custom search field html*** -->

   </div>

   <!-- JavaScript -->
   <?php
   include 'include/javascript.php';
   ?>
</body>

</html>