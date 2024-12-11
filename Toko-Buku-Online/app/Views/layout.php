<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-3 p-10">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url()?>">Toko Buku Online</a>
            <a href="<?=base_url('chart')?>" class="btn btn-secondary position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
</svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
</a>
        </div>
    </nav>

  <!-- Button to open the sidebar -->
  <button class="btn btn-primary" data-toggle="offcanvas" data-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
        Open Sidebar
    </button>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasSidebarLabel">Menu</h5>
            <button type="button" class="close" data-dismiss="offcanvas" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('admin/data_transaksi'); ?>">Data Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link Lain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link Lain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link Lain</a>
                </li>
                <!-- Tambahkan link lain sesuai kebutuhan -->
            </ul>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Konten halaman akan dimasukkan di sini -->
        
    <?= $this->renderSection('main'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script untuk mengaktifkan offcanvas
        $(document).ready(function () {
            $('.offcanvas').on('show.bs.offcanvas', function () {
                $('body').addClass('offcanvas-open');
            });
            $('.offcanvas').on('hide.bs.offcanvas', function () {
                $('body').removeClass('offcanvas-open');
            });
        });
    </script>
    

    <footer class="p-5 bg-danger-subtle mt-5">
        &copy; Copyright 2024. Kelas A Pemrograman Web 2. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>