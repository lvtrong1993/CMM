<?php

namespace App\Http\Controllers;
use App\Item;
use App\Partner;
use Validator;
use Carbon\Carbon;
use DateTime;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ItemController extends Controller
{
    // get item detail
	public function getItemDetail($item_id){
		$item = DB::table('tbl_item')->leftJoin ('tbl_partner', 'tbl_item.partner_id', '=', 'tbl_partner.partner_id')->select('tbl_item.item_id', 'tbl_item.item_parent_id', 'tbl_item.item_name', 'tbl_item.image', 'tbl_item.item_type', 'tbl_item.description', 'tbl_item.warranty_date', 'tbl_item.price','tbl_item.note_id', 'tbl_item.partner_id', 'tbl_partner.partner_full_name')->where('tbl_item.item_id','=',$item_id)->get();
		$partners = Partner::all();
		$items = Item::all();
		$dataSend;
		if($item[0]->partner_id >0)
		{
			$parent_item = DB::table('tbl_item')->leftJoin ('tbl_partner', 'tbl_item.partner_id', '=', 'tbl_partner.partner_id')->select('tbl_item.item_id', 'tbl_item.item_parent_id', 'tbl_item.item_name', 'tbl_item.image', 'tbl_item.item_type', 'tbl_item.description', 'tbl_item.warranty_date','tbl_item.price', 'tbl_item.note_id', 'tbl_item.partner_id','tbl_partner.partner_full_name')->where('tbl_item.item_id','=',$item[0]->partner_id)->get();
			
			$dataSend = (object) [
				'item' => $item,
				'parent_item' => $parent_item,
				'type'=>1,
				'partners' =>$partners,
				'items'=>$items
			];
			return view('item/itemDetail', compact('dataSend'));
		}else{
			$dataSend =  (object) [
				'item' => $item
			];
		}
		return view('item/itemDetail', compact('dataSend'));
	}

	//edit item detail
	public function postEditItem(Request $request){
//validate

		$validator = validator::make($request->all(),[
			'itemImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'selPartners' => 'required',
			'txtDeviceName'	=> 'required',
			// 'txtDeviceParetName' => 'required',
			'txtDescription' => 'required',
			'txtPrice'		=>'required',
			'txtWarrantyDate' => 'required',

		]

		,[
			'itemImage.image' => 'File không phải là hình',
			'itemImage.mimes' => 'Định dạng hình không phù hợp',
			'itemImage.max'	  => 'Kích cỡ hình quá lớn',
			'selPartners.required' => 'Tên công ty không được để trống',
			'txtDeviceName.required' => 'Tên thiết bị không được để trống',
			'txtPrice.required' => 'Giá không được để trống',
			'txtWarrantyDate.required' => 'Ngày bảo hành không được để trống',
			'txtDescription.required' =>'Chưa nhập thông tin ghi chú'

		]);

		if($validator->passes())
		{
			if($request->hasFile('itemImage')){
				if($file1 = Input::file('itemImage'))
					// echo $file1->getClientOriginalName();
					$fileName = Input::file('itemImage')->getClientOriginalName();
					$file = $request->file('itemImage');
					$file->move('img/products', $fileName);
					DB::table('tbl_item')->where('item_id', $request->txtItemId)->update(['item_name' => $request->txtDeviceName, 'image'=>$fileName, 'description'=>$request->txtDescription, 'price'=>$request->txtPrice, 'warranty_date'=>$request->txtWarrantyDate]);
					
					return Redirect::back()->with('editSuccsess', ['Thay đổi thông tin thành công']);
				}else
				{
					DB::table('tbl_item')->where('item_id', $request->txtItemId)->update(['item_name' => $request->txtDeviceName, 'description'=>$request->txtDescription, 'price'=>$request->txtPrice, 'warranty_date'=>$request->txtWarrantyDate]);
					return Redirect::back()->with('editSuccsess', ['Thay đổi thông tin thành công']);
				}




			}
			else{
				return Redirect::back()->with('errors', $validator->errors());
			}

		}

		public function getAddItem(){
			$partners = Partner::all();
			$items = Item::all();
			$dataSendAdd = (object) [
				'items'=>$items,
				'partners'=>$partners,
				'type'=>0
			];
			return view('item/itemDetail', compact('dataSendAdd'));
		}
		// add new item
		public function postAddItem(Request $request){

			$validator = validator::make($request->all(),[
				'itemImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'selPartners' => 'required',
				'txtPrice'		=>'required',
				'txtWarrantyDate' => 'required',
				'txtDeviceName' => 'required',
				'txtDescription'=>'required',
			]

			,[
				'itemImage.image' => 'File không phải là hình',
				'itemImage.mimes' => 'Định dạng hình không phù hợp',
				'itemImage.max'	  => 'Kích cỡ hình quá lớn',
				'selPartners.required' => 'Tên công ty không được để trống',
				// 'selItems.required' => 'Tên thiết bị không được để trống',
				'txtPrice.required' => 'Giá không được để trống',
				'txtWarrantyDate.required' => 'Ngày bảo hành không được để trống',
				'txtDeviceName.required' => 'Tên thiết bị không được để trống',
				'txtDescription.required' =>'Chưa nhập thông tin ghi chú'

			]);

			if($validator->passes())
			{
				if($request->hasFile('itemImage')){
					$item_parent_id_tmp =0;
					if($request->selItems !="")
					{
						$tmpIt = "'".(string)$request->selItems ."'";
						
						$tmpId = DB::table('tbl_item')->select('item_id')->where('tbl_item.item_name', '=', $request->selItems)->get();
						$item_parent_id_tmp = $tmpId[0]->item_id;


					}
					
					$fullName = $request->selPartners;

					$partner = DB::table('tbl_partner')->select('partner_id')->where('tbl_partner.partner_full_name', '=', $fullName)->get();
					$partnerId = $partner[0]->partner_id;
					// echo $partnerId;
					// exit;


					$fileName = Input::file('itemImage')->getClientOriginalName();
					$file = $request->file('itemImage');
					$file->move('img/products', $fileName);
					$item = new Item();
					$item->item_name = $request->txtDeviceName;
					$item->item_parent_id = $item_parent_id_tmp;
					$item->item_type = 0;
					$item->image = $fileName;
					$item->description = $request->txtDescription;
					$item->warranty_date = $request->txtWarrantyDate;
					$item->price = $request->txtPrice;
					$item->note_id = 0;
					$item->partner_id =$partnerId;
					$item->timestamps = false;
					$item->save();
					$resItem = $item;
					$resItem ->selItems = $request->selItems;
					// $resItem =(array)($resItem);

					$partners = Partner::all();
					$items = Item::all();
					$resAddData = (object) [
						'items'=>$items,
						'partners'=>$partners,
						'type'=>0,
						'resItem' => $resItem
					];
					return view('item/itemDetail', compact('resAddData'));
				}
			}
			else{
				return Redirect::back()->with('errors', $validator->errors());
			}
		}
		public function getAddItem2(){
			$partners = Partner::all();
			$items = Item::all();
			$dataSendAdd = (object) [
				'items'=>$items,
				'partners'=>$partners,
				'type'=>0
			];
			return view('item/itemDetail', compact('dataSendAdd'));
		}

		//add new item
		public function postAddItem2(Request $request){
			$validator = validator::make($request->all(),[
				'itemImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
				'selPartners' => 'required',
				'txtPrice'		=>'required',
				'txtWarrantyDate' => 'required',
				'txtDeviceName' => 'required',
				'txtDescription'=>'required',
			]

			,[
				'itemImage.image' => 'File không phải là hình',
				'itemImage.mimes' => 'Định dạng hình không phù hợp',
				'itemImage.max'	  => 'Kích cỡ hình quá lớn',
				'selPartners.required' => 'Tên công ty không được để trống',
				// 'selItems.required' => 'Tên thiết bị không được để trống',
				'txtPrice.required' => 'Giá không được để trống',
				'txtWarrantyDate.required' => 'Ngày bảo hành không được để trống',
				'txtDeviceName.required' => 'Tên thiết bị không được để trống',
				'txtDescription.required' =>'Chưa nhập thông tin ghi chú'

			]);

			if($validator->passes())
			{
				if($request->hasFile('itemImage')){
					$item_parent_id_tmp =0;
					if($request->selItems !="")
					{
						$tmpIt = "'".(string)$request->selItems ."'";
						
						$tmpId = DB::table('tbl_item')->select('item_id')->where('tbl_item.item_name', '=', $request->selItems)->get();
						$item_parent_id_tmp = $tmpId[0]->item_id;


					}
					
					$fullName = $request->selPartners;

					$partner = DB::table('tbl_partner')->select('partner_id')->where('tbl_partner.partner_full_name', '=', $fullName)->get();
					$partnerId = $partner[0]->partner_id;
					// echo $partnerId;
					// exit;


					$fileName = Input::file('itemImage')->getClientOriginalName();
					$file = $request->file('itemImage');
					$file->move('img/products', $fileName);
					$item = new Item();
					$item->item_name = $request->txtDeviceName;
					$item->item_parent_id = $item_parent_id_tmp;
					$item->item_type = 0;
					$item->image = $fileName;
					$item->description = $request->txtDescription;
					$item->warranty_date = $request->txtWarrantyDate;
					$item->price = $request->txtPrice;
					$item->note_id = 0;
					$item->partner_id =$partnerId;
					$item->timestamps = false;
					$item->save();
					return Redirect::back()->with('addSuccsess', ['Thêm mới thiết bị thành công1']);
				}
			}
			else{
				return Redirect::back()->with('errors', $validator->errors());
			}
			echo "asdasd";
		}
		public function getItems(){
			$itemAll = Item::all();
		// $items = Item::paginate(2);
			$items = DB::table('tbl_item')->leftJoin ('tbl_task', 'tbl_item.item_id', '=', 'tbl_task.item_id')->select('tbl_item.item_id', 'tbl_item.item_parent_id', 'tbl_item.item_name', 'tbl_item.image', 'tbl_item.item_type', 'tbl_item.description', 'tbl_item.warranty_date', 'tbl_item.note_id', 'tbl_item.partner_id', 'tbl_task.res_end_time')->paginate(10);
			$partners = Partner::all();

			$dataSend = $param = (object) [
				'items' => $items,
				'partners' => $partners,
				'itemAll' =>$itemAll
			];
		// print_r($dataSend->items[0]['item_id']);

			return view('item/item', compact('dataSend'));
		}

		public function postItems(Request $request){
			$startDate = Carbon::parse($request->txtStartDate);
			$endDate  =Carbon::parse($request->txtEndDate);
			$dataCheck  = array('startDate' => $startDate, 'endDate'=>$endDate );
			$validator = Validator::make($request->all(), [
				'txtStartDate' => 'required"',
				'txtStartDate' => 'required',
				'selCustomers' => 'required',

			],
			[
				'txtStartDate.required'=>"Thiếu thông tin ngày bắt đầu",
				'txtStartDate.required'=>"Thiếu thông tin ngày kết thúc",
				'selCustomers.required'=>"Thiếu thông tin khách hàng",
			]
		);


			$flagCheckDate =true;
			if($request->txtEndDate !="" && $request->txtStartDate!="")
			{
				if(strtotime($request->txtStartDate) > strtotime($request->txtEndDate) )
				{
					$dataError = $param = (object) [
						'data' => $request,
						'error' => "Ngày bắt đầu bảo hành phải trước ngày kết thúc bảo hành"
					];
				// echo strtotime($request->txtStartDate) . " == " .  strtotime($request->txtEndDate); exit;
					return view('item/item', compact('dataError'));
				}
			}
			if($request->txtBDBT !="" && $request->txtKTBT!="")
			{
				if(strtotime($request->txtBDBT) > strtotime($request->txtKTBT) )
				{
					$dataError = $param = (object) [
						'data' => $request,
						'error' => "Ngày bắt đầu bảo trì phải trước ngày kết thúc bảo trì"
					];
					return view('item/item', compact('dataError'));
				}
			}


			$partners = Partner::all();
		//check empty 
			$items;
			$items = DB::table('tbl_item')->leftJoin ('tbl_task', 'tbl_item.item_id', '=', 'tbl_task.item_id')->select('tbl_item.item_id', 'tbl_item.item_parent_id', 'tbl_item.item_name', 'tbl_item.image', 'tbl_item.item_type', 'tbl_item.description', 'tbl_item.warranty_date', 'tbl_item.note_id', 'tbl_item.partner_id', 'tbl_task.res_end_time')->where('tbl_item.item_type','=','0' );

			if($request->txtStartDate !=""){

				$items = $items->where('tbl_item.warranty_date','>=', $request->txtStartDate );

			}
			if($request->txtEndDate !=""){
				$items = $items->where('tbl_item.warranty_date','<=', $request->txtEndDate );
			}

			if($request->selCustomers !=""){
				$fullName = $request->selCustomers;
				$partner_id = DB::table('tbl_partner')->select('partner_id')->where('tbl_partner.partner_full_name', '=', $fullName)->get();
				$partnerId = $partner_id[0]->partner_id;
				$items = $items->where('tbl_item.partner_id','=', $partnerId );
			}
			if($request->txtBDBT !="")
			{
				$items = $items->where('tbl_task.rea_start_time','>=', $request->txtBDBT );
			}
			if($request->txtKTBT !="")
			{
				$items = $items->where('tbl_task.rea_end_time','<=', $request->txtKTBT );
			}
			if($request->selDevice !=""){
				$items = $items->where('tbl_item.item_name','=', $request->selDevice );
			}

			$items = $items->paginate(10);
			$itemAll = Item::all();
			$dataSend = $param = (object) [
				'items' => $items,
				'partners' => $partners,
				'itemAll' =>$itemAll
			];
			return view('item/item', compact('dataSend'));


		}
	}
