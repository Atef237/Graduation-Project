<?php


namespace App\Repositories;


use App\Models\old\Client;

class ClientRepository
{
    public function index()
    {
        return Client::all();
    }

    public function show($id)
    {
        return Client::findOrFail($id);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
        ];
        $client = Client::create($data);
        if($request->hasFile('identity_image')) {
            $client->clearMediaCollection('IDENTITY_IMAGE');
            $client->addMedia($request->identity_image)->toMediaCollection('IDENTITY_IMAGE');
        }
        $client->save();
    }

    public function update($id, $request)
    {
        $client = $this->show($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nationality' => $request->nationality,
        ];
        $client->update($data);
        if($request->hasFile('identity_image')){
            $client->clearMediaCollection('IDENTITY_IMAGE');
            $client->addMedia($request->identity_image)->toMediaCollection('IDENTITY_IMAGE');
        }
    }

    public function destroy($id)
    {
        Client::destroy($id);
    }
}
