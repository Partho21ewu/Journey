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
         <section class="contact-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Contact US</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***contact section html start form here*** -->
            <div class="inner-contact-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="section-heading">
                           <h5 class="sub-title">GET IN TOUCH</h5>
                           <h2 class="section-title">REACH & CONTACT US!</h2>
                           <p>We value your feedback and are here to assist you. Whether you have a question, suggestion, or need support, feel free to reach out to our dedicated team. We strive to provide prompt and helpful responses to all inquiries. You can get in touch with us.</p>
                           <div class="social-icon">
                              <ul>
                                 <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                       <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                       <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.youtube.com/" target="_blank">
                                       <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                       <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.pinterest.com/" target="_blank">
                                       <i class="fab fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="contact-map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.7031721977603!2d90.4245350487825!3d23.76854035365992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7892dcf0001%3A0x853ad729be4edc71!2sEast%20West%20University!5e0!3m2!1sen!2sbd!4v1715924379775!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="contact-from-wrap primary-bg">
                           <form method="get" class="contact-from">
                              <p>
                                 <label>First Name..</label>
                                 <input type="text" name="name" placeholder="Your Name*">
                              </p>
                              <p>
                                 <label>Email Address</label>
                                 <input type="email" name="email" placeholder="Your Email*">
                              </p>
                              <p>
                                 <label>Comments / Questions</label>
                                 <textarea rows="8" placeholder="Your Message*"></textarea>
                              </p>
                              <p>
                                 <input type="submit" name="submit" value="SUBMIT MESSAGE">
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***contact section html start form here*** -->
            <!-- ***iconbox section html start form here*** -->
            <div class="contact-details-section bg-light-grey">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-envelope-open-text"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>EMAIL ADDRESS</h4>
                              <ul>
                                 <li>
                                    <a href="mailto:support@gmail.com">support@gmail.com</a>
                                 </li>
                                 <li>
                                    <a href="mailto:name@comapny.com">name@comapny.com</a>
                                 </li>
                                 <li>
                                    <a href="mailto:info@domain.com">info@domain.com</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-phone-alt"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>PHONE NUMBER</h4>
                              <ul>
                                 <li>
                                    <a href="tell:+01893994571">+018 93994571</a>
                                 </li>
                                 <li>
                                    <a href="callto:01786896774">+017 86896774</a>
                                 </li>
                                 <li>
                                    <a href="callto:01977259912">+018 93994571</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box border-icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                           </div>
                           <div class="icon-box-content">
                              <h4>ADDRESS LOCATION</h4>
                              <ul>
                                 <li>
                                    Aftabnagar Block-A
                                 </li>
                                 <li>
                                    Road-1, House-12
                                 </li>
                                 <li>
                                    Dhaka, Bangladesh
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***iconbox section html end here*** -->
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