<!DOCTYPE html>
<html>

<head>
@include('admin.inc.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    @include('admin.inc.header')
        <!-- Left side column. contains the logo and sidebar -->
            <!-- sidebar: style can be found in sidebar.less -->
            @include('admin.inc.sidebar')
            <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="manager_student">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Quản lý học sinh

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="btnAddStudent">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới học sinh
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#import-list-student">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            Thêm danh sách học sinh
                        </button>

                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#print-list-student">
                            <span class="glyphicon glyphicon-print"></span>
                        </button>

                        <!-- <button type="button" class="btn btn-primary float-right margin-left-15" id="btnPrintStudentPoints" data-toggle="modal">
                            <span class="glyphicon glyphicon-print"></span>
                            In điểm
                        </button>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" id="btnPrintListStudent">
                            <span class="glyphicon glyphicon-print"></span>
                            In danh sách thí sinh
                        </button> -->

                    </div>
                    <div class="col-xs-12">

                        <table id="manager_student_table" class="table table-bordered table-hover"></table>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- popup-->
        <!-- popup student -->
        <div class="modal fade" id="student-popup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="title-popup-student">Cập nhật học sinh</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <input type="text" class="form-control hide" id="userId">
                        </div>

                        <div class="form-group">
                            <label for="userName">Họ tên</label>
                            <input type="text" class="form-control" id="userName">
                        </div>

                        <div class="form-group">
                            <label for="bỉrthDate">Ngày sinh</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" id="birthDate"><span
                                    class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sex">Giới tính:</label>
                            <select id="sex" class="form-control">
                                <option value="1">Name</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="identityCard">CMND</label>
                            <input type="text" class="form-control" id="identityCard">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <textarea id="address" class="form-control" rows="4" cols="10"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup student -->
        <!-- popup list student -->
        <div class="modal fade" id="import-list-student" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nhập danh sách học sinh</h4>
                    </div>
                    <div class="modal-body">
                        <div class="drop" flow-drop="" ng-class="dropClass">
                            <span class="btn btn-default" flow-btn="">Upload Image<input type="file" multiple="multiple"
                                    style="visibility: hidden; position: absolute;"></span>
                            <b>OR</b> Drag And Drop your images here
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="btnSave">Lưu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup list student -->
        <!-- popup print list student -->
        <div class="modal fade" id="print-list-student" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="titlePrint">In danh sách</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="provinces">Theo tỉnh thành</label>
                            <select id="provinces" class="form-control">
                                <option value="1">HCM</option>
                                <option value="0">HN</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="regionExam">Theo cụm thi</label>
                            <select id="regionExam" class="form-control">
                                <option value="1">Tất cả</option>
                                <option value="1">THPT Hoàng Hoa Thám</option>
                                <option value="0">THPT Lê Thị Hồng Gấm</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btnPrintStudentPoints">
                            In điểm
                        </button>
                        <button type="button" class="btn btn-primary " id="btnPrintListStudent">
                            In danh sách thí sinh
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup print list student -->
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
    <script src="js/services_table.js"></script>
    <script src="js/manager_student.js"></script>

</body>

</html>