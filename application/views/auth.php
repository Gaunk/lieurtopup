
        <div class="card mt-4">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-md-center text-white">
      <div class="col col-lg-2">
      </div>
      <div class="col-md-auto col-lg-5">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card text-white">
          <h5 class="card-header">
            <img width="30" height="30" src="https://img.icons8.com/external-isometric-vectorslab/30/external-Login-security-and-technology-isometric-vectorslab-2.png" alt="external-Login-security-and-technology-isometric-vectorslab-2"/> Login Member</h5>
          <h6 class="card-header">Masuk menggunakan akun yang sudah terdaftar.</h6>
          <div class="card-body">
            <form action="<?= base_url('auth') ?>" method="post">
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text text-white">masukan username kamu yang benar cooy</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="d-grid gap-2 mt-4">
              <button class="btn btn-warning text-white" type="submit">Login</button>
              <p class="mt-2">Belum punya akun??</p>
              <a href="<?= base_url('auth/register')?>" class="btn btn-outline-danger" type="button">Daftar sekarang</a>
            </div>
          </form>
          </div>
        </div>

      </div>
      <div class="col col-lg-2">
      </div>
    </div>
    </div>

