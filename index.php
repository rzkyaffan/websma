<?php
require 'functions.php';
$recentData = 5;
$all = query("SELECT * FROM post ORDER BY id DESC LIMIT 0, $recentData");
$achiv = query("SELECT * FROM prestasi ORDER BY no DESC LIMIT 0, $recentData");

$galeryImg = 2;
$datasPerPage = count(query("SELECT * FROM post"));
$jumlahHalaman = ceil($datasPerPage / $galeryImg);
$halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awalData = ($galeryImg * $halamanAktif) - $galeryImg;
$posts = query("SELECT * FROM post ORDER BY id DESC LIMIT $awalData , $galeryImg");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SManusArt</title>
  <meta name="title" content="Art ">
  <!--=============== REMIXICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!--=============== FAVICON ===============-->
  <link rel="icon" href="assets/img/osisIg.jpg">

    <!--=============== ANIMATE CSS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Primary Meta Tags -->
<title>SMAnusArt - Art and </title>
<meta name="title" content="SMAnusArt - Art and Extraculiculer " />
<meta name="description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler." />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://smanusart.com/" />
<meta property="og:title" content="SMAnusArt - Art and " />
<meta property="og:description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler." />
<meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://smanusart.com/" />
<meta property="twitter:title" content="SMAnusArt - Art and " />
<meta property="twitter:description" content="Wadah Untuk meng ekspresikan hasil karya anak-anak di SMANUSA.  Hasil karya anak-anak dari berbagai ekstrakurikuler." />
<meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />

