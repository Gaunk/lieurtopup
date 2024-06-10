
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
    <?php if ($this->session->flashdata('pesan')): ?>
        
    <?php endif ?>
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
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">Rp. 12099</h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Affiliate Revenue</h5>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">Rp. 12099</h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Refunds</h5>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">Rp. 0</h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Avg. Revenue Per User</h5>
                                        <div class="metric-value d-inline-block">
                                            <h4 class="mb-1">$28000</h4>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->

                            <div class="col-xl-12 col-lg-7 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Total Revenue</h5>
                                    <div class="card-body">
                                        <div id="morris_totalrevenue"></div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                                    </div>
                                </div>
                            </div>
                             <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalMenu">
                                            <i class="fas fa-plus-circle"></i> Tambah APi/Rest APi
                                        </button>
                                    </h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>APi/Rest APi</th>
                                                        <th>Games</th>
                                                        <th>Gambar</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($api as $key): ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><a href="<?= $key['name'] ?>"><?= $key['name'] ?></a></td>
                                                        <td><?= $key['game'] ?></td>
                                                        <td><?= $key['gambar'] ?></td>
                                                        <td>
                                                            <a href="<?= base_url("admin/hapusApi/" . $key['id']) ?>" data-toggle="modal" data-target="#hapusDataModal">
                                                                <i class="far fa-trash-alt"></i> Hapus
                                                            </a>
                                                                    <a href="" class="text-success">
                                                                <i class="fas fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                    </tr>

                                            

                                                        <?php endforeach ?>
                                                                   
                                                                </tfoot>
                                                               </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ============================================================== -->
                                            <!-- end basic table  -->
                                            <!-- ============================================================== -->
                                                    
                                                </div>
                                              

                                                <div class="row">
                                                    
                                                </div>
                                                <div class="row">
                                                    
                                                </div>
                                                <!-- KALAU MAU DITAMBAHKAN KELAS ATAU BLOCK  -->
                                            </div>
                                        </div>
                                   

                                            <!-- Modal -->
                                            <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah APi/Rest APi Baru</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <!-- FORM -->

                                                    <form action="<?= base_url('admin/api') ?>" method="post" id="createForm" onsubmit="event.preventDefault(); handleFormSubmit(this, 'Data berhasil di tambahkan!')">
                                                        <input type="hidden" name="tanggal" value="<?= date("Y-m-d H:i:s"); ?>">
                                                      <div class="form-group">
                                                        <label for="name">Nama APi/Rest APi</label>
                                                        <input type="text" class="form-control" name="name" id="name" aria-describedby="titleHelp" required>
                                                        <p>https://v1.apigames.id/merchant/</p>

                                                      </div>

                                                      <div class="form-group">
                                                        <label for="game">Games</label>
                                                        <input type="text" class="form-control" name="game" id="game" aria-describedby="titleHelp" required>

                                                      </div>
                                                        <div class="form-group">
                                                          <label for="kategori">Kategori</label>
                                                        <select class="form-control" name="kategori" id="kategori">
                                                            <option>-- Pilih --</option>
                                                            <option value="Mobile Legends">Mobile Legends</option>
                                                            <option value="Call Off Duty">Call Off Duty</option>
                                                            <option value="Free Fire">Free Fire</option>
                                                            <option value="PUBG Global">PUBG - Global</option>
                                                            <option value="PUBG Indonesia">PUBG Indonesia</option>
                                                        </select>
                                                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div><div class="form-group">
                                                         <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image" name="image">
                                                            <label class="custom-file-label" for="image">Images</label>
                                                        </div>
                                                    </div>
                                                      
                                                      
                                                  </div>

                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary sWeet ">Add</button>
                                                  </div>
                                                  </form>

                                                    <!-- AKHIR FORM -->
                                                </div>
                                              </div>
                                            </div>


                                            <!-- Modal PENGHAPUSAN-->
                                            <div class="modal fade" id="hapusDataModal" tabindex="-1" aria-labelledby="hapusDataModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <h3 class="text-center">
                                                        <img width="60" height="60" src="https://img.icons8.com/fluency/60/high-priority--v1.png" alt="high-priority--v1"/>
                                                    </h3>
                                                    <h3 class="text-center text-muted">Are you sure?</h3>
                                                    <h5 class="text-center text-muted">Kamu ingin menghapus data ini</h5>
                                                    <div class="row justify-content-md-center">

                                                        <div class="col col-lg-5">
                                                          <button type="button" data-dismiss="modal" class="btn btn-success btn-block btn-sm">Batal</button>
                                                        </div>
                                                    
                                                        <div class="col col-lg-5">
                                                          <a class="btn btn-danger btn-block btn-sm" href="<?= base_url('admin/hapusapi/' . $key['id']) ?>">Delete</a>
                                                        </div>
                                                      </div>
                                                    
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>