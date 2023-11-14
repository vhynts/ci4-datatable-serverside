<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Select2 css -->
<link href="<?= base_url('assets/css/vendor/select2.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Daterangepicker css -->
<link href="<?= base_url('assets/css/vendor/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Touchspin css -->
<link href="<?= base_url('assets/css/vendor/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Datepicker css -->
<link href="<?= base_url('assets/css/vendor/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Bootstrap Timepicker css -->
<link href="<?= base_url('assets/css/vendor/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css" />

<!-- Flatpickr Timepicker css -->
<link href="<?= base_url('assets/css/vendor/flatpickr.min.css'); ?>" rel="stylesheet" type="text/css" />

<link href="<?= base_url('assets/css/vendor/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/responsive.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedColumns.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedHeader.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/buttons.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/select.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />

<style>
    .dataTables_filter {
        display: none;
    }

    /* DISABLE DATATABLE SEARCH */
</style>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <?php
            #$sub_title = "Master";
            #$page_title = "Daftar Item";
            #include 'partials/page-title.php'; 
            ?>

            <div class="row">
                <div class="col-sm">
                    <h4 class="page-title mt-3"><?php isset($page_title) ? print $page_title : ''; ?></h4>
                </div>
                <!-- 
                <div class="col-sm">
                    <a href="purchase-invoice" class="btn btn-primary  float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Pembelian</a>
                </div> -->
                <!-- <div class="col-12">
                    <button type="button" class="btn btn-success rounded-pill float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
                </div> -->

            </div>




            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">

                            <div class="row">
                                <!-- <input type="text" id="search"> -->
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                                        <input type="text" id="search" class="form-control" placeholder="Cari No. Transaksi / Nama Supplier" oninput="let p = this.selectionStart; this.value = this.value.toUpperCase();this.setSelectionRange(p, p);">
                                    </div>
                                </div>

                                <!-- <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="Cari No. Transaksi">
                                    </div>
                                </div> -->
                                <div class="col-sm-3">
                                    <!-- <div class="input-group"> -->
                                    <!-- <div class="input-group-text"><i class="bi bi-calendar-date"></i></div> -->
                                    <!-- <input type="text" id="range-datepicker" class="form-control" placeholder="Tanggal Transaksi"> -->
                                    <div class="mb-1 position-relative" id="datepicker4">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                                            <input type="text" name="date1" id="date1" value="" class="form-control" placeholder="Tanggal Awal" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker4">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-3">

                                    <div class="mb-1 position-relative" id="datepicker5">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-calendar-date"></i></div>
                                            <input type="text" name="date2" id="date2" value="" class="form-control" placeholder="Tanggal Akhir" data-provide="datepicker" data-date-autoclose="true" data-date-container="#datepicker5">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-2">

                                    <!-- <label for="example-select" class="form-label">Lokasi</label> -->

                                    <select name="location" id="location" class="form-select mb-1">
                                        <option value="">Semua Lokasi</option>
                                        <?php foreach ($location as $k) : ?>
                                            <option value="<?= $k['kodekantor'] ?>"><?= $k['kodekantor'] ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <!-- <div class="col-sm">
                                    <button type="button" class="btn btn-success ">Submit</button>
                                </div> -->
                            </div>

                            <!-- <div class="col-lg-4">
                                <div class="m-0">
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-search"></i></div>
                                        <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                    </div>
                                </div>
                            </div>

                            <div class="m-0">

                                <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                            </div> -->

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-centered mb-0 w-100">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Aksi</th>
                                            <th>No. Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Nama Supplier</th>
                                            <th>Keterangan</th>
                                            <th>Total</th>
                                            <th>User Buat</th>
                                            <th>User Ubah</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>


                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->




        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <?php #include 'partials/footer.php';
    ?>
    <?= $this->include('partials/footer') ?>


</div>





<?= $this->endSection(); ?>

