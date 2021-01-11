<?php

// login.php

require_once('php/connection.php');
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ASMA</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="http://localhost/ASMA/ASMA/services.php">Services</a>
          </li>
		   <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item px-lg-4 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PROFILE
          </a>
            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../login Employee.html">Login as Employee</a>
              <a class="dropdown-item" href="../login Admin.html">Login as Admin</a>
              <a class="dropdown-item" href="../login Customer.html">Login as Customer</a>
              <a class="dropdown-item" href="register.html">Register</a>
             
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Love your hair</span>
              <span class="section-heading-lower">Hair services</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-01.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Hair care is a very important and a hygienic routine for both men and women. Nobody wants to go out with a frizzy, dry and unhealthy hair. By just washing your hair doesn’t necessarily mean you are sure you’ve done it right, hair care also involves proper grooming and making sure you are using the right hair care products.We ensure the right hair care solution required for your hair.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">But First Skin Care</span>
              <span class="section-heading-lower">Skincare services</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-02.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">As the outer “wrapping” that protects your body from the elements, your skin is also the wrapper that helps people recognize that you are you and no one else. Your skin tone, texture and how it wraps around your features creates the appearance that makes you distinctly you.So, a healthy integumentary system (your skin) promotes overall health and has the potential to boost (or bust) your confidence as you move about and socialize in the world.Our Skin care services ensures that your skin glows like a diamond and your age hides inside your pockets.All the loving essential skin care services at a very convinient price.Which helps you to take care of your skin regularly.All the products used will be according to your skin type and avoiding ingrediants which you are allergic to. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Makeup is art,beauty is spirit</span>
              <span class="section-heading-lower">Makeover Services</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Make up lets individuals express their artistic side to create beautiful flawless looks. There are many products and different brands that make people fall in love with the beauty of make up. It has become a passion and a work of art.Our makeup artists make sure what kind of look you want and will create the best look for you.The makeup products will be of your choice according to your skin type and keeping in mind about your allergies.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Treatments for you</span>
              <span class="section-heading-lower">Treatments</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-04.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Your skin and your hair needs to get pamper more than anything in this world.While living in current time where the enviornment has become polluted and is damaging your skin and hair , but you do not have the time to take care of your skin and hair. So here we are ensuring the right treatments needed for your hair and skin at a very affordable cost. Because we know how much you love yourself.</p>
          </div>
        </div>
      </div>
    </div>
<?php
    $sql="SELECT name, price from services";
$statement=oci_parse($conn,$sql);
oci_execute($statement);

?>
  </section>
  <div class="container">
  <table>
  <tr>
    <th>Services We Offer</th>
    <th>Price</th>

  </tr>
  <?php

while ($row=oci_fetch_array($statement))


{
?>
  <tr>
  <td><?php echo $row['NAME']; ?></td>
  <td><?php echo $row['PRICE']; ?></td>
  </tr>
<?php
}
?>
  </table>
  </div>

  <?php
oci_free_statement($statement);
oci_close($conn);
?>




  <footer class="footer text-faded text-center py-5" style="margin-top:20%">
    <div class="container">
      <p class="m-0 small">Copyright &copy; ASMA 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
