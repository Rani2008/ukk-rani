<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
  <body>
 <?php include 'navbar.php'; ?>

<?php
$keahlian = [
  ['img'=>'galeri/tjkt.XeO8V4_I.png', 'title'=>'Teknik Komputer dan Jaringan (TKJ)', 'desc'=>'Fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi.'],
  ['img'=>'galeri/pplg.DhbRSnK2.png', 'title'=>'Pengembangan Perangkat Lunak dan Gim (PPLG)', 'desc'=>'Merancang, mengembangkan, dan mengelola perangkat lunak dan gim.'],
  ['img'=>'galeri/tbsm.5YZNeyvV.png', 'title'=>'Teknik Sepeda Motor (TSM)', 'desc'=>'Perbaikan, perawatan, dan modifikasi sepeda motor serta bisnis otomotif.'],
  ['img'=>'galeri/dkv.Btdc-HP2.png', 'title'=>'Desain Komunikasi Visual (DKV)', 'desc'=>'Pengembangan kreatif desain grafis, ilustrasi, animasi, dan media komunikasi visual.'],
  ['img'=>'galeri/toi.BFD6ZBmB.png', 'title'=>'Teknik Otomasi Industri (TOI)', 'desc'=>'Teknologi otomasi industri, pemrograman PLC, robotika, dan kontrol otomatis.'],
];
?>

<section class="container my-4">
  <!-- Judul yang lebih kecil -->
  <h4>Kosentrasi <span class="text-primary">
    <h4>keahlian</span></h4>

  <div class="d-flex flex-column gap-3">
    <?php foreach($keahlian as $k): ?>
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <img src="<?= $k['img'] ?>" alt="" width="150" height="150" class="me-3" />
          <div>
            <h5><?= $k['title'] ?></h5>
            <p><?= $k['desc'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'footer.php'; ?>


  </body>
=======
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <title>SMKN 4 Tasikmalaya</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <style>
    /* Optional: Hover effect on cards */
    .card:hover {
      transition: 0.3s ease-in-out;
      transform: scale(1.01);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <!-- SECTION KONSENTRASI KEAHLIAN -->
  <section class="py-5 bg-body-tertiary">
    <div class="container">
      <h2 class="text-center mb-4">
        <span class="text-dark">Konsentrasi</span>
        <span class="text-primary">Keahlian</span>
      </h2>

      <!-- TKJ -->
      <div class="card mb-4 shadow-sm border-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 text-center p-4">
            <img src="galeri/tjkt.XeO8V4_I.png" alt="TKJ" class="img-fluid rounded shadow-sm" width="150" height="150" />
          </div>
          <div class="col-md-8 p-4">
            <h4 class="fw-bold text-uppercase">TKJ</h4>
            <p class="text-muted small mb-2">Teknik Komputer dan Jaringan</p>
            <p class="mb-0">
              Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi
              telekomunikasi. Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi server, dan
              troubleshooting perangkat jaringan.
            </p>
          </div>
        </div>
      </div>

      <!-- PPLG -->
      <div class="card mb-4 shadow-sm border-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 text-center p-4">
            <img src="galeri/pplg.DhbRSnK2.png" alt="PPLG" class="img-fluid rounded shadow-sm" width="150" height="150" />
          </div>
          <div class="col-md-8 p-4">
            <h4 class="fw-bold text-uppercase">PPLG</h4>
            <p class="text-muted small mb-2">Pengembangan Perangkat Lunak dan Gim</p>
            <p class="mb-0">
              Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim. Siswa
              akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan proyek teknologi.
            </p>
          </div>
        </div>
      </div>

      <!-- TBSM -->
      <div class="card mb-4 shadow-sm border-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 text-center p-4">
            <img src="galeri/tbsm.5YZNeyvV.png" alt="TBSM" class="img-fluid rounded shadow-sm" width="150" height="150" />
          </div>
          <div class="col-md-8 p-4">
            <h4 class="fw-bold text-uppercase">TBSM</h4>
            <p class="text-muted small mb-2">Teknik dan Bisnis Sepeda Motor</p>
            <p class="mb-0">
              Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor, serta
              pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua.
            </p>
          </div>
        </div>
      </div>

      <!-- DKV -->
      <div class="card mb-4 shadow-sm border-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 text-center p-4">
            <img src="galeri/dkv.Btdc-HP2.png" alt="DKV" class="img-fluid rounded shadow-sm" width="150" height="150" />
          </div>
          <div class="col-md-8 p-4">
            <h4 class="fw-bold text-uppercase">DKV</h4>
            <p class="text-muted small mb-2">Desain Komunikasi Visual</p>
            <p class="mb-0">
              Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi, dan media
              komunikasi visual untuk berbagai kebutuhan industri kreatif.
            </p>
          </div>
        </div>
      </div>

      <!-- TOI -->
      <div class="card mb-4 shadow-sm border-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4 text-center p-4">
            <img src="galeri/toi.BFD6ZBmB.png" alt="TOI" class="img-fluid rounded shadow-sm" width="150" height="150" />
          </div>
          <div class="col-md-8 p-4">
            <h4 class="fw-bold text-uppercase">TOI</h4>
            <p class="text-muted small mb-2">Teknik Otomasi Industri</p>
            <p class="mb-0">
              Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan sistem kontrol
              otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION KONSENTRASI KEAHLIAN -->

  <?php include 'footer.php'; ?>
</body>

>>>>>>> 984bfd8 (ukk-rani)
</html>
