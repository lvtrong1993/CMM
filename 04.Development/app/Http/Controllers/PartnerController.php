<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Partner;
use App\Http\Requests;
use Validator;
use Response;

class PartnerController extends Controller
{
    public function show(Request $req)
    {

    	if($req->search == "")
    	{
	    	$partner = Partner::paginate(10);

	    	return view('partner.index',compact('partner'));
		}
    	else
    	{
    		$partner = Partner::where('partner_full_name','LIKE','%'.  $req->search .'%' )->paginate(10);
    		$partner->appends($req->only('search'));
    		$partners = Partner::paginate(10);
    		$obj = (object)(array('partner'=>$partner,'partners'=>$partners));
    		return view('partner.index',compact('obj'));
    	}

    }

    public function edit($id)
    {
    	$partner = Partner::find($id);

    	return view('partner.edit',compact('partner'));
    }

    public function create()
    {
    	return view('partner.create');
    }

    public function store(Request $request)
    {
    	$validator = validator::make($request->all(),[
    		'fullname' => 'required|min:5|string',
    		'address' => 'required',
    		'phone' => 'required|numeric|min:2',
    		'email' => 'required|email',
    	],[
    		'fullname.required' => 'Họ tên của khách hàng không được phép để trống',
    		'fullname.min' => 'Họ tên của khách hàng không được dưới 5 ký tự',
    		'fullname.string' => 'Họ tên của khách hàng không được phép dùng số',
    		'address.required' => 'Địa chỉ của khách hàng không được phép để trống',
    		'phone.required' => 'Số điện thoại của khách hàng không được phép để trống',
    		'phone.numeric' => 'Số điện thoại không được phép dùng chữ',
    		'phone.min' => 'Số điện thoại của khách hàng không được phép dưới 2 số',
    		'email.required' => 'Email của khách hàng không đước phép để trống',
    		'email.email' => 'Email của khách hàng không đúng với định dạng email',
    	]);

    	if($validator->passes())
    	{
    		$partners = new Partner;
    		$partners->partner_full_name = $request->input('fullname');
    		$partners->partner_short_name = $request->input('shortname');
    		$partners->address = $request->input('address');
    		$partners->phone = $request->input('phone');
    		$partners->email = $request->input('email');
    		$partners->contacter = $request->input('contacter');
    		$partners->note = $request->input('note');
    		$partners->save();
    		
    		return Response::json(['success' => 'Thao tác thành công']);
    	}

    	return Response::json(['errors' => $validator->errors()]);
    }

    public function update(Request $req , $id)
    {
    	$validators = validator::make($req->all(),[
    		'fullname' => 'required|min:5|string',
    		'address' => 'required',
    		'phone' => 'required|numeric|min:2',
    		'email' => 'required|email',
    	],[
    		'fullname.required' => 'Họ tên của khách hàng không được phép để trống',
    		'fullname.min' => 'Họ tên của khách hàng không được dưới 5 ký tự',
    		'fullname.string' => 'Họ tên của khách hàng không được phép dùng số',
    		'address.required' => 'Địa chỉ của khách hàng không được phép để trống',
    		'phone.required' => 'Số điện thoại của khách hàng không được phép để trống',
    		'phone.numeric' => 'Số điện thoại không được phép dùng chữ',
    		'phone.min' => 'Số điện thoại của khách hàng không được phép dưới 2 số',
    		'email.required' => 'Email của khách hàng không đước phép để trống',
    		'email.email' => 'Email của khách hàng không đúng với định dạng email',
    	]);

    	if($validators->passes())
    	{
    		$partner = Partner::find($id);
    		$partner->partner_full_name = $req->input('fullname');
    		$partner->partner_short_name = $req->input('shortname');
    		$partner->address = $req->input('address');
    		$partner->phone = $req->input('phone');
    		$partner->email = $req->input('email');
    		$partner->contacter = $req->input('contacter');
    		$partner->note = $req->input('note');
    		$partner->update();
    		
    		return Response::json(['success' => 'Thao tác thành công']);
    	}

    	return Response::json(['errors' => $validator->errors()]);

    }

}
