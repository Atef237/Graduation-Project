<?php


namespace App\Repositories;


use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class AdminsRepository
{
    public function index()
    {
        return Admin::orderByDesc('id')->get();
    }

    public function store()
    {
        $admin = new Admin();
        $admin['name'] = request()->name;
        $admin['email'] = request()->email;
        $admin['is_active'] = request()->is_active;
        $admin['password'] = bcrypt(request()->password);
        $admin->save();
        $admin->syncPermissions(request()->permissions);

    }

    public function show($admin_id)
    {
        return Admin::findOrFail($admin_id);
    }

    public function update($id)
    {
        $admin = $this->show($id);
        $admin['name'] = request()->name;
        $admin['email'] = request()->email;
        $admin['is_active'] = request()->is_active;

        if (request()->password) $admin['password'] = bcrypt(request()->password);
        $admin->update();
        $admin->syncPermissions(request()->permissions);
    }
    public function destroy($id){
        Admin::destroy($id);
    }
}
