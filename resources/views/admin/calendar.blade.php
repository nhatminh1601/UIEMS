<!DOCTYPE html>
<html>
@include('admin.inc.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

       @include('admin.inc.header')
        <!-- Left side column. contains the logo and sidebar -->
            <!-- sidebar: style can be found in sidebar.less -->
            @include('admin.inc.sidebar')
            <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="calendar">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Quản lý lịch thi

                </h1>

            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calendar-popup">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm mới lịch thi
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import-list-calendar">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            Thêm danh sách lịch thi
                        </button>

                    </div>
                    <div class="col-xs-12">

                        <table id="calendar_table" class="table table-bordered table-hover"></table>
                    </div>

                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- popup-->
        <!-- popup calendar -->
        <div class="modal fade" id="calendar-popup" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">QUẢN LÝ LỊCH THI</h4>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exam">Kỳ thi</label>
                                    <div class="input-group">
                                        <select id="exam" class="form-control">
                                            <option value="1">Khối A 2019</option>
                                            <option value="2">Khối B 2019</option>
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
                                    <label for="date">Ngày thi</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control" id="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subject">Môn thi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="subject" required="required" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shift">Ca</label>
                                    <input type="text" class="form-control" id="shift" required="required" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="starttime">Bắt đầu</label>
                                    <input type="text" class="form-control timepicker" id="starttime" required="required" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="endtime">Kết thúc</label>
                                    <input type="text" class="form-control timepicker" id="endtime" required="required" >
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
        <!-- end popup calendar -->
        <!-- popup list calendar -->
        <div class="modal fade" id="import-list-calendar" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nhập danh sách cán bộ</h4>
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
        <!-- end popup list calendar -->
        
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
        @include('admin.inc.footer')
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
    <!-- InputMask -->
    <script src="dist/jquery.inputmask.js"></script>
    <script src="dist/jquery.inputmask.date.extensions.js"></script>
    <script src="dist/jquery.inputmask.extensions.js"></script>
    <!-- bootstrap time picker -->
    <script src="dist/bootstrap-timepicker.min.js"></script>
    <script src="js/calendar_table.js"></script>
    <script src="js/calendar.js"></script>
</body>

</html>
