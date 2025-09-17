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

    <!-- SECTION GALERI -->
         <?php
            $hut = [
              "galeri/1.jpg",
              "galeri/2.jpg",
              "galeri/3.jpg",
              "galeri/4.jpg",
              "galeri/5.jpg",
              "galeri/6.jpg"

            ];
           
         ?>
   
    <div class="card shadow-lg rounded-2 mt-3">
      <div class="row">
        <div class="col-lg-12">
          <div class="card border-0">
            <div class="text-center mb-4 mt-3">
              <h5>Upacara Peringatan HUT RI Ke-80</h5>
              <hr class="w-25 mx-auto" />
            </div>
          </div>
        </div>
      </div>
      <div class="row m-2">
          <?php foreach ($hut as $gambar): ?>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="<?=$gambar?>" class="img-fluid" alt="" />
          </div>
        </div>
        <?php endforeach;?>
         <?php
            $galeri = [
              'galeri/7.jpg',
              'galeri/8.jpg',
              'galeri/9.jpg',
              'galeri/10.jpg',
              'galeri/11.jpg',
              'galeri/7.jpg'

            ];
           
         ?>
   
    <div class="card shadow-lg rounded-2 mt-3">
      <div class="row">
        <div class="col-lg-12">
          <div class="card border-0">
            <div class="text-center mb-4 mt-3">
              <h5>MPLS tahun ajaran 2025</h5>
              <hr class="w-25 mx-auto" />
            </div>
          </div>
        </div>
      </div>
      <div class="row m-2">
          <?php foreach ($hut as $gambar): ?>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="<?=$gambar?>" class="img-fluid" alt="" />
          </div>
        </div>
        
        <?php endforeach;?>

    <!-- SECTION FOOTER -->
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-body">
                <h2>Alamat</h2>
                <hr />
                <div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2131636317513!2d108.25189907357232!3d-7.329939972086937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f59eeb6bda36f%3A0xa9e724a275da6c2d!2sSMK%20Negeri%204%20Tasikmalaya!5e0!3m2!1sid!2sid!4v1755671496167!5m2!1sid!2sid"
                    width="400"
                    height="300"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0">
              <div class="card-body">
                <h2>Kontak</h2>
                <hr />
                <p class="bi bi-telephone m-1">085770605539</p>
                <p class="bi bi-envelope">SMKN4@gmail.com</p>
                <h2>Media Sosial</h2>
                <hr />
                <div class="d-flex gap-3">
                  <i class="bi bi-facebook"></i>
                  <i class="bi bi-instagram"></i>
                  <i class="bi bi-tiktok"></i>
                  <i class="bi bi-youtube"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="card border-0">
              <div class="card-body">
                <h2>Link lainnya</h2>
                <hr />
                <a
                  class="text-decoration-none text-black"
                  href="https://kemendikdasmen.go.id/"
                  >Kemendikbud</a
                >
                <br />
                <a
                  class="text-decoration-none text-black"
                  href="https://kemendikdasmen.go.id/"
                  >Dapodiknasmen</a
                >
                <br />
                <a
                  class="text-decoration-none text-black"
                  href="https://kemendikdasmen.go.id/"
                  >PSMK</a
                >
                <br />
                <a
                  class="text-decoration-none text-black"
                  href="https://kemendikdasmen.go.id/"
                  >Disdik Jabar</a
                >
              </div>
            </div>
          </div>
          <div class="text-center">
            <hr />
            <small
              >© 2025. SMK Negeri 4 Tasikmalaya.<br />
              All rights reserved.</small
            >
            <hr />
          </div>
        </div>
      </div>
    </div>
    <!-- TUTUP SECTION FOOTER -->
  </body>
</html>
