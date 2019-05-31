<!DOCTYPE html>
<html lang="en">

@include('front.inc.head')

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section  -->
	@include('front.inc.nav')

	<section class="full-courses-section spad pt-0">
		<div class="container">

			<div class="col-xs-12 margin-top-15">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
							role="tab" aria-controls="nav-home" aria-selected="true">Tra cứu thông tin học sinh</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
							role="tab" aria-controls="nav-profile" aria-selected="false">Tra cứu lịch thi</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
							role="tab" aria-controls="nav-contact" aria-selected="false">Tra cứu điểm</a>
					</div>
				</nav>
			</div>
			<div class="col-xs-12" style="margin-top:60px;">
				<nav>
					<div class="nav nav-tabs" id="nav-tab2" role="tablist">
						<a class="nav-item nav-link active" id="nav-identity-id" data-toggle="tab"
							href="#nav-identity-id-tab" role="tab" aria-controls="nav-home" aria-selected="true">Tra cứu
							theo SDB</a>
						<a class="nav-item nav-link" id="nav-infomation" data-toggle="tab" href="#nav-infomation-tab"
							role="tab" aria-controls="nav-profile" aria-selected="false">Tra cứu theo thông tin thí
							sinh</a>
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent2">
					<div class="tab-pane fade show active" id="nav-identity-id-tab" role="tabpanel"
						aria-labelledby="nav-profile-tab">
						<div class="input-group col-xs-12 margin-top-15">
							<input class="form-control py-2" type="search" placeholder="Nhập số báo danh"
								id="example-search-input">
							<span class="input-group-append">
								<button class="btn btn-outline-secondary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</div>
					<div class="tab-pane fade" id="nav-infomation-tab" role="tabpanel"
						aria-labelledby="nav-contact-tab">
						<div class="col-md-12">
							<div class="row margin-top-30" style="border-style: solid;
							border-color: #ced4da;
							padding: 15px;" id="formInfo">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Họ tên</label>
										<input type="text" class="form-control" id="name">
									</div>
								</div>
								<div class="col-sm-6">

									<div class="form-group datepicker">
										<label for="birthdate">Ngày sinh</label>
										<input type="text" class="form-control " id="birthdate">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="identityCard">CMND</label>
										<input type="text" class="form-control" id="identityCard">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="sex">Giới tính</label>
										<select class="form-control" id="sex">
											<option>Nam</option>
											<option>Nữ</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12 text-center margin-top-15">
									<button type="button" class="btn btn-primary" id="btnSearchInfo">Tra cứu</button>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-12 d-none text-center margin-top-30" id="divError">
					<strong class="font-error" id="messageError"></strong>
				</div>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active margin-top-30" id="nav-home" role="tabpanel"
						aria-labelledby="nav-home-tab">
						<div class="d-none" id="result-info">
							<div class="col-sm-12 text-center">
								<strong>Kết quả</strong>
							</div>
							<table class="table table-hover" id="table-student-info"></table>
						</div>
						<!-- <div class="col-md-12">
							<div class="row margin-top-30" style="border-style: solid;
								border-color: #ced4da;
								padding: 15px;">

								<div class="col-sm-6">
									<div class="form-group">
										<label for="identityResult" class="col-sm-4">SBD</label>
										<label for="identityResult" class="col-sm-6">1232546BDT</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="resultName" class="col-sm-4">Họ tên</label>
										<label for="resultName" class="col-sm-6">Nguyễn A</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="resultBirthDate" class="col-sm-4">Ngày sinh</label>
										<label id="resultBirthDate" class="col-sm-6">15/05/1995</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="resultSex" class="col-sm-4">Giới tính</label>
										<label for="resultSex" class="col-sm-6">Nam</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="resultPlaceOfBirth" class="col-sm-4">Nơi sinh</label>
										<label id="resultPlaceOfBirth" class="col-sm-6">Thủ Đức Hồ Chí Minh</label>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="identityCardResult" class="col-sm-4">CMND</label>
										<label for="identityCardResult" class="col-sm-6">1123123123</label>
									</div>
								</div> -->


					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<div class="col-sm-12 text-center margin-top-30">
							<strong>Kết quả</strong>
						</div>
						<table class="table table-hover margin-top-30" id="table-student"></table>
					</div>
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						<div class="col-sm-12 text-center margin-top-30">
							<strong>Kết quả</strong>
						</div>
						<table class="table table-hover margin-top-30" id="table-points"></table>
					</div>
				</div>

			</div>
        </div>
    </section>

    @include('front.inc.footer')
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/gijgo.min.js"></script>
	<!-- <script src="js/bootstrap-datepicker.min.js"></script> -->
	<script src="js/bootstrap-table.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/tra-cuu.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