<?= $this->section('addjs'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable({

            processing: true,
            "language": {
                // processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
                processing: '<div class="spinner-border text-primary m-0" role="status"></div> '
            },
            serverSide: true,
            order: [
                [2, 'desc']
            ], //init datatable not ordering
            searching: true,
            // ajax: "<?php echo site_url('ajax-purchaselist') ?>",
            ajax: {
                url: '<?php echo site_url('ajax-purchaselist') ?>',
                data: function(d) {
                    d.location = $('#location').val();
                    d.date1 = $('#date1').val();
                    d.date2 = $('#date2').val();
                }
            },

            columns: [{
                    data: 'action',
                    orderable: false
                },

                {
                    data: 'notrans'
                },
                {
                    data: 'date',
                    render: function(data) { /// LIB MOMENT JS ASSETS/JS/MOMENT.JS https://momentjs.com/
                        if (data === null) return "";
                        return moment(data).format('DD-MM-YYYY');
                    }
                },
                {
                    data: 'supname'
                },
                {
                    data: 'desc'
                },
                {
                    data: 'total',
                    render: $.fn.dataTable.render.number('.', ',', 2, '')
                },
                {
                    data: 'userx'
                },
                {
                    data: 'userz'
                },
                {
                    data: 'loc'
                },
            ]


        });

        $('#location').change(function(event) {
            event.preventDefault();
            $('#table').DataTable().ajax.reload()
        });


        $('#date1').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('#date2').datepicker({
            format: 'yyyy-mm-dd'
        });


        $('#date1').change(function(event) {
            event.preventDefault();
            $('#table').DataTable().ajax.reload()
        });

        $('#date2').change(function(event) {
            event.preventDefault();
            $('#table').DataTable().ajax.reload()
        });

        $('#search').keyup(function() {
            var table = $('#table').DataTable();
            table.search($(this).val()).draw();
        });


    });



    // 
</script>

<!--  Select2 Plugin Js -->
<script src="<?= base_url('assets/js/vendor/select2.min.js'); ?>"></script>

<!-- Daterangepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/daterangepicker.js'); ?>"></script>

<!-- Bootstrap Datepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-datepicker.min.js'); ?>"></script>

<!-- Bootstrap Timepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-timepicker.min.js'); ?>"></script>

<!-- Input Mask Plugin js -->
<script src="<?= base_url('assets/js/vendor/jquery.mask.min.js'); ?>"></script>

<!-- Bootstrap Touchspin Plugin js -->
<script src="<?= base_url('assets/js/vendor/jquery.bootstrap-touchspin.min.js'); ?>"></script>

<!-- Bootstrap Maxlength Plugin js -->
<script src="<?= base_url('assets/js/vendor/bootstrap-maxlength.min.js'); ?>"></script>

<!-- Typehead Plugin js -->
<script src="<?= base_url('assets/js/vendor/handlebars.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/typeahead.bundle.min.js'); ?>"></script>

<!-- Flatpickr Timepicker Plugin js -->
<script src="<?= base_url('assets/js/vendor/flatpickr.min.js'); ?>"></script>

<!-- Typehead Demo js -->
<script src="<?= base_url('assets/js/pages/typehead.init.js'); ?>"></script>

<!-- Timepicker Demo js -->
<script src="<?= base_url('assets/js/pages/timepicker.init.js'); ?>"></script>

<script src="<?= base_url('assets/js/vendor/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/responsive.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/fixedColumns.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.fixedHeader.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.bootstrap5.min.js'); ?>"></script>
<!-- <script src="<?= base_url('assets/js/vendor/buttons.php5.min.js'); ?>"></script> -->
<script src="<?= base_url('assets/js/vendor/buttons.flash.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.keyTable.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/vendor/dataTables.select.min.js'); ?>"></script>


<script src="<?= base_url('assets/js/moment.js'); ?>"></script>
<!-- Datatable Demo Aapp js -->
<!-- <script src="<?= base_url('assets/js/pages/datatable.init.js'); ?>"></script> -->

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>

<?= $this->endSection(); ?>