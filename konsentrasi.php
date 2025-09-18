<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <title>SMKN 4 Tasikmalaya</title>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"
    ></script>
  </head>

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
</html>
