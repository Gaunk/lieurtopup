

    
    <!-- AKHIR NAVBAR -->
        <div class="card">
      <div class="card-body">
      </div>
    </div>
     <div class="card shadow">
      <div class="card-body">
      </div>
    </div>
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
                <li>
                  <a class="dropdown-item" href="#">
                  <img width="20" height="20" class="mb-1" src="https://img.icons8.com/flat-round/20/star--v1.png" alt="star--v1"/> Terpopuler</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                <img width="20" height="20" class="mb-1" src="https://img.icons8.com/arcade/20/loyalty-card.png" alt="loyalty-card"/>
                  Voucher</a>
                </li>
              </ul>
              
              <input type="text" class="form-control form text-white" aria-label="Text input with segmented dropdown button">
            </div>
            </div>
            <div class="card-body">
              <!-- CARD GALERI TOPUP -->

              <div class="container">
                <div class="row">
                  <div class="col-lg-3 mt-2">
                    <!-- 1 of 2 -->
                    <div class="card" style="width: 18rem;">

                    <img src="<?= base_url('/assets/img/games/' . $games['gambar']) ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                      <h5 class="card-title text-white"><?= $games['name_games'] ?></h5>
                      <p class="card-text text-white">Cara Topup : </p>
                     <ul class="list-group list-group-flush ul">
                      <li class="list-group-item text-white saluran">1. Masukkan User ID dan Zone ID Anda, Contoh : 667632423 ( 5246 )</li>
                      <li class="list-group-item text-white saluran">2. Pilih Nominal Diamonds yang kamu inginkan
                      </li>
                      <li class="list-group-item text-white saluran">3. Selesaikan pembayaran</li>
                      <li class="list-group-item text-white saluran">4. Diamonds akan ditambahkan ke akun Mobile Legends kamu</li>
                    </ul>
                    <hr>
                    <p class="text-white">
                      INFORMASI PENTING!</p> 
                      <p class="text-white">
                      Top Up Weekly Diamond Pass

                      Pastikan Level Akun Mobile Legends kamu sudah mencapai level 5
                      Pastikan kamu Top Up di Original Server (Bukan Advanced Server)
                      Kamu tidak bisa Top Up Weekly Diamond jika sudah 0/10 (70 Hari) kalian bisa check di bagian weekly diamond masing masing akun
                      Jika masih 3/10 berarti kalian masih bisa top up 3x lagi
                    </p>
                    </div>
                  </div>

                    <!--  -->
                  </div>
                  <div class="col-lg-9 mt-2">
                    <!-- 2 of 2 -->
                    <div class="card text-white">
                    <div class="card-header">
                      Lengkapi Data
                    </div>
                    <div>
                      
                    <table class="table table-dark table-hover text-center">
                    <thead>
                      <tr class="table-warning">
                        <th scope="col">Nickname</th>
                        <th scope="col">Diamond</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr class="table-secondary">
                            <td id="result"></td>
                            <td>
                              <a href="" class="btn btn-info btn-sm text-white">Top UP</a>
                            </td>
                          </tr>
                          
                    </tbody>
                  </table>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="col">
                        
                        <!--  -->
                        <?= $games['kode'] ?>
                        <!--  -->
                      <p class="mt-2">
                        Untuk mengetahui User ID Anda, silahkan klik menu profile dibagian kiri atas pada menu utama game. User ID akan terlihat dibagian bawah Nama karakter game Anda. Silahkan masukan User ID dan Server ID Anda untuk menyelesaikan transaksi. Contoh: 12345678(1234).
                      </p>
                    </div>
                    </div>
                  </div>
                  <!-- CONTENT CARD ISI DIAMOND -->

                  <div class="card mt-3 text-white">
                  <div class="card-header">
                    Pilih Nominal Layanan
                  </div>
                  <div class="card-body">
                    <!-- DIAMOND PRICE -->
                    <div class="row text-center">

                    <div class="col-sm-3">
                      <div class="card hvr-pulse">
                        <div class="card-body">
                          <input type="radio" class="btn-check" name="price" id="144.099" value="144.099" autocomplete="off">
                          <label class="btn btn-outline-danger text-white fs-6 fw-lighter" for="144.099">Twilight Pass
                          Rp 144.099</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="card hvr-pulse">
                        <div class="card-body">
                          <input type="radio" class="btn-check" name="price" id="27.910" autocomplete="off" value="27.910">
                          <label class="btn btn-outline-danger text-white fs-6 fw-lighter lh-lg" for="27.910">Weekly Diamond Pass (Event Topup +100)
                          Rp 27.910</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="card hvr-pulse">
                        <div class="card-body">
                          <input type="radio" class="btn-check" name="price" id="82.731" autocomplete="off" value="82.731">
                          <label class="btn btn-outline-danger text-white fs-6 fw-lighter" for="82.731">Twilight Pass
                          Rp 82.731</label>
                        </div>
                      </div>
                    </div>

                  </div>

                    <!-- AKHIR DIAMOND PRICE -->



                  </div>
                </div>

                  <!-- AKHIR CONTENT ISI DIAMOND -->

                    <!-- AKHIR CARD ISI DIAMOND -->

                    <!-- DIAMOND PRICE 2 -->
                    <div class="card mt-3 text-white">
                    <div class="card-header">
                      Top Up Diamond
                    </div>
                    <div class="card-body">
                      <!-- 1 -->

                      <!-- CONTENT CARD ISI DIAMOND 2-->

                        <div class="card mt-3 text-white">
                        <div class="card-body">
                          <!-- DIAMOND PRICE -->
                          <div class="row text-center">
                            <?php foreach ($diamond as $key): ?>

                          <div class="col-sm-3 mb-3 mb-sm-0 text-center" style="width: 18rem;">
                            <div class="card hvr-pop">
                              <div class="card-body">
                               <input type="radio" class="btn-check" name="price" id="<?= $key['price']  ?>" autocomplete="off" value="<?= $key['price']  ?>">
                                <label class="btn btn-outline-danger text-white fs-6 fw-lighter" for="<?= $key['price']  ?>">
                                  <?= $key['event_diamond']  ?>

                                Rp. <?= number_format($key['price'], 0, ",", "."); ?>
                              </label>
                              </div>
                            </div>
                          </div>

                          <?php endforeach ?>

                        </div>

                    <!-- AKHIR DIAMOND PRICE 2-->



                  </div>
                </div>

                  <!-- AKHIR CONTENT ISI DIAMOND 2-->
                      <!-- 1 -->
                    </div>
                  </div>
                  <!--  -->
                  <!--  -->
                    <div class="card text-white mt-3 saluran">
                      <div class="card-header">
                        PILIH SALURAN PEMBAYARAN
                      </div>
                      <div class="card-body saluran">
                        <h5 class="card-title">Semua Saluran Pembayaran</h5>

                        <!-- SALURAN PEMBAYARAN -->
                        <div class="accordion accordion-flush saluran" id="accordionFlushExample">
                        <div class="accordion-item saluran text-white">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed saluran text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <img width="30" height="30" src="https://img.icons8.com/color/30/wallet--v1.png" alt="wallet--v1"/>&nbsp; E-Wallet
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              <!-- E-WALLER -->

                              <div class="row">

                              <div class="col-sm-3 text-white mb-3 mb-sm-0">
                                <div class="card text-white hvr-border-fade">

                                  <input type="radio" class="btn-check" autocomplete="off">
                                <label class="btn btn-outline-warning text-white" for="radio">
                                  <img src="<?= base_url('assets/') ?>img/wallet/dana.png" class="img-fluid rounded">
                                </label>
                                  <div class="card-body">
                                    <p id="selectedPrice1"></p>
                                  </div>
                                </div>
                              </div>


                              <div class="col-sm-3 text-white">
                                <div class="card text-white hvr-border-fade">
                                  
                                  <input type="radio" class="btn-check" autocomplete="off">
                                <label class="btn btn-outline-warning text-white" for="radio">
                                  <img src="<?= base_url('assets/') ?>img/wallet/gopay.png" class="img-fluid rounded">
                                </label>
                                  <div class="card-body">
                                    <p id="selectedPrice2"></p>
                                  </div>
                                </div>
                              </div>

                               <div class="col-sm-3 text-white">
                                <div class="card text-white hvr-border-fade">
                                  
                                  <input type="radio" class="btn-check" autocomplete="off">
                                <label class="btn btn-outline-warning text-white" for="warning-outlined-ovo">
                                  <img src="<?= base_url('assets/') ?>img/wallet/ovo.png" class="img-fluid rounded w-100">
                                </label>
                                  <div class="card-body">
                                    <p id="selectedPrice3"></p>
                                  </div>
                                </div>
                              </div>

                               <div class="col-sm-3 text-white">
                                <div class="card text-white hvr-border-fade">

                                  <input type="radio" class="btn-check" name="price" id="warning-outlined-link-aja" autocomplete="off">
                                <label class="btn btn-outline-warning text-white" for="warning-outlined-link-aja">
                                  <img src="<?= base_url('assets/') ?>img/wallet/link-aja.png" class="img-fluid rounded w-100">
                                </label>

                                  <div class="card-body">
                                    <p id="selectedPrice4"></p>
                                  </div>
                                </div>
                              </div>

                            </div>

                              <!-- AKHIR E-WALLET -->
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed saluran text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              <img width="25" height="25" src="https://img.icons8.com/external-smashingstocks-flat-smashing-stocks/25/external-bank-city-buildings-smashingstocks-flat-smashing-stocks.png" alt="external-bank-city-buildings-smashingstocks-flat-smashing-stocks"/>&nbsp; Transfer Bank
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body text-white saluran">
                              <!-- BANK -->

                              <div class="row">

                              <div class="col-sm-2 text-white mb-3 mb-sm-0">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/bca.png" class="img-fluid rounded">
                                  <div class="card-body">
                                    <p id="selectedPrice5"></p>
                                  </div>
                                </div>
                                </a>
                              </div>

                              <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/bni.png" class="img-fluid rounded">
                                  <div class="card-body">
                                    <p id="selectedPrice6"></p>
                                  </div>
                                </div>
                                </a>
                              </div>

                               <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/bri.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice7"></p>
                                  </div>
                                </div>
                                </a>
                              </div>

                               <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/mandiri.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice8"></p>
                                  </div>
                                </div>
                                </a>
                              </div>

                              <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/mega.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice9"></p>
                                  </div>
                                </div>
                                </a>
                              </div>


                               <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/bank/cimb-niaga.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice10"></p>
                                  </div>
                                </div>
                                </a>
                              </div>



                            </div>

                              <!-- AKHIR BANK -->
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed saluran text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              <img width="30" height="30" src="https://img.icons8.com/arcade/30/shop.png" alt="shop"/>&nbsp; OTC Non Bank
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body saluran text-white">
                              <!-- NON BANK -->

                              <div class="row">

                              

                              <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/non-tunai/alfamart.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice11"></p>
                                  </div>
                                </div>
                                </a>
                              </div>


                               <div class="col-sm-2 text-white">
                                <a href="">
                                <div class="card text-white hvr-border-fade">
                                  <img src="<?= base_url('assets/') ?>img/non-tunai/indomaret.png" class="img-fluid rounded w-100">
                                  <div class="card-body">
                                    <p id="selectedPrice12"></p>
                                  </div>
                                </div>
                                </a>
                              </div>



                            </div>

                              <!-- AKHIR NON BANK -->
                            </div>
                          </div>
                        </div>
                      </div>
                        <!-- AKHIR SALURAN PEMBAYARAN  -->
                        <div class="card">
                          <div class="d-grid gap-2 mt-4">
                            
                              <div class="form-group">
                                <input id="no_wa" type="number" class="form-control" placeholder="Masukan No. Whatsapp">
                            </div>
                            <button class="btn btn-warning text-white mt-4" type="submit">Beli Sekarang</button>
                           </form>
                        
                      </div>
                      </form>
                        </div>
                      </div>
                    </div>
                    <!--  -->
                    <!--  -->

                    <!-- AKHIR DIAMOND PRICE 2 -->
                  </div>
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
