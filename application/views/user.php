
        <div class="card mt-4">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>

    <div class="container mt-4 text-white">
      <!-- NAV -->
     <nav class="nav justify-content-center">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active text-danger" id="nav-beranda-tab" data-bs-toggle="tab" data-bs-target="#nav-beranda" type="button" role="tab" aria-controls="nav-beranda" aria-selected="true">
          <img class="mb-1" width="30" height="30" src="https://img.icons8.com/bubbles/30/home-page.png" alt="home-page"/> Beranda</button>
        <button class="nav-link text-danger" id="nav-riwayat-tab" data-bs-toggle="tab" data-bs-target="#nav-riwayat" type="button" role="tab" aria-controls="nav-riwayat" aria-selected="false">
          <img class="mb-1" width="30" height="30" src="https://img.icons8.com/fluency/30/restart.png" alt="restart"/> Riwayat</button>
        <button class="nav-link text-danger" id="nav-topup-tab" data-bs-toggle="tab" data-bs-target="#nav-topup" type="button" role="tab" aria-controls="nav-topup" aria-selected="false">
          <img class="mb-1" width="30" height="30" src="https://img.icons8.com/3d-fluency/30/money-bag.png" alt="money-bag"/> Top Up</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <!-- CONTENT 1 -->
      <div class="tab-pane fade show active" id="nav-beranda" role="tabpanel" aria-labelledby="nav-beranda-tab" tabindex="0">

        <!--  -->
        <div class="container mt-4">
        <div class="row">
          <div class="col-sm-3">
            <!-- CARD -->
              <div class="card mb-3 text-white text-center">

                <img class="rounded mx-auto d-block mt-3 figure-img img-fluid rounded img-thumbnail" width="60" height="60" src="https://img.icons8.com/papercut/60/user-male-circle.png" alt="user-male-circle"/>
                <small>
                  <img class="mb-2" width="50" height="50" src="https://img.icons8.com/external-bearicons-flat-bearicons/50/external-Newbie-miscellany-texts-and-badges-bearicons-flat-bearicons.png" alt="external-Newbie-miscellany-texts-and-badges-bearicons-flat-bearicons"/>
                </small>
                <div class="card-body">
                  <h5 class="card-title">Hai, <span class="text-info"><?= $user['name'] ?></span></h5>
                  <p class="card-text">
                    <img class="mb-1" width="18" height="18" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/18/external-dial-pad-buttons-of-an-outdated-telephone-layout-phone-color-tal-revivo.png" alt="external-dial-pad-buttons-of-an-outdated-telephone-layout-phone-color-tal-revivo"/>&nbsp;
                    <?= $user['nohp'] ?></p>
                  <p class="card-text">
                    <small class="text-white">Created : <span class="text-success"><?= $user['date_created'] ?></span> ago</small>
                  </p>
                </div>
              </div>
            <!-- AKHIR CARD -->
          </div>
          <div class="col-sm-9">
            <!-- CARD -->

            <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card text-white text-center">
                <div class="card-body">
                  <h5 class="card-title">
                  <img class="mb-2" width="26" height="26" src="https://img.icons8.com/external-febrian-hidayat-flat-febrian-hidayat/26/external-Gems-fantasy-and-rpg-febrian-hidayat-flat-febrian-hidayat.png" alt="external-Gems-fantasy-and-rpg-febrian-hidayat-flat-febrian-hidayat"/>
                  Diamond saya</h5>
                  <hr>
                  <h5 class="card-text">Rp. 120.020.2020 <span>
                    <img class="mb-2" width="26" height="26" src="https://img.icons8.com/arcade/26/diamond.png" alt="diamond"/>
                  </span>
                </h5>
                <a href="#" class="btn btn-warning text-white d-grid gap-2 mt-3">Top Up</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white text-center">
                <div class="card-body">
                  <h5 class="card-title">
                    <img class="mb-2" width="30" height="30" src="https://img.icons8.com/external-creatype-flat-colourcreatype/30/external-cart-business-and-finance-creatype-flat-colourcreatype-2.png" alt="external-cart-business-and-finance-creatype-flat-colourcreatype-2"/> Total Belanja Saya</h5>
                  <hr>
                  <h5 class="card-text">Rp. 120.020.2020 <span>
                    <img class="mb-1" width="35" height="35" src="https://img.icons8.com/emoji/35/dollar-banknote-emoji.png" alt="dollar-banknote-emoji"/>
                  </span>
                </h5>
                </div>
              </div>
            </div>


          </div>
          <!-- CARD 2  -->

          <div class="card mt-3 text-white">
          <div class="card-header">
            <img class="mb-1" width="30" height="30" src="https://img.icons8.com/external-beshi-glyph-kerismaker/30/external-Cart-digital-marketing-beshi-glyph-kerismaker.png" alt="external-Cart-digital-marketing-beshi-glyph-kerismaker"/> Pesanan Saya
          </div>
          <div class="card-body text-center">
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <h1 class="text-info">0</h1>
                <p class="text-info">Total pesanan</p>
              </li>
              <li class="nav-item">
                <h1 class="text-white">0</h1>
                <p class="text-danger">Belum Bayar</p>
              </li>
              <li class="nav-item">
                <h1 class="text-white">0</h1>
                <p class="text-danger">Pending</p>
              </li>
              <li class="nav-item">
                <h1 class="text-success">0</h1>
                <p class="text-success">Success</p>
              </li>
            </ul>
          </div>
        </div>

          <!-- AKHIR CARD 2 -->

           <!-- CARD 3 -->

          <div class="card mt-3 text-white">
          <div class="card-body">
           <!-- FORM -->

           <form>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="email" class="form-control" id="username" aria-describedby="username" placeholder="LieurCoding" readonly>
              <div id="username" class="form-text text-white">username tidak bisa diganti</div>
            </div>
            <div class="mb-3">
              <label for="no" class="form-label">No Handphone</label>
              <input type="number" class="form-control" id="no">
            </div>
            <div class="d-grid gap-2">
            <button class="btn btn-warning text-white" type="button">Simpan</button>
            <button class="btn btn-danger" type="reset">Batal</button>
          </div>
          </form>

           <!-- AKHIR FORM -->
          </div>
        </div>

          <!-- AKHIR CARD 3 -->

          <!-- CARD 4 -->

          <div class="card mt-3 text-white">
          <div class="card-body">
           <!-- FORM -->

           <form>
            <div class="mb-3">
              <label for="username" class="form-label">Password Lama</label>
              <input type="password" class="form-control" id="password" aria-describedby="password">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Password Baru</label>
              <input type="password" class="form-control" id="password" aria-describedby="password">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Konfirmasi Password Lama</label>
              <input type="password" class="form-control" id="password" aria-describedby="password">
            </div>
            <div class="d-grid gap-2">
            <button class="btn btn-warning text-white" type="button">Simpan</button>
            <button class="btn btn-danger" type="reset">Batal</button>
          </div>
          </form>

           <!-- AKHIR FORM -->
          </div>
        </div>

          <!-- AKHIR CARD 4 -->
        </div>

            <!-- AKHIR CARD -->
          </div>
          
      </div>

        <!--  -->

      </div>
      <!-- AKHIR CONTENT 1 -->

      <!-- ////////////////////////////// -->
      <!-- CONTENT 2 -->
      <div class="tab-pane fade" id="nav-riwayat" role="tabpanel" aria-labelledby="nav-riwayat-tab" tabindex="0">

         <!--  -->
        <div class="container mt-4">
        <div class="row">
          <div class="col-sm-3">
            <!-- CARD -->
              <div class="card mb-3 text-white text-center">

                <img class="rounded mx-auto d-block mt-3 figure-img img-fluid rounded img-thumbnail" width="60" height="60" src="https://img.icons8.com/papercut/60/user-male-circle.png" alt="user-male-circle"/>
                <small>
                  <img class="mb-2" width="50" height="50" src="https://img.icons8.com/external-bearicons-flat-bearicons/50/external-Newbie-miscellany-texts-and-badges-bearicons-flat-bearicons.png" alt="external-Newbie-miscellany-texts-and-badges-bearicons-flat-bearicons"/>
                </small>
                <div class="card-body">
                  <h5 class="card-title">Hai, LieurCoding</h5>
                  <p class="card-text">
                    <img class="mb-1" width="20" height="20" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/20/external-dial-pad-buttons-of-an-outdated-telephone-layout-phone-color-tal-revivo.png" alt="external-dial-pad-buttons-of-an-outdated-telephone-layout-phone-color-tal-revivo"/>&nbsp;
                    081381988665</p>
                  <p class="card-text">
                    <small class="text-white">Last updated 3 mins ago</small>
                  </p>
                </div>
              </div>
            <!-- AKHIR CARD -->
          </div>
          <div class="col-sm-9">
           <!-- CARD RIWAAYAT -->

           <div class="card text-white">
            <div class="card-header">
             <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            </div>
            <div class="card-body">
              <!-- TABLE -->
              <div class="table-responsive">
              <table class="table table-light">
                <thead>
                  <tr>
                    <th scope="col">No Transaksi</th>
                    <th scope="col">Produk</th>
                    <th scope="col">ID Player</th>
                    <th scope="col">Harga</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>no data</td>
                    <td>no data</td>
                    <td>no data</td>
                    <td>no data</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
              <!-- AKHIR TABLE -->
              
            </div>
          </div>

           <!-- AKHIR CARD RIWAYAT -->
      </div>

        <!--  -->

      </div>
  </div>
