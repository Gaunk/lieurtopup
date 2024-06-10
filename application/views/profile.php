
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
                                            <h4 class="mb-1">Rp. 12099</h4>
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
                             <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-fluid">
                                <!-- .card-body -->
                                <div class="card-body text-center">
                                    <!-- .user-avatar -->
                                    <a href="user-profile.html" class="user-avatar user-avatar-xl my-3">
                                      <img src="<?= base_url('assets/_temp/assets/images/profile/' . $user['image']) ?>" alt="User Avatar" class="rounded-circle user-avatar-xl">
                                          </a>
                                    <!-- /.user-avatar -->
                                    <h3 class="card-title mb-2 text-truncate">
                                        <span class="text-info">
                                            <?= $user['name'] ?>
                                        </span>
                                        </h3>
                                    <h6 class="card-subtitle text-muted mb-3"> <?= $user['email'] ?> </h6>
                                    <p>
                                        <a href="<?= base_url('user') ?>" class="btn btn-primary circle">View Profile
                                      <i class="fa fa-arrow-right ml-2"></i>
                                            </a>
                                    </p>
                                </div>
                                <!-- /.card-body -->
                                <!-- .card-footer -->
                                <footer class="card-footer p-0">
                                    <!-- .card-footer-item -->
                                    <div class="card-footer-item card-footer-item-bordered">
                                        <!-- .metric -->
                                        <div class="metric">
                                            <h6 class="metric-value"> 54 </h6>
                                            <p class="metric-label"> Projects </p>
                                        </div>
                                        <!-- /.metric -->
                                    </div>
                                    <!-- .card-footer-item -->
                                    <!-- /.card-footer-item -->
                                    <div class="card-footer-item card-footer-item-bordered">
                                        <!-- .metric -->
                                        <div class="metric">
                                            <h6 class="metric-value"> 53 </h6>
                                            <p class="metric-label"> Completed </p>
                                        </div>
                                        <!-- /.metric -->
                                    </div>
                                    <!-- .card-footer-item -->
                                    <!-- /.card-footer-item -->
                                    <div class="card-footer-item card-footer-item-bordered">
                                        <!-- .metric -->
                                        <div class="metric">
                                            <h6 class="metric-value"> 2 </h6>
                                            <p class="metric-label"> On Going </p>
                                        </div>
                                        <!-- /.metric -->
                                    </div>
                                    <!-- /.card-footer-item -->
                                </footer>
                                <!-- /.card-footer -->
                            </div>
                        </div>
                      
                            <!-- ============================================================== -->
                             <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            
                            <div class="card">

                                <h5 class="card-header text-center font-weight-bold text-secondary">Edit Profile</h5>
                                
                                <div class="card-body">
                                    <?= form_open_multipart('admin/profile'); ?>
                                        
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input id="email" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control" value="<?= $user['email'] ?>" readonly>

                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input name="name" id="name" type="text" placeholder="Name" required="" class="form-control" value="<?= $user['name'] ?>">
                                        </div>
                                        <img src="<?= base_url('assets/_temp/assets/images/profile/' . $user['image']) ?>" alt="User Avatar" class="rounded-circle user-avatar-lg mb-2">
                                        <div class="form-group">
                                             <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Images</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button  type="submit" class="btn btn-space btn-primary btn-sm" onclick="sWeet()">Submit</button>
                                                    <button type="reset" class="btn btn-space btn-danger btn-sm">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header text-center font-weight-bold text-secondary">Change Password</h5>
                                <div class="card-body">
                                    <form class="needs-validation" action="<?= base_url('admin/changePassword') ?>" id="basicform" data-parsley-validate="" method="post" novalidate>
                                        
                                        <div class="form-group">
                                            <label for="password">Password Lama</label>
                                            <input name="current_password" id="current_password" type="password" placeholder="Password Lama" class="form-control" required>
                                            <div class="invalid-feedback">
                                              <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                    Mantaap!
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password1">Password Baru</label>
                                            <input name="new_password1" id="new_password1" type="password" placeholder="Password Baru" class="form-control" required>
                                            <div class="valid-feedback">
                                                    Mantaap!
                                                </div>
                                            <div class="invalid-feedback">
                                              <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="new_password2">Konfirmasi Password</label>
                                            <input name="new_password2" id="new_password2" data-parsley-equalto="#inputPassword" type="password" placeholder="Konfirmasi Password" class="form-control" required>
                                                <div class="valid-feedback">
                                                    Mantaap!
                                                </div>
                                            <div class="invalid-feedback">
                                              <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary btn-sm">Submit</button>
                                                    <button type="reset" class="btn btn-space btn-danger btn-sm">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Image</th>
                                                        <th class="border-0">Product Name</th>
                                                        <th class="border-0">Product Id</th>
                                                        <th class="border-0">Quantity</th>
                                                        <th class="border-0">Price</th>
                                                        <th class="border-0">Order Time</th>
                                                        <th class="border-0">Customer</th>
                                                        <th class="border-0">Status</th>
                                                        <th class="border-0">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="m-r-10">
                                                            	<img src="<?= base_url('assets/_temp/') ?>assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td>Product #1 </td>
                                                        <td>id000001 </td>
                                                        <td>20</td>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018 01:22:12</td>
                                                        <td>Patricia J. King </td>
                                                        <td>
                                                        	<span class="badge-dot badge-brand mr-1"></span>Unpaid 
                                                        </td>
                                                        <td>
                                                        	<a href="">
                                                        		<i class="far fa-trash-alt"></i>
                                                        	</a>
                                                        	<a href="" class="text-success">
                                                        		<i class="fas fa-edit"></i>
                                                        	</a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td colspan="10"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                            <!-- ============================================================== -->
                            
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
            