<!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Lieur Topup. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Concept</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>assets/libs/js/dashboard-ecommerce.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/_temp/') ?>/assets/vendor/datatables/js/data-table.js"></script>
    <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    // Sweet Alert
const flashData = $('.flash-data').data('pesan');

if (flashData) {
    Swal({
        title: 'Sukses',
        text: 'Data Berhasil ' + flashData,
        type: 'success'
    });
}

// Sweet Alert
const flashGagal = $('.flash-data-gagal').data('pesan');

if (flashGagal) {
    Swal({
        title: 'Gagal',
        text: 'Data Gagal ' + flashGagal,
        type: 'error'
    });
}



// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Apakah anda yakin',
        text: "data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

// Data table
// $(function () {
//     $("#dataBerita").DataTable({
//         "responsive": true,
//         "lengthChange": false,
//         "autoWidth": false,
//         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//         "paging": true,
//         "lengthChange": false,
//         "searching": false,
//         "ordering": true,
//         "info": true,
//         "autoWidth": false,
//         "responsive": true,
//     });
// });

$(document).ready(function () {
    $("#dataBerita").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataGalery").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataFile").DataTable({
        order: [[1, "desc"]],
    });
});

$(document).ready(function () {
    $("#dataPages").DataTable({
        order: [[1, "desc"]],
    });
});

// Summernote
$(function () {
    // Summernote
    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            // ['fontsize', ['fontsize']],
            // ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link']]
        ]
    });
})

// Preview sampul
// function previewImg() {
//     const sampul = document.querySelector("#gambar");
//     const sampulLabel = document.querySelector(".costum-file-label");
//     const imgPreview = document.querySelector(".img-preview");

//     sampulLabel.textContent = sampul.files[0].name;

//     const fileSampul = new FileReader();
//     fileSampul.readAsDataURL(sampul.files[0]);

//     fileSampul.onload = function (e) {
//         imgPreview.src = e.target.result;
//     };
// }

// function previewGmb() {
//     const sampul = document.querySelector("#sampul");
//     const sampulLabel = document.querySelector(".custom-file-input");
//     const imgPreview = document.querySelector(".img-preview");

//     sampulLabel.textContent = sampul.files[0].name;

//     const fileSampul = new FileReader();
//     fileSampul.readAsDataURL(sampul.files[0]);

//     fileSampul.onload = function (e) {
//         imgPreview.src = e.target.result;
//     };
// }

function previewGmb() {
    const sampul = document.querySelector("#image");
    const sampulLabel = document.querySelector(".custom-file-input");
    const imgPreview = document.querySelector(".img-preview");

    sampulLabel.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function (e) {
        imgPreview.src = e.target.result;
    };
}

// Input / Browse file

$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

</script>

    <script type="text/javascript">
        $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });

        
    </script>


    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>

    <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });



                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });

                });
            </script>
</body>
 
</html>