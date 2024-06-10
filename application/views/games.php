



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalGames">
                                            <i class="fas fa-plus-circle"></i> Tambah Games
                                        </button>
                                    </h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th class="border-0">#</th>
                                                <th class="border-0">Games</th>
                                                <th class="border-0">Gambar</th>
                                                <th class="border-0">Games Id</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0">Kategori</th>
                                                <th class="border-0">Url</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($games as $key): ?>
                                                
                                            
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $key['name_games'] ?></td>
                                                <td class="text-center">
                                                    <img src="<?= base_url('assets/img/games/' . $key['gambar']) ?>" class="img-thumbnail img-fluid" style="width: 112px; height: 80px;">
                                                </td>
                                                <td><?= $key['id_games'] ?></td>
                                                <td><?= $key['status'] ?></td>
                                                <td><?= $key['kategori'] ?></td>
                                                <td>
                                                    <a class="btn-sm btn-info btn" href="<?= $key['url'] ?>">Check</a>
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
                                                <th class="border-0">Games</th>
                                                <th class="border-0">Gambar</th>
                                                <th class="border-0">Product Id</th>
                                                <th class="border-0">Url</th>
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
                                    <p>Menambahkan vendor games dari luar. </p>
                                </div>
                            </div>
                            <?php foreach ($games as $key ): ?>
                                
                        
                            <!-- grid column -->
                            <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- .card -->
                                <div class="card card-figure">
                                    <!-- .card-figure -->
                                    <figure class="figure">
                                        <!-- .figure-img -->
                                        <div class="figure-img">
                                            <img class="img-fluid " src="<?= base_url('assets/img/games/' . $key['gambar']) ?>" alt="Card image cap">
                                            <div class="figure-tools">
                                                <a href="#" class="tile tile-circle tile-sm mr-auto">
                                                                <span class="oi-data-transfer-download"></span></a>
                                                <span class="badge badge-danger">Illustration</span>
                                            </div>
                                            <div class="figure-action">
                                                <a href="<?= $key['url'] ?>" class="btn btn-block btn-sm btn-primary"><?= $key['kategori'] ?></a>
                                            </div>
                                        </div>
                                        <!-- /.figure-img -->
                                        <!-- .figure-caption -->
                                        <figcaption class="figure-caption">
                                            <h6 class="figure-title"><a href="<?= $key['url'] ?>"><?= $key['name_games'] ?></a></h6>
                                            <p class="text-muted mb-0"> Status : <?= $key['status'] ?> </p>
                                        </figcaption>
                                        <!-- /.figure-caption -->
                                    </figure>
                                    <!-- /.card-figure -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /grid column -->
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
                                            <div class="modal fade" id="modalGames" tabindex="-1" aria-labelledby="gamesModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="gamesModalLabel">Tambah Games Baru</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <!-- FORM -->

                                                    <form class="form-horizontal" action="<?= base_url('admin/games') ?>" method="post" enctype="multipart/form-data">
                                                      <div class="form-group">
                                                        <label for="name_games">Games</label>
                                                        <input type="text" class="form-control" name="name_games" id="name_games" aria-describedby="titleHelp" required>

                                                      </div>

                                                      <div class="form-group">
                                                        <label for="slug">Slug</label>
                                                        <input type="text" class="form-control" name="slug" id="slug" aria-describedby="titleHelp" required>

                                                      </div>

                                                        <div class="form-group">
                                                          <label for="kategori">Kategori</label>
                                                        <select class="form-control" name="kategori" id="kategori">
                                                            <option required>-- Pilih --</option>
                                                            <option value="MOBA">MOBA</option>
                                                            <option value="RPG">RPG</option>
                                                            <option value="MMORPG">MMORPG</option>
                                                        </select>
                                                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>

                                                    <div class="form-group">
                                                          <label for="status">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option required>-- Pilih --</option>
                                                            <option value="Aktif">Aktif</option>
                                                            <option value="Non Aktif">Non Aktif</option>
                                                            <option value="Maintenance">Maintenance</option>
                                                        </select>
                                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="url">Url</label>
                                                        <input type="text" class="form-control" name="url" id="url" aria-describedby="titleHelp" required>
                                                        <p><i>contoh : https://example.com</i></p>

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