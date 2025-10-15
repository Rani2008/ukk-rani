<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMKN 4 Tasikmalaya</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- SECTION BERITA -->
    <section class="py-4">
      <div class="container px-4">
        <!-- Judul -->
        <div class="text-center mb-4">
          <h3 class="mb-0">Berita</h3>
          <h3 class="text-info fw-bold">Terbaru</h3>
        </div>

        <div class="row g-4">
          <!-- Kartu Berita 1 -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <img
                src="galeri/b.1.jpg"
                class="card-img-top img-fluid"
                alt="Berita 1"
                style="height: 250px; object-fit: cover;"
              />
              <div class="card-body text-center">
                <h5 class="card-title">
                  SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja
                </h5>
                <a
                  href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/"
                  class="btn btn-info"
                  target="_blank"
                  >Baca Selengkapnya</a
                >
              </div>
            </div>
          </div>

          <!-- Kartu Berita 2 -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <img
                src="galeri/b.3.jpg"
                class="card-img-top img-fluid"
                alt="Berita 2"
                style="height: 250px; object-fit: cover;"
              />
              <div class="card-body text-center">
                <h5 class="card-title">
                  Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo
                  Creanova
                </h5>
                <a
                  href="https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/"
                  class="btn btn-info"
                  target="_blank"
                  >Baca Selengkapnya</a
                >
              </div>
            </div>
          </div>

          <!-- Kartu Berita 3 -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <img
                src="galeri/b.4.jpg"
                class="card-img-top img-fluid"
                alt="Berita 3"
                style="height: 250px; object-fit: cover;"
              />
              <div class="card-body text-center">
                <h5 class="card-title">
                  Sinergi Bagi Negeri, DAM Kerjasama dengan SMKN 4 Tasikmalaya
                  Terapkan KTBSM Sepeda Motor Astra Honda
                </h5>
                <a
                  href="https://jabar.tribunnews.com/2023/03/02/sinergi-bagi-negeri-dam-kerjasama-dengan-smkn-4-tasikmalaya-terapkan-ktbsm-sepeda-motor-astra-honda"
                  class="btn btn-info"
                  target="_blank"
                  >Baca Selengkapnya</a
                >
              </div>
            </div>
          </div>

          <!-- Kartu Berita 4 -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm">
              <img
                src="galeri/b.2.jpeg"
                class="card-img-top img-fluid"
                alt="Berita 4"
                style="height: 250px; object-fit: cover;"
              />
              <div class="card-body text-center">
                <h5 class="card-title">
                  Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya,
                  Ciptakan Bibit Keselamatan di Jawa Barat
                </h5>
                <a
                  href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-pada-gen-z?page=all"
                  class="btn btn-info"
                  target="_blank"
                  >Baca Selengkapnya</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- TUTUP SECTION BERITA -->

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
  </body>
</html>
