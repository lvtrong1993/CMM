@extends('blank')
@section('content')
<!-- background: #00c0ef -->
<script type='text/javascript'>
	function preview_image(event) 
	{
		var reader = new FileReader();
		reader.onload = function()
		{
			var output = document.getElementById('output_image');
			output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
	}
</script>
<div class="col-md-12" style="; padding-top: 15px;">
	@if(count($errors)>0)
	<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><i class="icon fa fa-warning"></i> Thông báo!</h4>

		@foreach($errors->all() as $error)
		<p>{{$error}}<p>
			@endforeach
		</div>



		@endif

		@if (session()->has('editSuccsess') )
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
			Thay đổi thông tin thành công
		</div>



		@endif
		@if (session()->has('addSuccsess')|| session()->has('resItem') || isset($resAddData))
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-warning"></i> Thông báo!</h4>
			
			Thêm mới thiết bị thành công

		</div>



		@endif
		<div class="box box-info" >
			<!-- search form-->

			<form id="dataForm" action="@if(isset($dataSend) && $dataSend->type >0)     {{route('postEditItem')}} @else {{route('postAddItem')}} @endif  " method="POST" enctype="multipart/form-data">

				<div class="col-sm-12 col-md-12 " >

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<!-- {{ csrf_field() }} -->
					<meta name="csrf-token" content="{{ csrf_token() }}">
					<input name="txtItemId" type="text" hidden="hidden" name="" value="@if(isset($dataSend) && count($dataSend->item) >0) {{$dataSend->item[0]->item_id}} @endif
					
					">


					<!-- general form elements -->

					<div class="box-header with-border">
						<h1 style="font-size: 25px" class="box-title">Thêm mới cập nhật thiết bị</h1>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div class="row">
						@if(isset($dataSend) && $dataSend->type >0)
						<div class="col-md-6 form-group" >
							<label for="exampleInputPassword1">Công ty</label>
							<select id="selPartners" name="selPartners" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
							style="width: 100%;">
							@if(isset($dataSend) && count($dataSend->partners) >0)
							@foreach($dataSend->partners->all() as $partner)
							@if($partner->partner_id == $dataSend->item[0]->partner_id)
							<option selected="selected">{{$partner->partner_full_name}}</option>
							@endif
							<option>{{$partner->partner_full_name}}</option>
							@endforeach
							@endif
						</select>

					</div>
					@endif
					@if(isset($dataSendAdd) && $dataSendAdd->type <=0)
					<div class="col-md-6 form-group" >
						<label for="exampleInputPassword1">Công ty</label>
						<select id="selPartners" name="selPartners" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
						style="width: 100%;">
						@if(isset($dataSendAdd) && count($dataSendAdd->partners) >0)
						@foreach($dataSendAdd->partners->all() as $partner)
						<option>{{$partner->partner_full_name}}</option>
						@endforeach
						@endif
					</select>

				</div>
				@endif

				@if(isset($resAddData) && $resAddData->type <=0)
				<div class="col-md-6 form-group" >
					<label for="exampleInputPassword1">Công ty</label>
					<select id="selPartners" name="selPartners" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
					style="width: 100%;">
					@if(isset($resAddData) && count($resAddData->partners) >0)
					@foreach($resAddData->partners->all() as $partner)
					@if($partner->partner_id == $resAddData->resItem->partner_id)
					<option selected="selected">{{$partner->partner_full_name}}</option>
					@endif
					<option>{{$partner->partner_full_name}}</option>
					@endforeach
					@endif
				</select>

			</div>
			@endif

			<!-- /.box-body -->
		</div>
		<div class="row">
			<div class="col-md-6 form-group">
				<label for="exampleInputEmail1">Tên thiết bị</label>
				<input name="txtDeviceName" type="text" class="form-control resetTexxt" id="txtDeviceName" placeholder="Tên thiết bị" value="@if(isset($dataSend) && count($dataSend->item) >0) {{$dataSend->item[0]->item_name}} @endif">
			</div>
			@if(isset($dataSend) && $dataSend->type >0)
			<div class="col-md-6 form-group" >
				<label for="exampleInputPassword1">Thuộc thiết bị</label>
				<select id="selItems" name="selItems" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
				style="width: 100%;">
				@if(isset($dataSend) && count($dataSend->items) >0)
				@foreach($dataSend->items->all() as $item)
				@if($item->item_id == $dataSend->item[0]->item_parent_id)
				<option selected="selected">{{$item->item_name}}</option>
				@endif
				<option>{{$item->item_name}}</option>
				@endforeach
				@endif
			</select>

		</div>
		@endif
		<!--  -->
		@if(isset($dataSendAdd) && $dataSendAdd->type <=0)
		<div class="col-md-6 form-group" >
			<label for="exampleInputPassword1">Thuộc thiết bị</label>
			<select id="selItems" name="selItems" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
			style="width: 100%;">
			@if(isset($dataSendAdd) && count($dataSendAdd->items) >0)
			@foreach($dataSendAdd->items->all() as $item)
			<option>{{$item->item_name}}</option>
			@endforeach
			@endif
		</select>

	</div>
	@endif
	@if(isset($resAddData) && $resAddData->type <=0)
	<div class="col-md-6 form-group" >
		<label for="exampleInputPassword1">Thuộc thiết bị</label>
		<select id="selItems" name="selItems" class="form-control select2" multiple="multiple" data-placeholder="Select a State"
		style="width: 100%;">
		@if(isset($resAddData) && count($resAddData->items) >0)
		@foreach($resAddData->items->all() as $item)
		@if($item->item_id == $resAddData->resItem->item_parent_id)
		<option selected="selected">{{$item->item_name}}</option>
		@endif
		<option>{{$item->item_name}}</option>
		@endforeach
		@endif
	</select>

</div>
@endif
<!-- /.box-body -->
</div>
<!-- /.box -->
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label>Nội dung</label>
			<textarea id="txtDescription" name="txtDescription" class="form-control resetTexxt" rows="6" placeholder="Enter ...">@if(isset($dataSend) && count($dataSend->item) >0) {{$dataSend->item[0]->description}} @endif @if(isset($resAddData) && $resAddData->type <=0) {{$resAddData->resItem->description}} @endif</textarea>
		</div>
	</div>
</div>
<div class="row">
	<div class=" col-md-6 ">
		<div class="form-group">
			<label for="exampleInputEmail1">Giá</label>
			<input name="txtPrice" type="text" min="0" class="form-control resetTexxt" id="txtPrice" placeholder="Giá" value="@if(isset($dataSend) && count($dataSend->item) >0) {{$dataSend->item[0]->price}} @endif  @if(isset($resAddData) && $resAddData->type <=0) {{$resAddData->resItem->price}} @endif">
		</div>

	</div>
	<div class=" col-md-6 ">
		<div class="form-group">
			<label for="exampleInputEmail1">Hạn bảo hành</label>
			<?php   
			if(isset($dataSend->item[0]->warranty_date)){
				$dt = new DateTime($dataSend->item[0]->warranty_date);

				$dateFM= $dt->format('Y-m-d');
			}
			if(isset($resAddData->resItem->warranty_date)){
				$dt = new DateTime($resAddData->resItem->warranty_date);

				$dateFM= $dt->format('Y-m-d');
			}



			?>
			<input name="txtWarrantyDate" onfocus="(this.type='date')" class="form-control pull-right resetTexxt" id="txtWarrantyDate" value="<?php if(isset($dt))echo $dateFM; ?>">
		</div>


	</div>

	<!-- /.box-body -->
</div>

<div class="row" style="margin-bottom: 40px">
	<div class=" col-md-6 ">
		<div class="form-group">
			<label for="exampleInputEmail1">Ảnh minh họa</label>
			<!-- <input type="file" id="exampleInputFile"> -->
			<input  name="itemImage" id="itemImage" type="file" accept="image/*" onchange="preview_image(event)">
			<img src="@if(isset($dataSend) && count($dataSend->item) >0) {{URL::to('/')}}/img/products/{{$dataSend->item[0]->image }}  @endif @if(isset($resAddData->resItem->image)) {{URL::to('/')}}/img/products/{{$resAddData->resItem->image }}  @endif " id="output_image" style="height: 150px" />
		</div>

	</div>

	<!-- /.box-body -->
</div>
<hr />

<div class="row">
	<div class="col-md-6 col-xs-3">
		<button id="btnReset" type="button" class="btn btn-primary">Reset</button>
	</div>
	<div class="col-md-1 col-xs-3">
		<button type="submit" class="btn btn-primary">Lưu</button>
	</div>
	<div class="col-md-1 col-xs-3">
		<button  id= "btnSave" type="button" class="btn btn-primary">Lưu và tiếp tục</button>
	</div>

</div>






</div>

</form>
</div>

</div>
<!-- ./ search form -->
<!-- message -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#blah').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function() {
		readURL(this);
	});
