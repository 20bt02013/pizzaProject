<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PIZZA GRAMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logopizza.png" rel="icon">
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

  

  <nav class="navbar navbar-light custom-navbar">
          <div class="container">
              <a class="navbar-brand" href="homePage.php"><h2>PIZZAGRAMS<i class="bi bi-patch-check"></i></h2></a>
              
              <a href="#search"><i class="bi bi-search-heart">Search your favorite</i>
                <span></span>
              </a>
            </div>
            <div class="container">
            <h6 class="mb-0">WELCOME T<i class="bi bi-emoji-heart-eyes"></i> THE PIZZA HEAVEN</h6>
            <p class="mb-0"><a href="#forminsert"> Share &amp; Eat</a></p>
          </div>
  </nav>

 

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">





<div class="flex-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
<?php
include "search.php";

  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
      <div  data-aos="fade-up" data-aos-delay="200">
        <span class="item">
          <a href="" class="item-wrap fancybox" style="background-image: url('marbel.jpg')">
            <span class="work-info">
              <h3><?php echo $row['pizzaname']; ?></h3>
              <span><?php echo $row['country']; ?></span> <br>
              <span><?php echo $row['ingredients']; ?></span>
            </span>
            <img class="img-fluid responsive" src="<?php echo $row['picture']; ?>" alt="<?php echo $row['pizzaname']; ?>">
            <a href="list.php?id=<?php echo $row['id']; ?>"><i class="bi bi-cloud-arrow-up"></i></a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>
          </a>
        </span>
    </div>
  <?php }
  } else {
    echo "No results found";
  } 
  mysqli_close($conn);
?>
</div>

<br><br>

            <div id="search" class="row no-gutter" data-aos="fade-up" data-aos-delay="100" >
                <form method="get" action="" >
                <input type="text" name="keyword" placeholder="Enter name or country"  >
                <button type="submit">Search</button>
                </form>
            </div>

        </div>
    </section><!-- End  Works Section -->

        <section id="forminsert" class="section site-portfolio">
          <div class="container">
            <?php include "forminsert.php"; ?>
          </div>
        </section>

        

    

  </main><!-- End #main -->
    

  
