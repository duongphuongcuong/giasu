@extends('client.layout')

@section('title')
<title>Đăng kí làm gia sư</title>
@endsection
<style type="text/css">
.lable_giasu{
		font-family: 'arial';
	    color: black;
	    padding-top: 20px  !important;
	    text-align: right;
	}
.input_form_giasu{
	border-bottom: 0.5px dotted #a7a1a1 !important;
}
.checkbox_render{
	margin-top: 16px;
	font-family: 'arial';
}
.add_choose_list_lopday{
	float: right;
    color: crimson;
    font-family: 'Time new roman';
    font-weight: bold;
    background: antiquewhite;
    border-radius: 6px;
}

.add_choose_list_kvday{
	float: right;
    color: crimson;
    font-family: 'Time new roman';
    font-weight: bold;
    background: antiquewhite;
    border-radius: 6px;
}
</style>
@section('content')
<div class="content" style="margin-bottom: 50px">
	<h5 style="text-transform: uppercase; text-align: center;">
		Phiếu đăng kí gia sư
	</h5>
	<form action="">
		
	  <div class="mb-3 row">
	    <label class="col-sm-3 col-form-label lable_giasu" >Họ tên</label>
	    <div class="col-sm-9">
	      <input name="ho_ten" type="text" class="form-control input_form_giasu" placeholder="Nhập tên gia sư">
	    </div>
	  </div>
	  <div class="row">
		  <div class="col-sm-6">
		  		<div class="mb-3 row">
				    <label class="col-sm-6 col-form-label lable_giasu" >Ngày sinh</label>
				    <div class="col-sm-6">
				      <input name="ngay_sinh" type="date" class="form-control input_form_giasu" placeholder="Ngày tháng năm sinh">
				    </div>
				</div>
		  </div>
		  <div class="col-sm-6">
		  		<div class="mb-3 row">
				    <label class="col-sm-4 col-form-label lable_giasu" >Giới tính</label>
				   	<div class="col-sm-8">
				   		<select class="form-control input_form_giasu" name="gioi_tinh">
					   		<option value="Nam">Nam</option>
					   		<option value="Nữ">Nữ</option>
					   	</select>
				   	</div>
				</div>
		  </div>
	  	</div>

	  	<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Số cmnd</label>
		    <div class="col-sm-9">
		      <input name="so_cmnd" type="text" class="form-control input_form_giasu" placeholder="Nhập số cmnd">
		    </div>
		</div>
		
		<div class="mb-3 row">
			<label class="col-sm-3 col-form-label lable_giasu" >Địa chỉ</label>
		    <div class="col-sm-9">
		    	<div class="mb-3 row">
		    		<!-- <label class="col-sm-3 col-form-label lable_giasu" >Địa chỉ</label> -->
		    		<div class="col-sm-5">
		      			<input name="sonha_tenduong" type="text" class="form-control input_form_giasu" placeholder="Số nhà / Tên đường">
		    		</div>
		    		<div class="col-sm-7">
		    			<div class="mb-3 row">
		    				<label class="col-sm-3 col-form-label lable_giasu" >Tỉnh/TP</label>
		    				<div class="col-sm-9">
			    				<select name="tinh_tp_dc" class="form-control input_form_giasu select_tinhtp" >
							   		<option value="">Chọn Tỉnh/TP</option>
							   		@foreach($tinhtp as $ttp)
							   		<option value="{{$ttp->matp}}">{{$ttp->name}}</option>
							   		@endforeach
							   	</select>
			    			</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" ></label>
		    <div class="col-sm-9">
		      <div class="mb-3 row">
		      	<div class="col-sm-6" style="border-right: 1px dotted #a7a1a1;">
		      		<div class="mb-3 row">
					    <label class="col-sm-4 col-form-label lable_giasu" >Quận/Huyện</label>
					    <div class="col-sm-8">
					   		<select name="quanhuyen_dc" class="form-control input_form_giasu select_quanhuyen" style="text-align: center;">
						   		<option value="">Chọn quận huyện</option>
						   	</select>
					   	</div>
					</div>
		      	</div>
		      	<div class="col-sm-6">
		      		<div class="mb-3 row">
					    <label class="col-sm-4 col-form-label lable_giasu" >Phường</label>
					    <div class="col-sm-8">
					   		<select name="xaphuong_dc" class="form-control input_form_giasu select_xp">
						   		<option value="">Chọn Phường</option>
						   	</select>
					   	</div>
					</div>
		      	</div>

		      </div>
		    </div>
		</div>
		
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Email</label>
		    <div class="col-sm-9">
		      <input name="email" type="email" class="form-control input_form_giasu" placeholder="Nhập email">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Số điện thoại</label>
		    <div class="col-sm-9">
		      <input name="sdt" type="text" class="form-control input_form_giasu" placeholder="Nhập số điện thoại">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Ảnh thẻ</label>
		    <div class="col-sm-9">
		      <input name="anh_the" type="file" class="form-control-file" required>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Ảnh mặt trước cmnd</label>
		    <div class="col-sm-9">
		      <input name="cmnd_truoc" type="file" class="form-control-file" required>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Ảnh mặt sau cmnd</label>
		    <div class="col-sm-9">
		      <input name="cmnd_sau" type="file" class="form-control-file" required>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Ảnh bằng cấp hoặc thẻ sinh viên</label>
		    <div class="col-sm-9">
		      <input name="anh_bangcap_tsv" type="file" class="form-control-file" required>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Sinh viên (giáo viên) trường</label>
		    <div class="col-sm-9">
		      <input name="truonghoc" type="text" class="form-control input_form_giasu" placeholder="Ví dụ: trường Đại học Cần Thơ">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Ngành học</label>
		    <div class="col-sm-9">
		      <input name="chuyennganh" type="text" class="form-control input_form_giasu" placeholder="Nhập ngành học">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Năm tốt nghiệp</label>
		    <div class="col-sm-9">
		      <input name="nam_totnghiep" type="text" class="form-control input_form_giasu" placeholder="Ví dụ: 2015">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Hiện là</label>
		    <div class="col-sm-9">
		      <div class="row">
		      	<div class="col-sm-6">
		      		<select name="nghenghiep" id="" required class="form-control input_form_giasu">
		      			<option value="">Nghề nghiệp</option>
		      			<option value="Giáo viên">Giáo viên</option>
		      			<option value="Sinh viên">Sinh viên</option>
		      			<option value="Đã tốt nghiệp">Đã tốt nghiệp</option>
		      		</select>
		      	</div>
		      	<div class="col-sm-6">
		      		<select name="trinhdo" id="" required class="form-control input_form_giasu">
		      			<option value="">Trình độ</option>
		      			<option value="Cao đẳng">Cao đẳng</option>
		      			<option value="Đại học">Đại học</option>
		      			<option value="Cử nhân">Cử nhân</option>
		      			<option value="Thạc sỹ">Thạc sỹ</option>
		      			<option value="Tiến sỹ">Tiến sỹ</option>
		      			<option value="Kỹ sư">Kỹ sư</option>
		      			<option value="Bằng cấp khác">Bằng cấp khác</option>
		      		</select>
		      	</div>
		      </div>
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Mức lương yêu cầu</label>
		    <div class="col-sm-9">
		      <input name="luong_yeucau" type="text" class="form-control input_form_giasu" placeholder="Ví dụ: 1.200.000 đồng">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Thông tin khác</label>
		    <div class="col-sm-9">
		      <input name="thongtin_khac" type="text" class="form-control input_form_giasu">
		    </div>
		</div>
		<hr>
		<h5>Thông tin dạy học</h5>
		
	  	<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Môn dạy</label>
		    <div class="col-sm-9">
		    	<select name="" id="" class="form-control input_form_giasu select_monday" required>
			    	<option value="">Chọn môn</option>
			    	@foreach($monday as $mon)
			    	<option value="{{$mon->id}}">{{$mon->ten_mon_hoc}}</option>
			    	@endforeach
			    </select>
		    </div>
		</div>
		<div class="render_lop">
			
		</div>
		<div class="mb-3 row">
		    <label class="col-sm-3 col-form-label lable_giasu" >Khu vực dạy</label>
		    <div class="col-sm-9">
		    	<select  id="" class="form-control input_form_giasu select_tinhday" required>
			    	<option value="">Chọn tỉnh</option>
			    	@foreach($tinhtp as $tinh)
			    	<option value="{{$tinh->matp}}">{{$tinh->name}}</option>
			    	@endforeach
			    </select>
		    </div>
		</div>

		<div class="render_kvday">
			
		</div>
	
		

	  
	  
	  
	</form>
	<hr>
	<h5>Danh sách lựa chọn</h5>
	Lớp học

