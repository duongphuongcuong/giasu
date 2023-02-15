<div class="container" style="margin-top: 75px;">
	<div class="row">
		<div class="col-md-3">
			<div class="banner-title">
				Dành cho <br> phụ huynh - học sinh
			</div>
			<div class="register-find-tutor" style="">
				<a href="">Đăng kí <br> tìm gia sư</a>
			</div>
			<div class="contact-banner">
				Liên hệ tìm gia sư <br> <span>098765432</span>
			</div>
			<div class="choose-tutor-class">
				<a href="">
					<i class="fa fa-hand-o-right" aria-hidden="true"></i> Phụ huynh - Học sinh <br> Chọn gia sư hiện có
				</a>
			</div>
		</div>
		<div class="col-md-6">
			<marquee id="marquee-banner">Trung tâm gia sư ABC - Niềm tin đặt lên hàng đầu</marquee> 
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" id="img_slide_540_280" src="{{asset('Tutor/images/bg_1.jpg')}}" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" id="img_slide_540_280" src="{{asset('Tutor/images/bg_2.jpg')}}" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" id="img_slide_540_280" src="{{asset('Tutor/images/image_1.jpg')}}" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="banner-title">
				Dành cho <br> giáo viên - sinh viên
			</div>
			<div class="register-find-tutor" style="">
				<a href="{{route('giasu.dangki')}}">Đăng kí <br> làm gia sư</a>
			</div>
			<div class="contact-banner">
				Liên hệ làm gia sư <br> <span>098765432</span>
			</div>
			<div class="choose-tutor-class">
				<a href="">
					<i class="fa fa-hand-o-right" aria-hidden="true"></i> Giáo viên - Sinh viên <br> 
					Chọn lớp dạy hiện có
				</a>
			</div>
		</div>
	</div>
</div>