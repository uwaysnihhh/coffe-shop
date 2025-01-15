<?php 
require "../logic/functions.php";
$menu = mysqli_query(mysql: $conn, query: "SELECT * FROM menu");



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="../css/stylesheet.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap"
    />

    <title>Menu | Aroma Bumi</title>
  </head>
  <body>
    <!-- Header Start -->
    <header class="header" id="header-bg">
      <nav class="nav container">
        <div>
          <a href="../index.html" class="header__logo">
            <img src="../assets/Logo White.png" />
          </a>
        </div>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#" class="nav__link">Products</a>
            </li>
            <li class="nav__item">
              <a href="../page/store.html" class="nav__link">Store</a>
            </li>
            <li class="nav__item">
              <a href="../page/contact.html" class="nav__link">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Header End -->

    <main>
      <section class="menu section">
        <div class="menu__container container">
          <h1 class="section__title section__title-no-underline">
            Our Coffee Based Products
          </h1>
          <p class="section__desc">
            Locally sourced best ingredients = best coffee.
          </p>

          <div class="menu__imgs">
            <?php foreach ($menu as $row) : ?>
            <div class="menu__card">
              <div class="menu__text">
                <h3 class="menu__text-name"><? $row ["DaftarMenu"]; ?></h3>
                <span class="menu__text-price"><? $row ["Harga"]; ?></span>
              </div>
              <div class="menu__img">
                <img src="../assets/aren latte.png" />
              </div>
            </div>



           <?php endforeach; ?>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer Start -->
    <footer class="footer section">
      <div class="footer__container container">
        <div>
          <img class="footer__logo" src="../assets/Logo White.png" alt="" />
          <div class="footer__contact">
            <a href="">
              <img class="footer__email" src="assets/MAIL ICON.svg" alt="" />
            </a>

            <a href="">
              <img class="footer__telf" src="assets/PHONE ICON.svg" alt="" />
            </a>
          </div>
        </div>

        <div>
          <h3 class="footer__title">Products</h3>
          <ul class="footer__links">
            <li>
              <a class="footer__link">Coffe Based</a>
            </li>

            <li>
              <a class="footer__link">Non-Coffe</a>
            </li>

            <li>
              <a class="footer__link">Tea Based</a>
            </li>
          </ul>
        </div>

        <div>
          <h3 class="footer__title">Store</h3>
          <ul class="footer__links">
            <li>
              <a class="footer__link">Location</a>
            </li>
          </ul>
        </div>

        <div>
          <h3 class="footer__title">Contact</h3>
          <ul class="footer__links">
            <li>
              <a class="footer__link">Customer Service</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="subfooter">
        <span>2022 © Designed by Progate Indonesia</span>
      </div>
    </footer>
    <!-- Footer End -->
  </body>
</html>