<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-topbar-color="light" data-menu-color="light">

<head>
    <?php
    $title = "Dashboard";
    include 'partials/title-meta.php';
    ?>

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/daterangepicker.css'); ?>">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/jquery-jvectormap-1.2.2.css'); ?>">

    <?php #include 'partials/head-css.php'; 
    ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php #include 'partials/topbar.php'; 
        ?>

        <?= $this->include('partials/topbar') ?>

        <?php #include 'partials/horizontal-nav.php'; 
        ?>
        <?= $this->include('partials/horizontal-nav') ?>
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php

                    $page_title = "Dashboard";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="item" type="button" class="btn btn-lg btn-primary btn-block">Master Item</a>
                            <a href="purchase-list" type="button" class="btn btn-lg btn-success">Daftar Penjualan</a>
                        </div>




                    </div>


                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <?php #include 'partials/footer.php'; 
            ?>
            <?= $this->include('partials/footer') ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php #include 'partials/right-sidebar.php'; 
    ?>
    <?= $this->include('partials/right-sidebar') ?>

    <?php #include 'partials/footer-scripts.php'; 
    ?>
    <?= $this->include('partials/footer-scripts') ?>

    <!-- Daterangepicker js -->
    <script src="<?= base_url('assets/js/vendor/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/vendor/daterangepicker.js'); ?>"></script>

    <!-- Apex Charts js -->
    <script src="<?= base_url('assets/js/vendor/apexcharts.min.js'); ?>"></script>

    <!-- Vector Map js -->
    <script src="<?= base_url('assets/js/vendor/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery-jvectormap-world-mill-en.js'); ?>"></script>

    <!-- Dashboard App js -->
    <script src="<?= base_url('assets/js/pages/dashboard.js'); ?>"></script>


    <!-- App js -->
    <script src="<?= base_url('assets/js/app.min.js'); ?>"></script>

</body>

</html>