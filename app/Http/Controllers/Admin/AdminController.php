<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminAuthRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function auth(AdminAuthRequest $request)
    {

        @app()->setLocale('ar');

        if (Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password'], 'is_active' => '1'])) {

            toast('مرحبا بكم في لوحة التحكم', 'success', 'left');

            return redirect()->route('admin.home');
        }
        else {

            Alert::error('خطأ في البيانات', 'البريد الألكتروني أو الرقم السري خطأ');

            return redirect()->back();
        }
    }
}
