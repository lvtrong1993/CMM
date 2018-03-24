<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Partner;
use App\User;
use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function show(Request $req)
    {
    	if($req->search_user == "" && $req->search_fullname == "")
    	{
    		$user = DB::table('tbl_user')
    				->leftJoin('tbl_partner','tbl_user.partner_id','=','tbl_partner.partner_id')
                    ->select('tbl_user.*','tbl_partner.partner_full_name')
    				->paginate(10);

    		return view('user.index',compact('user'));
    	}
    	else
    	{
            $user = DB::table('tbl_user')
                    ->leftJoin('tbl_partner','tbl_user.partner_id','=','tbl_partner.partner_id')
                    ->select('tbl_user.*','tbl_partner.partner_full_name')
                    ->where(DB::raw('CONCAT(tbl_user.first_name, " " ,tbl_user.last_name)'),'LIKE', '%' . $req->search_user . '%')
                    ->where('tbl_partner.partner_full_name','LIKE' , '%' . $req->search_fullname . '%' )
                    ->paginate(10);

    		$user->appends($req->only('search_user','search_fullname'));

    		$users = DB::table('tbl_user')
    				->leftJoin('tbl_partner','tbl_user.partner_id','=','tbl_partner.partner_id')
                    ->select('tbl_user.*','tbl_partner.partner_full_name')
    				->paginate(10);
    		$obj = (object)(array('user'=>$user,'users'=>$users));

    		return view('user.index',compact('obj'));
    	}
    }

    public function edit($id)
    {
        $user = DB::table('tbl_user')
                ->leftJoin('tbl_partner','tbl_user.partner_id','=','tbl_partner.partner_id')
                ->select('tbl_user.*','tbl_partner.partner_full_name','tbl_partner.partner_id')
                ->where('tbl_user.user_id',$id)
                ->first();

        $partner = Partner::all();

        return view('user.edit',['user'=>$user,'partner'=>$partner]);
    }

    public function update(Request $req , $id)
    {
        $validator = validator::make($req->all(),[
            'email' => 'email',
            'password' => 'min:4|max:20',
            'repassword' => 'same:password',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
        ],[
            'email.email' => 'Email của người dùng không đúng định dạng',
            'password.min' => 'Mật khẩu không được nhỏ hơn 4 ký tự',
            'password.max' => 'Mật khẩu không được lớn hơn 20 ký tự',
            'repassword.same' => 'Xác nhận mật khẩu không trùng khớp',
            'firstname.required' => 'Họ của người dùng không được phép để trống',
            'firstname.string' => 'Họ của người dùng không được phép sử dụng ký tự số',
            'lastname.required' => 'Tên của người dùng không được phép để trống',
            'lastname.string' => 'Tên của người dùng không được phép sử dụng ký tự số',
        ]);

        if($validator->passes())
        {
            if (Input::hasFile('image'))
                {
                    $fileName = Input::file('image')->getClientOriginalName();
                    $file = $req->file('image');
                    $file->move('img',$fileName);
                    $user = User::find($id);
                    $user->email = $req->input('email');
                    $user->password = bcrypt($req->input('password'));
                    $user->first_name = $req->input('firstname');
                    $user->last_name = $req->input('lastname');
                    $user->avatar_path = $fileName;
                    $user->gender_id = $req->input('gender');
                    $user->address = $req->input('address');
                    $user->phone = $req->input('phone');
                    $user->partner_id = $req->input('company');
                    $user->role = $req->input('role');
                    $user->update();
                    return Response::json(['success' => 'Thao tác thành công']);

                }
                else{
                    $user = User::find($id);
                    $user->email = $req->input('email');
                    $user->password = bcrypt($req->input('password'));
                    $user->first_name = $req->input('firstname');
                    $user->last_name = $req->input('lastname');
                    $user->gender_id = $req->input('gender');
                    $user->address = $req->input('address');
                    $user->phone = $req->input('phone');
                    $user->partner_id = $req->input('company');
                    $user->role = $req->input('role');
                    $user->update();
                    return Response::json(['success' => 'Thao tác thành công']);
                }
        }
        return Response::json(['errors' => $validator->errors()]);
    }

    public function create()
    {
        $partner = Partner::all();

        return view('user.create',compact('partner'));
    }

    public function store(Request $req)
    {
        $validator = validator::make($req->all(),[
            'email' => 'email|unique:tbl_user,email',
            'password' => 'min:4|max:20',
            'repassword' => 'same:password',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
        ],[
            'email.email' => 'Email của người dùng không đúng định dạng',
            'email.unique' => 'Email đã có người sử dụng',
            'password.min' => 'Mật khẩu không được nhỏ hơn 4 ký tự',
            'password.max' => 'Mật khẩu không được lớn hơn 20 ký tự',
            'repassword.same' => 'Xác nhận mật khẩu không trùng khớp',
            'firstname.required' => 'Họ của người dùng không được phép để trống',
            'firstname.string' => 'Họ của người dùng không được phép sử dụng ký tự số',
            'lastname.required' => 'Tên của người dùng không được phép để trống',
            'lastname.string' => 'Tên của người dùng không được phép sử dụng ký tự số',
        ]);

        if($validator->passes())
        {
            if (Input::hasFile('image'))
            {
                $fileName = Input::file('image')->getClientOriginalName();
                $file = $req->file('image');
                $file->move('img',$fileName);
                $user = new User;
                $user->email = $req->input('email');
                $user->password = bcrypt($req->input('password'));
                $user->first_name = $req->input('firstname');
                $user->last_name = $req->input('lastname');
                $user->avatar_path = $fileName;
                $user->gender_id = $req->input('gender');
                $user->address = $req->input('address');
                $user->phone = $req->input('phone');
                $user->partner_id = $req->input('company');
                $user->role = $req->input('role');
                $user->save();
                return Response::json(['success' => 'Thao tác thành công']);
            }
            else
            {
                $user = new User;
                $user->email = $req->input('email');
                $user->password = bcrypt($req->input('password'));
                $user->first_name = $req->input('firstname');
                $user->last_name = $req->input('lastname');
                $user->gender_id = $req->input('gender');
                $user->address = $req->input('address');
                $user->phone = $req->input('phone');
                $user->partner_id = $req->input('company');
                $user->role = $req->input('role');
                $user->save();
                return Response::json(['success' => 'Thao tác thành công']);
            }
        }

        return Response::json(['errors' => $validator->errors()]);
    }
}
