<?= $this->extend('partials/template'); ?>

<?= $this->section('addcss'); ?>
<!-- Datatables css -->
<link href="<?= base_url('assets/css/vendor/dataTables.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/responsive.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedColumns.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/fixedHeader.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/buttons.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('assets/css/vendor/select.bootstrap5.min.css'); ?>" rel="stylesheet" type="text/css" />
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


                <!-- <div class="col-sm">
                    <button type="button" class="btn btn-primary  float-end mb-2 mt-2"><i class="bi bi-plus-circle"></i> &nbsp; Tambah Item</button>
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
                                <div class="col-sm-4">
                                    <!-- <label for="example-select" class="form-label">Lokasi</label> -->
                                    <select name="location" id="location" class="form-select">
                                        <option value="">Semua Lokasi</option>
                                        <?php foreach ($location as $k) : ?>
                                            <option value="<?= $k['kodekantor'] ?>"><?= $k['kodekantor'] ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>

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
                                <table id="table" class="table table-striped w-100 mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Aksi</th>
                                            <th>Kode Item</th>
                                            <th>Nama Item</th>
                                            <th>Satuan</th>
                                            <th>Stok</th>
                                            <th>Harga Pokok</th>
                                            <th>Lokasi</th>
                                        </tr>
                                    </thead>


                                    <tbody> </tbody>
                                </table>
                            </div>
                            <!-- <div class="table-responsive"></div> -->


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
            language: {
                // processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
                processing: '<div class="spinner-border text-primary m-0" role="status"></div> '
            },
            processing: true,
            serverSide: true,
            order: [2], //init datatable not ordering   
            // ajax: "<?php echo site_url('ajax-masteritem') ?>",
            ajax: {
                url: '<?php echo site_url('ajax-masteritem') ?>',
                data: function(d) {
                    d.location = $('#location').val();
                }
            },

            // columnDefs: [{
            //     targets: [0, 1, 3, 5],
            //     searchable: true
            // }, ]
            columns: [{
                    data: 'action',
                    orderable: false
                },

                {
                    data: 'itemcode'
                },
                {
                    data: 'itemname',

                },
                {
                    data: 'unit'
                },
                {
                    data: 'stock',
                    render: $.fn.dataTable.render.number('.', ',', 0, '')
                },
                {
                    data: 'price',
                    render: $.fn.dataTable.render.number('.', ',', 2, '')
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



    });
</script>
<!-- Datatables css -->
<!-- Datatables js -->

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

<!-- Datatable Demo Aapp js -->
<!-- <script src="<?= base_url('assets/js/pages/datatable.init.js'); ?>"></script> -->

<!-- App js -->
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
<?= $this->endSection(); ?>