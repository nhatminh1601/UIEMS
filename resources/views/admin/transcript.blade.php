<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Select2 -->
    <link rel="stylesheet" href="dist/select2.min.css">
    <link rel="stylesheet" href="dist/adminlte.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/manager-user.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.inc.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.inc.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="transcript">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Quản lý điểm

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transcript-popup">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới điểm
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import-list-transcript">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            Thêm danh sách điểm
                        </button>

                    </div>
                    <div class="col-xs-12">

                        <table id="transcript_table" class="table table-bordered table-hover"></table>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- popup-->
        <!-- popup transcript -->
        <div class="modal fade" id="transcript-popup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">QUẢN LÝ ĐIỂM</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="student">SBD</label>
                                    <div class="input-group">
                                        <select class="form-control select2" style="width: 100%;">
                                          <option selected="selected">190101</option>
                                          <option>190202</option>
                                          <option>190303</option>
                                          <option>190404</option>
                                          <option>190505</option>
                                        </select>
                                        <div class="input-group-addon">
                                            <a title="Thêm mới" href="student.html" target="_blank">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Họ tên</label>
                                    <input type="text" class="form-control" id="name" required="required" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthdate">Ngày sinh</label>
                                    <input type="text" class="form-control" id="birthdate" required="required" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="placebirth">Nơi sinh</label>
                                    <input type="text" class="form-control" id="placebirth" required="required" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Môn thi</label>
                                    <div class="input-group">
                                        <select id="subject" class="form-control select2" style="width: 100%;" required="required">
                                            <option value="1">Toán - 02/02/2019</option>
                                            <option value="2">Văn - 02/02/2019</option>
                                        </select>
                                        <div class="input-group-addon"  data-toggle="modal" data-target="#show-list-calendar">
                                            <a title="Chọn lịch thi" >
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="score">Điểm</label>
                                    <input type="text" class="form-control" id="score" required="required">
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup transcript -->
        <!-- popup list transcript -->
        <div class="modal fade" id="import-list-transcript" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nhập danh sách điểm</h4>
                    </div>
                    <div class="modal-body">
                        <div class="drop" flow-drop="" ng-class="dropClass">
                            <span class="btn btn-default" flow-btn="">Upload File<input type="file" multiple="multiple"
                                    style="visibility: hidden; position: absolute;"></span>
                            <b>OR</b>
                            Drag And Drop your file here
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup list transcript -->
        
        <!-- end popup-->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016
                <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Tab panes -->
            <div class="tab-content">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="dist/jquery.min.js"></script>
    <!-- <script src="dist/vendors.bundle.js"></script> -->
    <script src="dist/adminlte.min.js"></script>
    <script src="dist/bootstrap-table.min.js"></script>
    <script src="dist/bootstrap-datepicker.min.js"></script>
    <!-- Select2 -->
    <script src="dist/select2.full.min.js"></script>
    <script src="js/transcript_table.js"></script>
    <script src="js/transcript.js"></script>

</body>

</html>
