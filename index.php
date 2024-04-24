<?php
require 'functions.php';
$jumlahDataPerhalaman = 5; 
$posts = query("SELECT * FROM post ORDER BY id DESC");
$all = query("SELECT * FROM post ORDER BY id DESC LIMIT 0, $jumlahDataPerhalaman");
$services =  kueri("SELECT * FROM services ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!--=============== FAVICON ===============-->
  <link rel="icon" href="assets/img/osis.jpg">

  <title>SManusArt</title>
</head>

<body>
  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">
      <div class="nav__data">
        <a href="#" class="nav__logo">
          <i class="ri-planet-line"></i> SManusArt
        </a>

        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-menu-line nav__burger"></i>
          <i class="ri-close-line nav__close"></i>
        </div>
      </div>
      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li><a href="#home" class="active nav__link">Beranda</a></li>

          <li><a href="#service" class="nav__link">Layanan</a></li>
          <li><a href="#medsos" class="nav__link">Sosial Media</a></li>

          <!--=============== DROPDOWN ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              Lain-Lain<i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="#" class="dropdown__link">
                  <i class="ri-message-3-line"></i> Pertanyaan
                </a>
              </li>

              <li>
                <a href="#about" class="dropdown__link">
                  <i class="ri-pie-chart-line"></i> Tentang Kami
                </a>
              </li>
            </ul>
          </li>

          <li><a href="#galery" class="nav__link">Galeri</a></li>
          <li><a href="#contact" class="nav__link">Kontak</a></li>
          <li><a href="#support" class="nav__link">Sponsor</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!--=============== SECTION HOME ===============-->
  <section class="section-container" id="home">
    <div class="caption">
      <h1>Event Organizer Tulungagung</h1>
      <p>Smanusa - SMA Negeri 1 Ngunut</p>
    </div>
    <div class="recent-wrapper">
      <h1>Recently Events</h1>
      <div class="recent">
        <?php foreach ($all as $part) : ?>
          <a href="<?= $part["link"] ?>" class="img-wrapper">
            <img src="assets/img/<?= $part["image"] ?>" alt="Acara Terakhir">
            <h1><?= $part["caption"] ?></h1>
          </a>
        <?php endforeach ?>
      </div>
    </div>
  </section>


  <!--=============== SECTION SERVICE ===============-->
  <section class="section-container" id="service">
    <h1 class="section-title">Layanan</h1>
    <div class="service-wrapper">
     <?php foreach ($services as $service) : ?>
      <div class="elemen">
        <h1 class="service-title"><?= $service["caption"]?></h1>
        <img src="assets/img/<?=$service["image"]?>" alt="Gambar Layanan">
        <h3><a href="<?= $service["link"] ?>">Klik Disini !</a></h3>
      </div>
    <?php endforeach ?>
      

    </div>
  </section>


  <!--=============== SECTION SOSMED===============-->
  <section class="section-container" id="medsos">
    <h1 class="section-title">Sosmed</h1>
    <div class="service-wrapper">
      <a href="https://www.instagram.com/whatsonsmanusa?igsh=czl1Mm5xc3NiOWxo" class="elemen">
        <h1 class="service-title">Whatonsmanusa</h1>
        <img src="assets/img/osisIg.jpg" alt="">
      </a>
      <a href="https://www.instagram.com/smanusa.official?igsh=MWNhNDJkZHVsNGl2cA== " class="elemen">
        <h1 class="service-title">Official Smanusa</h1>
        <img src="assets/img/smanusaOfc.jpg" alt="">
      </a>
      <a href="" class="elemen">
        <h1 class="service-title">Youtube Smanusa</h1>
        <img src="assets/img/art.jpg" alt="">
      </a>
    </div>
  </section>


  <!--=============== SECTION ABOUT ===============-->
  <section class="section-container" id="about">
    <h1 class="section-title">Tentang Kami</h1>
    <div class="about-wrapper">
      <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit quod rerum. Veritatis fuga deserunt recusandae fugit numquam iusto nihil minus magnam a. Consectetur doloribus, suscipit quis officiis perferendis aperiam?</p>
      </div>
      <div>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae aut laborum voluptatibus magni sint et earum reprehenderit dicta neque nostrum, adipisci ratione, eius quaerat fugiat explicabo quas necessitatibus placeat illum.</P>
      </div>
    </div>
  </section>

  <!--=============== SECTION GALLERY ===============-->
  <section class="section-container" id="galery">
    <h1 class="section-title">Galery</h1>
    <div class="galery-wrapper">
      <?php foreach ($posts as $post) : ?>
      <div class="galery-photo">
        <img src="assets/img/<?=$post["image"]?>" alt="">
      </div>
      <?php endforeach ?>
    </div>
  </section>



  <!--=============== SECTION CONTACT ===============-->
  <section class="section-container" id="contact">
    <h1 class="section-title">Kontak</h1>
    <div class="about-wrapper">
      <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit quod rerum. Veritatis fuga deserunt recusandae fugit numquam iusto nihil minus magnam a. Consectetur doloribus, suscipit quis officiis perferendis aperiam?</p>
      </div>
      <div>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae aut laborum voluptatibus magni sint et earum reprehenderit dicta neque nostrum, adipisci ratione, eius quaerat fugiat explicabo quas necessitatibus placeat illum.</P>
      </div>
    </div>
  </section>
  <!--=============== SECTION SUPPORTED ===============-->
  <section class="section-container" id="support">
    <h1 class="section-title">Kontak</h1>
    <div class="about-wrapper">
      <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit quod rerum. Veritatis fuga deserunt recusandae fugit numquam iusto nihil minus magnam a. Consectetur doloribus, suscipit quis officiis perferendis aperiam?</p>
      </div>
      <div>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae aut laborum voluptatibus magni sint et earum reprehenderit dicta neque nostrum, adipisci ratione, eius quaerat fugiat explicabo quas necessitatibus placeat illum.</P>
      </div>
    </div>
  </section>
  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>
</html>