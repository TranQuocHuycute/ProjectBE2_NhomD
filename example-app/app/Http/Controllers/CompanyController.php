<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function getCompany(Request $request){
        $per_page = $request->input('per_page');
        //$obj = new Company();
        //$compagnies = $obj->paginate($per_page);
        
        return view ('perpage' , ['per_page'=>$per_page]);
        
    }
    public function messages()
{
    return [
        'username.required' => 'Username không được để trống',

        'email.email' => 'Email không đúng định dạng',

        'password.min' => 'Mật khẩu tối thiểu 8 kí tự',

        'password_confirmation.same' => 'Mật khẩu không trùng nhau',
    ];
}
}

