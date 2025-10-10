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
    <?php include 'navbar.php';?>

    <?php
      $hut = [
        "galeri/1.jpg",
        "galeri/2.jpg",
        "galeri/3.jpg",
        "galeri/4.jpg",
        "galeri/5.jpg",
        "galeri/6.jpg"
      ];

      $galeri = [
        "galeri/7.jpg",
        "galeri/8.jpg",
        "galeri/9.jpg",
        "galeri/10.jpg",
        "galeri/11.jpg",
        "galeri/0.jpg"
      ];
    ?>

    <!-- HUT RI -->
    <div class="card shadow-lg rounded-2 mt-3">
      <div class="text-center mb-4 mt-3">
        <h5>Upacara Peringatan HUT RI Ke-80</h5>
        <hr class="w-25 mx-auto" />
      </div>
      <div class="row m-2">
        <?php foreach ($hut as $gambar): ?>
          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0">
              <img src="<?= $gambar ?>" class="img-fluid rounded" alt="Galeri HUT" />
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- MPLS -->
    <div class="card shadow-lg rounded-2 mt-3">
      <div class="text-center mb-4 mt-3">
        <h5>MPLS Tahun Ajaran 2025</h5>
        <hr class="w-25 mx-auto" />
      </div>
      <div class="row m-2">
        <?php foreach ($galeri as $gambar): ?>
          <div class="col-lg-4 col-md-6 mb-3">
            <div class="card border-0">
              <img src="<?= $gambar ?>" class="img-fluid rounded" alt="Galeri MPLS" />
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

   <?php include 'footer.php';?>
  </body>
</html>
