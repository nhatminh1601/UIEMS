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
        <div class="content-wrapper" id="user">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Quản lý tài khoản

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-popup">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới tài khoản
                        </button>
                        <button type="button" class="btn btn-primary float-right margin-left-15" data-toggle="modal" data-target="#user-assign">
                            <span class="glyphicon glyphicon-user"></span>
                            Phân quyền
                        </button>

                    </div>
                    <div class="col-xs-12">

                        <table id="user_table" class="table table-bordered table-hover"></table>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- popup-->
        <!-- popup user -->
        <div class="modal fade" id="user-popup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">QUẢN LÝ TÀI KHOẢN</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" required="required">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" required="required">
                        </div>
                        <div class="form-group">
                            <label for="teacher">Cán bộ</label>
                            <div class="input-group">
                                <select id="user" class="form-control">
                                    <option value="1">Nguyễn Văn A</option>
                                    <option value="2">user1</option>
                                </select>
                                <div class="input-group-addon">
                                    <a title="Thêm mới" href="teacher.html" target="_blank">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </a>
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
        <!-- end popup user -->
        <!-- popup user assign -->
        <div class="modal fade" id="user-assign" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">PHÂN QUYỀN</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập</label>
                            <div class="input-group">
                                <select id="username" class="form-control">
                                    <option value="1">admin</option>
                                    <option value="2">user1</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role">Quyền</label>
                            <select class="form-control select2" name="role[]" multiple="multiple" data-placeholder="Chọn quyền hạn" style="width: 100%;" required="required">
                              <option>Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup user assign -->
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
    <!-- Select2 -->
    <script src="dist/select2.full.min.js"></script>
    <script src="js/user_table.js"></script>
    <script src="js/user.js"></script>

</body>

</html>