</div>
      <!-- AKHI CONTENT 2 -->

      <!-- CONTENT 3 -->
      <div class="tab-pane fade" id="nav-topup" role="tabpanel" aria-labelledby="nav-topup-tab" tabindex="0">

        <!-- GRID -->
        <div class="container mt-4">
        <div class="row">
          <div class="col-sm-12">
            <!-- CARD CONTENT -->
            <div class="card shadow">
            <div class="card-header">
              <div class="input-group mt-1">
              <button type="button" class="btn btn-outline-warning text-white">
              <img width="25" height="25" class="mb-1" src="https://img.icons8.com/nolan/25/parsec-games.png" alt="parsec-games"/> Cari Games
            </button>
              <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">
                  <img width="20" height="20" class="mb-1" src="https://img.icons8.com/flat-round/20/star--v1.png" alt="star--v1"/> Terpopuler</a></li>
                <li><a class="dropdown-item" href="#">
                <img width="20" height="20" class="mb-1" src="https://img.icons8.com/arcade/20/loyalty-card.png" alt="loyalty-card"/>
                  Voucher</a></li>
              </ul>
              <input type="text" class="form-control form text-white" aria-label="Text input with segmented dropdown button" placeholder="cek game yang kamu cari...">
            </div>
            </div>
            <div class="card-body">
              <!-- CARD GALERI TOPUP -->

              <div class="row">
                <div class="col-sm-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="">
                    <img src="<?= base_url('assets') ?>/img/galeri/1.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow galeri" alt="...">
                    </a>
                </div>

                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" class="col-sm-2 text-center">
                  <a href="mobile-legends.html">
                  <img src="<?= base_url('assets') ?>/img/galeri/2.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div class="col-sm-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/3.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div class="col-sm-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/4.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div class="col-sm-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/5.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div class="col-sm-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/6.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/7.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                 <img src="<?= base_url('assets') ?>/img/galeri/8.jpg" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                 <img src="<?= base_url('assets') ?>/img/galeri/9.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                  <img src="<?= base_url('assets') ?>/img/galeri/10.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                 <img src="<?= base_url('assets') ?>/img/galeri/11.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

                <div data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000" class="col-sm-2 mt-3">
                  <a href="">
                 <img src="<?= base_url('assets') ?>/img/galeri/12.png" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow" alt="...">
                  </a>
                </div>

              </div>



              <!-- AKHIR CARD GALERI TOPUP -->
            </div>
          </div>

            <!-- AKHIR CARD CONTENT -->
          </div>
        </div>
      </div>

      <!-- AKHIR GRID -->

        

      </div>
      <!-- AKHIR CONTENT 3 -->
    </div>
    <!-- AKHIR NAVBAR -->
    </div>


    
    

      
    

    