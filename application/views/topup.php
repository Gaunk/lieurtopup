
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce <?= $title ?> </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>" class="breadcrumb-link">Admin</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                             <!-- ============================================================== -->
                        <!-- four widgets   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total views   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Views</h5>
                                        <h2 class="mb-0"> 10,28,056</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total views   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total followers   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Followers</h5>
                                        <h2 class="mb-0"> 24,763</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total followers   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- partnerships   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Partnerships</h5>
                                        <h2 class="mb-0">14</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end partnerships   -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- total earned   -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Earned</h5>
                                        <h2 class="mb-0"> $149.00</h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end total earned   -->
                        <!-- ============================================================== -->
                        </div>

                        <div class="row">
                            <!-- ============================================================== -->
                             <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <?= $this->session->flashdata('pesan')?>
                                <div class="card">
                                    <h5 class="card-header">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTopup">
                                            <i class="fas fa-plus-circle"></i> Tambah Diamond
                                        </button>
                                    </h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th class="border-0">#</th>
                                                <th class="border-0">Nama Games</th>
                                                <th class="border-0">Images</th>
                                                <th class="border-0">Event Diamond</th>
                                                <th class="border-0">Diamond</th>
                                                <th class="border-0">Harga</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($diamond as $key): ?>
                                                
                                            
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $key['name_games'] ?></td>
                                                <td class="text-center">
                                                    <img src="<?= base_url('assets/img/diamond/' . $key['gambar']) ?>" class="img-fluid img-fluid" style="width: 40px; height: 40px;">
                                                </td>
                                                <td><?= $key['event_diamond'] ?></td>
                                                <td>
                                                    <?= $key['diamond'] ?>
                                                </td>
                                                <td>
                                                    <?= $key['price'] ?>
                                                </td>
                                                <td>
                                                    <a href="">hapus</a>
                                                    <a href="">delete</a>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="border-0">#</th>
                                                <th class="border-0">Nama Games</th>
                                                <th class="border-0">Event Diamond</th>
                                                <th class="border-0">Diamond</th>
                                                <th class="border-0">Harga</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                            <!-- ============================================================== -->
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- ============================================================== -->
                        <!-- card varience  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="card-variance">
                                    <h3 class="section-title"> Vendor <?= $title ?> </h3>
                                    <p>Menambahkan diamond games dari luar. </p>
                                </div>
                            </div>
                            <?php foreach ($diamond as $key ): ?>
                                
                        
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="card-title"><?= $key['name_games'] ?></h3>
                                        
                                        <img class="img-fluid mb-4" src="<?= base_url('assets/img/diamond/' . $key['gambar']) ?>" alt="Card image cap">
                                        <p class="card-text"><?= $key['event_diamond'] ?>.</p>
                                        <a class="card-link">
                                            <img class="mb-2" width="20" height="20" src="https://img.icons8.com/external-android-line-2px-amoghdesign/20/external-forex-currency-minima-24px-android-line-2px-amoghdesign-3.png" alt="external-forex-currency-minima-24px-android-line-2px-amoghdesign-3"/>
                                         <?= $key['price'] ?></a>
                                        <a class="card-link">
                                            <img width="20" height="20" src="https://img.icons8.com/arcade/20/ruby-gemstone.png" alt="ruby-gemstone"/>
                                            <?= $key['diamond'] ?></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end card varience  -->
                        <!-- ============================================================== -->
                        </div>
                      
                            
                            
                        </div>
                      

                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-12 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">


                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- KALAU MAU DITAMBAHKAN KELAS ATAU BLOCK  -->
                    </div>
                </div>
            </div>
            

                                        <!-- Modal -->
                                            <div class="modal fade" id="modalTopup" tabindex="-1" aria-labelledby="gamesModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="gamesModalLabel">Tambah Diamond Baru</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <!-- FORM -->

                                                    <form class="form-horizontal" action="<?= base_url('admin/topup') ?>" method="post" enctype="multipart/form-data">
                                                         <div class="form-group">
                                                          <label for="name_games">Nama Games</label>
                                                        <select class="form-control" name="name_games" id="name_games">
                                                            <option required>-- Pilih --</option>
                                                            <option value="Mobile Legends">Mobile Legends</option>
                                                            
                                                        </select>
                                                    </div>
                                                      <div class="form-group">
                                                        <label for="event_diamond">Nama event diamond</label>
                                                        <input type="text" class="form-control" name="event_diamond" id="event_diamond" aria-describedby="diamondHelp" required>

                                                      </div>

                                                      <div class="input-group mb-3">
                                                        <div class="input-group-prepend"><span class="input-group-text">
                                                            <img width="30" height="30" src="https://img.icons8.com/stickers/30/sparkling-diamond.png" alt="sparkling-diamond"/>
                                                        </span>
                                                    </div>
                                                        <input type="number" name="diamond" class="form-control">
                                                        <div class="input-group-append"></div>
                                                    </div>
                                                      <div class="input-group mb-3">
                                                        <div class="input-group-prepend"><span class="input-group-text">
                                                        <img width="30" height="30" src="https://img.icons8.com/external-android-line-2px-amoghdesign/30/external-forex-currency-minima-24px-android-line-2px-amoghdesign-3.png" alt="external-forex-currency-minima-24px-android-line-2px-amoghdesign-3"/>
                                                    </span></div>
                                                        <input type="number" name="price" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                    </div>

                                                    <div class="form-group">
                                                         <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                            <label class="custom-file-label" for="gambar">Images</label>
                                                        </div>
                                                    </div>
                                                   
                                                  </div>

                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-sm" name="upload">Add</button>
                                                  </div>
                                                  </form>

                                                    <!-- AKHIR FORM -->
                                                </div>
                                              </div>
                                            </div>