<?= $this->include('partials/main') ?>

    <head>
        
        <?= $title_meta ?>

        <!-- alertifyjs Css -->
        <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />

        <!-- alertifyjs default themes  Css -->
        <link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />

        <?= $this->include('partials/head-css') ?>

    </head>

    <?= $this->include('partials/body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $page_title ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">AlertifyJs</h4>
                                        <p class="card-title-desc">Notifications examples of using AlertifyJS.</p>
                                    </div>
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Default Dialogs</h4>

                                        <div class="row text-center">
                                            <div class="col-sm-4">
                                                <div class="my-4">
                                                    <h5 class="mb-4">Alert</h5>

                                                    <a href="javascript: void(0);"  id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="my-4">
                                                    <h5 class="mb-4">Confirm</h5>

                                                    <a href="javascript: void(0);"  id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="my-4">
                                                    <h5 class="mb-4">Prompt</h5>

                                                    <a href="javascript: void(0);"  id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
                                                </div>
                                            </div>
                                        </div>


                                        <h4 class="card-title mt-5 mb-3">Default Notifications</h4>

                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                
                                                <tbody>
                                                    <tr>
                                                        <td>Default alert</td>
                                                        <td><a href="javascript: void(0);"  id="alert-message" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Success alert</td>
                                                        <td><a href="javascript: void(0);"  id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Error alert</td>
                                                        <td><a href="javascript: void(0);"  id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Warning alert</td>
                                                        <td><a href="javascript: void(0);"  id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/right-sidebar') ?>

        <?= $this->include('partials/vendor-scripts') ?>
        
        <!-- alertifyjs js -->
        <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>

        <!-- notification init -->
        <script src="assets/js/pages/notification.init.js"></script>
        
        <script src="assets/js/app.js"></script>
    </body>
</html>