</script>
<script type="text/javascript">
	$( document ).ready(function() {

		$('#btnReset').click(function(){

			document.getElementById("txtDescription").value = "";
			document.getElementById("txtDeviceName").value = "";
			document.getElementById("txtPartnerName").value = "";
			document.getElementById("txtDeviceParetName").value = "";
			document.getElementById("txtPrice").value = "0";
			document.getElementById("txtWarrantyDate").value = "";
			// document.getElementById("itemImage").value = "";

			$('#output_image').attr('src', '');
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#btnSave").click(function(e){
			 // document.dataForm.action = "/additem";
			 document.getElementById('dataForm').action = "/additem";
			 document.getElementById('dataForm').submit();
			});
	});
</script>
<script type="text/javascript">
	// upload form ajax
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		})
		$("#btnSave1").click(function(e){
			var _token = $("input[name='_token']").val();;
			var selPartners= $('#selPartners :selected').text();
			var txtDescription = $("input[name='txtDescription'] ").val();
			var txtPrice = $("input[name='txtPrice']").val();
			var txtWarrantyDate = $("input[name='txtWarrantyDate']").val();
			var itemImage = $('#itemImage').prop('files')[0];
			var selItems= $('#selItems :selected').text();
			var x ={_token:_token, selPartners:selPartners, selItems:selItems, txtDescription:txtDescription, txtPrice:txtPrice, txtWarrantyDate:txtWarrantyDate, itemImage:itemImage}
			var y= JSON.stringify(x);
			$.ajax({
				url: "/additem",
				type:'POST',
				dataType: 'json',
				cache: false,
				enctype:'multipart/form-data',
				contentType: false,
				processData: false,
				// data: y,
				data: {_token:_token, selPartners:selPartners, selItems:selItems, txtDescription:txtDescription, txtPrice:txtPrice, txtWarrantyDate:txtWarrantyDate, itemImage:itemImage},
				success: function(data) {

					if($.isEmptyObject(data.error)){
						console.log(data);

					}else{
						console.log(data);
					}
				}
			});
		});
	});



</script>
<script type="text/javascript">
	
</script>
@endsection