
        <div class="card mt-4">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>
<!--  -->


<!--  -->
    <div class="container mt-4">
        <div class="row justify-content-md-center text-white">
      <div class="col col-lg-2">
      </div>
      <div class="col-md-auto col-lg-5">
    <?= $this->session->flashdata('pesan'); ?>
        <div class="card text-white mt-4">
          <h5 class="card-header">
            <img width="30" height="30" src="https://img.icons8.com/arcade/30/signing-a-document.png" alt="signing-a-document"/> Register Member</h5>
          <h6 class="card-header">Masukkan informasi pendaftaran yang benar</h6>
          <div class="card-body">
            <form action="<?= base_url('auth/register') ?>" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" class="form-control"  name="name" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="nohp" class="form-label">No. Whatsapp</label>
              <input type="number" class="form-control" name="nohp"  id="nohp">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" name="email"  id="email">
            </div>
            <div class="mb-3">
              <label for="password1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password1" id="password1">
            </div>
            <div class="mb-3">
              <label for="password2" class="form-label">Ulangi Password</label>
              <input type="password" class="form-control" name="password2" id="password2">
            </div>
            
            <div class="d-grid gap-2 mt-4">
              <button class="btn btn-warning text-white" type="submit">Daftar Akun</button>
              <p class="mt-2">Sudah memiliki akun?</p>
              <a href="<?= base_url('auth') ?>" class="btn btn-outline-danger" type="button">Login</a>
            </div>
          </form>
          </div>
        </div>
      </div>
      <div class="col col-lg-2">
      </div>
    </div>
    </div>

