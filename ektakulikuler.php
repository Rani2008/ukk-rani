<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>SMKN 4 Tasikmalaya</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <?php
    $eskul = [
        ['id' => 'paskibra', 'img' => 'galeri/paskibra.CUSrUT02.png', 'alt' => 'Paskibra', 'name' => 'PASKIBRA'],
        ['id' => 'pramuka', 'img' => 'galeri/pramuka._o46wF_H.png', 'alt' => 'Pramuka', 'name' => 'PRAMUKA'],
        ['id' => 'pmr', 'img' => 'galeri/pmr.DcEPzLrL.png', 'alt' => 'PMR', 'name' => 'PMR'],
        ['id' => 'plh', 'img' => 'galeri/plh.CiRRajfk.png', 'alt' => 'PLH', 'name' => 'PLH'],
        ['id' => 'pks', 'img' => 'galeri/pks.Dq5fCjv5.png', 'alt' => 'PKS', 'name' => 'PKS'],
        ['id' => 'putsal', 'img' => 'galeri/futsal.CyJOdm1z.png', 'alt' => 'PUTSAL', 'name' => 'PUTSAL'],
        ['id' => 'pd', 'img' => 'galeri/pd.BOb73STp.jpg', 'alt' => 'PD', 'name' => 'PD'],
    ];
    ?>

    <section>
        <div class="container px-5 mt-3">
            <h3 class="text-center mb-0">Ekstrakurikuler</h3>
            <h3 class="text-primary text-center mb-4">Siswa</h3>
            <input id="searchEskul" class="form-control w-50 mx-auto mb-4" placeholder="Cari ekstrakurikuler..." />
            <div class="row">
                <?php foreach ($eskul as $e): ?>
                    <div class="col-lg-4" id="eskul-<?= $e['id'] ?>">
                        <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                            <img src="<?= $e['img'] ?>" alt="<?= $e['alt'] ?>" width="150" height="150" />
                            <div class="card-body border-0">
                                <h4><?= $e['name'] ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <script>
        document.getElementById('searchEskul').addEventListener('keyup', e => {
            const filter = e.target.value.toLowerCase();
            document.querySelectorAll('[id^="eskul-"]').forEach(card => {
                const idName = card.id.replace('eskul-', '').toLowerCase();
                const h4Name = card.querySelector('h4').textContent.toLowerCase();
                card.style.display = (idName.includes(filter) || h4Name.includes(filter)) ? '' : 'none';
            });
        });
    </script>


    <?php include 'footer.php'; ?>
</body>
</html>