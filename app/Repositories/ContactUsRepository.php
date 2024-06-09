<?php

namespace App\Repositories;

use App\Models\ContactUs;

class ContactUsRepository
{
    public function store($request)
    {

        ContactUs::create($request->all());

    }

    public function index()
    {
        return ContactUs::orderByDesc('id')->get();
    }

    public function destroy($id)
    {
        ContactUs::destroy($id);
        success_toast();
        return redirect()->back();
    }
}
