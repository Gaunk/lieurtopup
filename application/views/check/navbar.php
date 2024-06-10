
    <!-- NAVBAR -->
    <nav class="navbar navbar-dark fixed-top shadow rounded" style="background-color: rgb(22, 16, 18);">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>">
      <img src="<?= base_url('assets') ?>/img/lieur-logo-2.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <img src="<?= base_url('assets') ?>/img/lieur-logo-2.png">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <?php if ($this->session->userdata('email') == true): ?>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user') ?>">Hai, <span class="text-info"><?= $this->session->userdata('email') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?= base_url('user') ?>">Profile</a>
          </li>
        <?php else: ?>
        <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <?php endif ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('') ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('checkpesanan') ?>">Cek Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('check') ?>">Cek ID Games</a>
          </li>
        </ul>
        <?php
        // Cek role user
        if($this->session->userdata('email') == true){ // Jika role-nya User/Admin masuk
            ?>
            <form class="d-grid gap-2 mt-3" role="search">
                  <a  href="<?= base_url('auth/logout') ?>" class="btn btn-outline-danger btn-sm text-white" type="submit">Logout</a> 
                </form>
            <?php
        }else{ // Jika role-nya User
            ?>
            <form class="d-grid gap-2 mt-3" role="search">
                  <a  href="<?= base_url('auth') ?>" class="btn btn-outline-warning btn-sm text-white" type="submit">Masuk</a>
                  <a href="<?= base_url('auth/register') ?>" class="btn btn-outline-danger btn-sm text-white" type="submit">Daftar sekarang</a>
                </form>
            <?php
        }
        ?>
        
      </div>
    </div>
  </div>
</nav>

    <!-- AKHIR NAVBAR -->