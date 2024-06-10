

        <div class="card">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>


    <!-- CAROUSEL -->
    <div class="container mt-4">
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets') ?>/img/slider/slider-1.jpg" class="d-block w-100 img-fluid rounded float-star" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets') ?>/img/slider/slider-2.jpg" class="d-block w-100 img-fluid rounded float-star" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets') ?>/img/slider/slider-3.png" class="d-block w-100 img-fluid rounded float-star" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
    <!-- AKHIR CAROUSEL -->

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

                <?php foreach ($games as $key ): ?>



                <div class="col-sm-2 mb-3 mb-sm-0 p-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                  <a href="" class="text-decoration-none">
                  <div class="card text-center text-white">
                    <img src="<?= base_url('assets/img/games/' . $key['gambar']) ?>" class="card-img-top w-100 rounded float-start img-fluid hvr-grow-shadow img-thumbnail shadow galeri" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white"><?= $key['name_games'] ?></h5>
                      <p class="card-text text-white">Status : <?= $key['status'] ?></p>
                      <a href="<?= base_url('id/' . $key['slug']) ?>" class="btn btn-sm btn-danger text-white mt-1">
                      <img class="mb-1" width="23" height="23" src="https://img.icons8.com/arcade/23/diamond.png" alt="diamond"/> Topup</a>
                    </div>
                  </div>
                </a>
                </div>
              <?php endforeach ?>

              </div>



              <!-- AKHIR CARD GALERI TOPUP -->
            </div>
          </div>

            <!-- AKHIR CARD CONTENT -->
          </div>
        </div>
        
      </div>

      <!-- AKHIR GRID -->

      