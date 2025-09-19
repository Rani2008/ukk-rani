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
     <style>
    /* Optional: Hover effect on cards */
    .card:hover {
      transition: 0.3s ease-in-out;
      transform: scale(1.01);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
  </style>
    <?php include 'navbar.php';?>
    <!-- SECTION IDENTITAS -->
    <section>
      <div class="container px-5 mt-3">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="mb-0">Identitas</h3>
            <h3 class="text-info">kepala sekolah</h3>
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                <div class="card border-0 mb-3">
                  <img
                    src="galeri/kepalasekolah.CDMQ7SQv.png"
                    alt=""
                    width="200"
                    height="200"
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3 shadow-sm rounded-4">
              <div class="col-lg-4 mt-2">
                <div class="card mx-4 border-0">
                  <p>Nama </p>
                  <p>NIP</p>
                  <p>Angkatan/Golongan</p>
                  <br />
                  <p>No SK Pengangkatan</p>
                  
                  
                </div>
              </div>
              <div class="col-lg-2 mt-2">
                <div class="card mx-4 border-0">
                  <p>:</p>
                  <p>:</p>
                  <p>:</p>
                  <br />
                  <p>:</p>
                  <p>:</p>
                  
                </div>
              </div>
              <div class="col-lg-6 mt-2">
                <div class="card mx-2 border-0">
                  <p>Kurniawan, S.Pd, M.Pd.</p>
                  <p>19720809 199702 1 002</p>
                  <p> Pembina IV/b </p>
                  <p>821.2/Kep.373-BKD/2020</p>
                  <p>10 Juli 2020</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TUTUP SECTION IDENTITAS -->
 <?php include 'footer.php';?>
</body>
</html>
