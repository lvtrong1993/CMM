@extends('blank')
@section('content')
<div class="col-md-12" style="background: #00c0ef; padding-top: 15px;">
	<!-- search form-->
	<form action="{{url('items')}}" method="POST">
		<div class="row" >


			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-md-3" style="margin-bottom: 2px;">
				<div class=" input-group date ">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input onfocus="(this.type='date')" class="form-control pull-right" id="datepicker13" placeholder="Bảo hành từ ngày" name="txtStartDate" placeholder="First name" value="@if(isset($dataError) &&  $dataError->data->txtStartDate!='') {{$dataError->data->txtStartDate}} @endif">
				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group date ">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					
					<input onfocus="(this.type='date')" class="form-control pull-right" id="datepicker23" placeholder="Bảo hành đến ngày" name="txtEndDate" value="@if(isset($dataError) && $dataError->data->txtEndDate!='') {{$dataError->data->txtEndDate}} @endif">
				</div>
			</div>
			<div class="col-md-3" style="">
				<!-- seelctbox -->
				<div class="form-group" style="margin-top: 2px;">
					<select class="form-control select2" multiple="multiple" data-placeholder="Khách hàng"
					style="width: 100%;" id="selCustomers" name="selCustomers" >
					@if(isset($dataSend) && count($dataSend->partners) >0)
					@foreach($dataSend->partners->all() as $partner)
					<option>{{$partner->partner_full_name}}</option>
					@endforeach
					@endif
				</select>
			</div>

			<!-- ./ select box -->
		</div>
		<div class="col-md-3">
			<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		</div>

	</div>
	<div class="row" >

		<div class="col-md-3" style="margin-bottom: 2px;">
			<div class=" input-group date ">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input onfocus="(this.type='date')" class="form-control pull-right" id="datepicker13" placeholder="Bảo trì từ ngày" name="txtBDBT" value="@if(isset($dataError) && $dataError->data->txtBDBT!='') {{$dataError->data->txtBDBT}} @endif">
			</div>
		</div>
		<div class="col-md-3">
			<div class="input-group date ">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input onfocus="(this.type='date')" class="form-control pull-right" id="datepicker23" placeholder="Bảo trì đến ngày" name="txtKTBT" value="@if(isset($dataError) && $dataError->data->txtKTBT!='') {{$dataError->data->txtKTBT}} @endif">
			</div>
		</div>
		<div class="col-md-3" style="">
			<!-- seelctbox -->
			<div class="form-group" style="margin-top: 2px;">
				<select class="form-control select2" multiple="multiple" data-placeholder="Thiết bị"
				style="width: 100%;" id="selDevice" name="selDevice">
				@if(isset($dataSend) && count($dataSend->items) >0)
				@foreach($dataSend->items->all() as $item)
				<option>{{$item->item_name}}</option>
				@endforeach
				@endif
			</select>
		</div>

		<!-- ./ select box -->
	</div>
<!-- 	<div class="col-md-3">
		<button type="submit" class="btn btn-primary">Tìm kiếm</button>
	</div> -->

</div>
</form>
</div>
<!-- ./ search form -->
<!-- message -->
@if (isset($dataError))

<div class="callout callout-warning" style="">
	<h4>&nbsp;</h4>
	<h4>{{$dataError->error}}!</h4>


	
</div>
@endif

<!-- ./ message -->
<!-- item list -->
<div class="row">
	<ul class="products">
		@if(isset($dataSend->items) && count($dataSend->items) >0)
		@foreach($dataSend->items->all() as $item)
		<li class="col-md-3">

			<a href="{{ url('item/itemDetail/'.$item->item_id) }}">
				<img src="img/products/{{$item->image}}"  alt="User Image" class="image">
				<h1>{{$item->item_name}}</h1>

				<div class="informations">

				
					<p>Ghi chú: {{$item->description}}</p>
					<p>Hạn bảo hành: {{$item->warranty_date}}</p>
					<p>Ngày bảo trì cuối: {{$item->res_end_time}}</p>
					@foreach($dataSend->itemAll->all() as $subItem)
						@if($subItem->item_parent_id == $item->item_id)
							<p>{{$subItem->item_name}}</p>
						@endif
					@endforeach
				</div>
			</a>
		</li>
		@endforeach
		@endif
	</ul>
</div>
@if(isset($dataSend->items) && count($dataSend->items) >0)
<div style="float: right; margin-right: 50px;">{{$dataSend->items->links()}}</div>
@endif
<!-- ./ item list -->

  <div class="box_go">
  	<!-- <img src="{{ asset('img/user2-160x160.jpg') }}" width="160" /> -->
            <div class="ico">a</div>
            <h3>Get a free account</h3>
            <p>And start earning points</p>
        </div>
        <div class="box_go">
            <div class="ico"><img src="img/ico/arrow_f.png" width="16" /></div>
            <h3>View stats</h3>
            <p></p>
        </div>
        <style type="text/css">
        	.box_go {
    position: relative;
}

.box_go .ico {
   position: absolute;
   /*right: 10px;*/
   float: right;
   display: none;
   background: red;
   width: 150px;
   height: 150px;
}

.box_go:hover .ico {
    display: inline-block;

}
        </style>
@endsection