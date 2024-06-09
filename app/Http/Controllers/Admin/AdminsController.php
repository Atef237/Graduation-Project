<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\AdminsRepository;
use Illuminate\Http\Request;


class AdminsController extends Controller
{
    private $adminsRepository;

    public function __construct(AdminsRepository $adminsRepository)
    {
        $this->adminsRepository = $adminsRepository;
    }

    public function index()
    {

        $rows = $this->adminsRepository->index();
        return view('dashboard.v1.admin.index', compact('rows'));
    }


    public function create()
    {
        return view('dashboard.v1.admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'is_active' => 'required|in:1,0',
            'password' => 'required|min:6',
            'image' => 'image'
        ]);
        $this->adminsRepository->store();
        success_toast();
        return redirect()->route('admins.index');
    }


    public function edit($id)
    {
        $row = $this->adminsRepository->show($id);
        return view('dashboard.v1.admin.edit', compact('row'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'status' => 'required|in:active,not_active',
            'password' => 'nullable|min:6',
        ]);
        $this->adminsRepository->update($id);

        success_toast();

        return redirect()->route('admins.index');

    }


    public function destroy($id)
    {
        $this->adminsRepository->destroy($id);

        success_toast();

        return redirect()->back();
    }
}
