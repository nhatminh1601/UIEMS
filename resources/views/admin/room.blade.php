<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
        <div class="content-wrapper" id="room">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Quản lý địa điểm thi

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#room-popup">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới địa điểm thi
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import-list-room">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            Thêm danh sách địa điểm thi
                        </button>

                    </div>
                    <div class="col-xs-12">

                        <table id="room_table" class="table table-bordered table-hover"></table>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- popup-->
        <!-- popup room -->
        <div class="modal fade" id="room-popup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">QUẢN LÝ ĐỊA ĐIỂM THI</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Số phòng</label>
                                    <input type="text" class="form-control" id="name" required="required">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="location">Địa điểm</label>
                                    <input type="text" class="form-control" id="location" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exam">Kỳ thi</label>
                                    <div class="input-group">
                                        <select id="exam" class="form-control">
                                            <option value="1">ĐH 2019</option>
                                            <option value="2">ĐH 2018</option>
                                        </select>
                                        <div class="input-group-addon">
                                            <a title="Thêm mới" href="exam.blade.php" target="_blank">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Lịch thi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="date" required="required">
                                        <div class="input-group-addon" data-toggle="modal" data-target="#show-list-calendar">
                                            <a title="Chọn lịch thi" >
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subject">Môn thi</label>
                                    <input type="text" class="form-control" id="subject" required="required" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shift">Ca</label>
                                    <input type="text" class="form-control" id="shift" required="required" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="starttime">Bắt đầu</label>
                                    <input type="text" class="form-control" id="starttime" required="required" disabled="disabled">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="endtime">Kết thúc</label>
                                    <input type="text" class="form-control" id="endtime" required="required" disabled="disabled">
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
        <!-- end popup room -->
        <!-- popup list room -->
        <div class="modal fade" id="import-list-room" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nhập danh sách địa điểm thi</h4>
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
        <!-- end popup list room -->
        <!-- popup list calendar -->
        <div class="modal fade" id="show-list-calendar" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">DANH SÁCH LỊCH THI</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12">
                            <table id="calendar_table" class="table table-bordered table-hover"></table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Chọn</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup list calendar -->
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

    <!-- <script src="dist/vendors.bundle.js"></script> -->
    <script src="dist/adminlte.min.js"></script>
    <script src="dist/bootstrap-table.min.js"></script>
    <script src="dist/bootstrap-datepicker.min.js"></script>
    <script src="js/room_table.js"></script>
    <script src="js/room.js"></script>

</body>

</html>
