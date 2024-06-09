<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\BeneficiaryRegister;
use App\Models\Hamada;
use App\Models\User;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index()
    {
        return view('web.beneficiaryAuth');
    }

    public function showRegisterForm()
    {
        return view('web.beneficiaryRegister');
    }

    public function showLoginForm()
    {
        return view('web.beneficiaryLogin');
    }

    public function postLogin(Request $request)
    {
//        dd(auth()->attempt(['phone' => $request->phone, 'password' => $request->password]));
        if(auth()->attempt(['phone' => $request->phone, 'password' => $request->password])){
            return redirect()->route('home');
        }
        return back()->withErrors(['phone' => 'The provided credentials do not match our records.']);
    }


    public function postRegister(BeneficiaryRegister $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect()->route('home');
    }


    public function profile()
    {
        return view('web.profile');
    }
}