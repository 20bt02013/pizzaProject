
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyPortfolio Bootstrap Template - Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
<main id="main">

<section class="section pb-5">
  <div class="container">

    <div class="row mb-5 align-items-end">
      <div class="col-md-6" data-aos="fade-up">
        <h2>UPDATE FORM</h2>
      </div>
      <p class="mb-0">
      <?php
              include "dbconnect.php";
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM pizzas WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
              }
            ?>

      </p>

    </div>

    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

        <form  method="post" action="update.php" role="form"  >
  
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

          <div class="row gy-3">
            <div class="col-md-6 form-group">
              <label for="name">Pizza Name:</label>
              <input type="text" name="pizzaname" value="<?php echo $row['pizzaname']; ?>" class="form-control" id="pizzaname" >
            </div>


            <div class="col-md-6 form-group">
              <label for="name">Country:</label>
              <input type="text" class="form-control" name="country" id="country" value="<?php echo $row['country']; ?> ">

              
            </div>
            <div class="col-md-12 form-group">
              <label for="name">Ingredients:</label>
              <input type="text" class="form-control" name="ingredients" id="ingredients" value="<?php echo $row['ingredients']; ?>" >

            </div>
            <div class="col-md-12 form-group">
              <label for="name">Image URL:</label>
              <input type="text" class="form-control" name="picture" id="ingredients" value="<?php echo $row['picture']; ?>" >
              
            </div>

            

            <div class="col-md-6 mt-0 form-group">
              <input type="submit" class="readmore d-block w-100" value="Update Record" name="submit">
              
            </div>
          </div>

        </form>


      </div>

   

    </div>

  </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="col-sm-6 social text-md-end">
        <a href="#"><span class="bi bi-twitter"></span></a>
        <a href="#"><span class="bi bi-facebook"></span></a>
        <a href="#"><span class="bi bi-instagram"></span></a>
        <a href="#"><span class="bi bi-linkedin"></span></a>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

