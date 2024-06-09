<?php


namespace App\Repositories;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function index()
    {
        return User::all();
    }
    public function show($id){
        return User::findOrFail($id);
    }
    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'phone' => $request->phone,
        ];
        $data['password'] = Hash::make($request->password);
        $User=User::create($data);
        if($request->hasFile('image')){
            $User->clearMediaCollection('User');
            $User->addMedia($request->image)->toMediaCollection('User');
        }
        $User->email_verified_at = Carbon::now();
        $User->save();
    }
    public function update($id,$request){
        $User = $this->show($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'phone' => $request->phone,
        ];
        $data['password'] = Hash::make($request->password);
        $User->update($data);
        $User->email_verified_at = Carbon::now();
        $User->save();
        if($request->hasFile('image')){
            $User->clearMediaCollection('User');
            $User->addMedia($request->image)->toMediaCollection('User');
        }
    }
    public function destroy($id){
        User::destroy($id);
    }

}
