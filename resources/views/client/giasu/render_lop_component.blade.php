<div class="mb-3 row">
	<label class="col-sm-3 col-form-label lable_giasu" >Lớp dạy</label>
	<div class="col-sm-9 checkbox_render">
		<div class="row">
			@for($i = 1; $i <= 8; $i++)
			<div class="col-sm-3">
				<input type="checkbox"> <span>Toán</span>
			</div>
			@endfor
		</div>
		<div style="padding-top: 10px;">
			<a href="" class="add_choose_list_lopday">Lưu lựa chọn</a>
		</div>
	</div>
</div>