<!-- Meta Tags Generated with https://metatags.io -->


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

          <!--=============== DROPDOWN ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              Lain-Lain<i class="ri-arrow-down-s-line dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="#support" class="dropdown__link">
                  <i class="ri-message-3-line"></i> Sponsor
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
          <li><a href="#achiv" class="nav__link">Prestasi</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!--=============== SECTION HOME ===============-->
  <section class="section-container" id="home">
    <div class="caption animate__animated animate__bounceInDown" >
      <h1>SMAnusArt - Tulungagung</h1>
      <p>Welcome to SMAnusArt, your gateway to the vibrant world of creativity and entertainment! Dive into a dynamic online platform where passion meets performance, and imagination knows no bounds.</p>
    </div>
    <div class="recent-wrapper animate__animated animate__slideInRight ">
      <h1>Acara Terakhir</h1>
      <div class="recent">git
        <?php foreach ($all as $part) : ?>
          <a href="<?= $part["link"] ?>" class="img-wrapper">
            <img src="assets/img/<?= $part["image"] ?>" loading="lazy" alt="Acara Terakhir">
            <h1><?= $part["caption"] ?></h1>
          </a>
        <?php endforeach ?>
      </div>
    </div>
  </section>


  <!--=============== SECTION SERVICE ===============-->
  <section class="section-container" id="service">
    <h1 class="section-title">Layanan</h1>
    <div class="layanan-wrapper">
      <div class="card">
        <img src="assets/img/66272b8b242ec.png" alt="service" loading="lazy">
        <div class="card-cap">
          <h1>Paket jasa Multimedia</h1>
          <p>kami melayani jasa fotografi wedding, event, dll, untuk merekam jejak momen berharga anda agar menjadi pengingat memori yang indah dan tak pernah terlupkan. Selain itu kami juga  melayani pembuatan poster, Selebaran, Pamflet, dan Logo untuk keberlangsungan bisnis dan acara yang anda selenggarakan agar menjadi bisnis yang banyak menghasilkan keuntungan</p>
          <button><a href="" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Hubungi Kami</a></button>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/66272b8b242ec.png" alt="service" loading="lazy">
        <div class="card-cap">
          <h1>Pembuatan Website</h1>
          <p>kami melayani pembuatan Website untuk organisasi, Toko, dan lain lain untuk kebutuhan bisnis anda atau untuk sekedar menyebarkan  informasi organasi atau perushaan anda.</p>
          <button><a href="" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Hubungi Kami</a></button>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/66272b8b242ec.png" alt="service" loading="lazy">
        <div class="card-cap">
          <h1>Liputan</h1>
          <p>Liputan berisi laporan yang berisi berita dan dokumentasi seluruh kegiatan yang terselenggara pada SMA Negeri 1 Ngunut.</p>
          <button><a href="" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Hubungi Kami</a></button>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/podcast.jpg" alt="service" loading="lazy">
        <div class="card-cap">
          <h1>Podcast</h1>
          <p>Podcast berisi siaran yang membahas suatu kegiatan atau fenomena yang terjadi di SMA Negeri 1 Ngunut melalui wawancara dengan beberapa narasumber, seperti event, prestasi, ataupun kisah personal dari warga SMA Negeri 1 Ngunut</p>
          <button><a href="" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Hubungi Kami</a></button>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/p5.jpg" alt="service" loading="lazy">
        <div class="card-cap">
          <h1>P5 Smanusa</h1>
          <p>Podcast berisi siaran yang membahas suatu kegiatan atau fenomena yang terjadi di SMA Negeri 1 Ngunut melalui wawancara dengan beberapa narasumber, seperti event, prestasi, ataupun kisah personal dari warga SMA Negeri 1 Ngunut</p>
          <button><a href="" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>Hubungi Kami</a></button>
        </div>
      </div>
    </div>
  </section>


  <!--=============== SECTION GALLERY ===============-->
  <section class="section-container" id="galery">
    <h1 class="section-title">Galeri</h1>
    <div class="galery-wrapper">
      <?php foreach ($posts as $post) : ?>
        <div class="galery-photo">
          <img src="assets/img/<?= $post["image"] ?>" loading="lazy" alt="galery">
        </div>
      <?php endforeach ?>
    </div>
    <!-- PAGINATION -->
    <div class="pagination">
      <?php if($halamanAktif > 1) : ?>
        <a href="?page=<?=$halamanAktif - 1; ?>#galery">Sebelum</a>
      <?php endif ; ?>
      <?php for ($i =1; $i <= $jumlahHalaman; $i++) :?>
        <?php if($i == $halamanAktif):?>
        <a href="?page=<?= $i;?>#galery" class="pageAct"> <?= $i ?></a>
        <?php else: ?>
          <a href="?page=<?= $i;?>#galery"> <?= $i ?></a>
          <?php endif; ?>
        <?php endfor; ?>
        <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?=$halamanAktif + 1; ?>#galery">Selanjutnya</a>
      <?php endif ; ?>
    </div>
  </section>

  <!--=============== SECTION ACHIEVMENT ===============-->
  <section lass="section-container" id="achiv">
  <h1 class="section-title">Prestasi</h1>
  <div class="achievment-wrapper">
    <?php foreach($achiv as $ac):?>
    <div class="achiv-card">
    <img src="assets/img/<?= $ac["gambar"] ?>" loading="lazy" alt="<?=$ac["judul"] ?>">
    <h1><?=$ac["judul"] ?></h1>
      <p><?= $ac["keterangan"]?></p>
    </div>
    <?php endforeach ?>
  </div>
  </section>

  <!--=============== SECTION ABOUT ===============-->
  <section class="section-container" id="about">
    <h1 class="section-title">Tentang Kami</h1>
    <div class="about-wrapper">
      <div>
        <p>SManusArt merupakan suatu web untuk wadah kumpulan konten kisah di SMA Negeri 1 Ngunut. Web ini digunakan untuk mempublikasikan kumpulan karya siswa, dokumentasi, dan berita kegiatan yang ada di SMA Negeri 1 Ngunut.</p>
      </div>
      <div>
        <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae aut laborum voluptatibus magni sint et earum reprehenderit dicta neque nostrum, adipisci ratione, eius quaerat fugiat explicabo quas necessitatibus placeat illum.</P>
      </div>
    </div>
  </section>

  <!--=============== SECTION CONTACT ===============-->
  <section class="section-container" id="contact">
    <h1 class="section-title">Kontak Kami</h1>
    <div class="contact">
      <form action="https://formsubmit.co/affandirrh@gmail.com" method="POST">
        <li>
          <label for="name">Nama</label>
          <input type="name" name="name" id="name" autocomplete="off" required>
        </li>
        <li>
          <label for="username">Email</label>
          <input type="email" name="username" id="username" autocomplete="off" required>
        </li>
        <li>
          <label for="message">Pesan</label>
          <textarea name="message" id="message" autocomplete="off" required></textarea>
         
        </li>
        <input type="hidden" name="_captcha" value="false">
        <button>Kirim</button>
      </form>
      <div class="address">
        <div class="vertical">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>

        <a href="https://www.google.com/maps/place/SMAN+1+NGUNUT+-+SMANUSA/@-8.1319069,112.0055306,18.37z/data=!4m6!3m5!1s0x2e78e66340208a5d:0xc590bfeab871e0fa!8m2!3d-8.1313571!4d112.0050292!16s%2Fg%2F1hm28hngc?entry=ttu"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></a>

        </div>
        <div class="horizontal">
          <h1>Jika anda memiliki pertanyaan, silahkan hubungi kami</h1>
          <h1>+62 xxx  xxx</h1>
          <b>your@gmail.com</b>
          <p>SMAnusArt<br>Jawa TImur,<br>Indonesia</p>
        </div>
      </div>
    </div>
  </section>
  <!--=============== SECTION SUPPORTED ===============-->
  <section class="section-container" id="support">
    <h1 class="section-title">Sponsor</h1>
    <i class="section-title">
      <h2>Terimakasih Kepada</h2>
    </i>
    <div class="about-wrapper support">
      <div class="support-image">
        <img src="assets/img/daniel-leone-v7daTKlZzaw-unsplash.jpg" alt="" loading="lazy">
        <img src="assets/img/vf sponsor.png" alt="vf-sponsor" loading="lazy">
      </div>
    </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer>
    <p>SMAnusArt Crew &copy; <?= date('Y') ?> - All Rights Reserved.</p>
    <a href="#home" class="back-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
    </a>
  </footer>
  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>