</div>
@endsection
@section('js')
<script type="text/javascript">
	$(function(){
		$('.select_tinhtp').on('change',function(e){
			matp = $(this).val();
			$.ajax({
				method: 'GET',
				url: "{{route('giasu.dangki.fect_qh')}}",
				data: {matp: matp},
				success: function(data){
					$('.select_quanhuyen').html(data);
				},
				error: function(){

				}
			});
		});

		$('.select_quanhuyen').on('change',function(e){
			maqh = $(this).val();
			$.ajax({
				method: 'GET',
				url: "{{route('giasu.dangki.fect_xptt')}}",
				data: {maqh: maqh},
				success: function(data){
					$('.select_xp').html(data);
				},
				error: function(){

				}
			});
		});
	});

	$(function(){
		$('.select_monday').on('change', function(){
			let id_monhoc = $(this).val();
			$.ajax({
				method: 'GET',
				url: "{{route('giasu.render_lop')}}",
				data: {id_monhoc: id_monhoc},
				success: function(data){
					$('.render_lop').html(data);
				},
				error: function(){
					alert('Hệ thống hiện đang bị lỗi, xin vui lòng thử lại!');
				}
			});
		});
		$('.select_tinhday').on('change', function(){
			let matp = $(this).val();
			$.ajax({
				method: 'GET',
				url: "{{route('giasu.render_quan')}}",
				data: {matp: matp},
				success: function(data){
					$('.render_kvday').html(data);
				},
				error: function(){
					alert('Hệ thống hiện đang bị lỗi, xin vui lòng thử lại!');
				}
			});
		});

	});

</script>

@endsection