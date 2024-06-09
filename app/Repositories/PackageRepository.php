<?php


namespace App\Repositories;


use App\Models\old\Package;

class PackageRepository
{
    public function index()
    {
        return Package::all();
    }

    public function show($id)
    {
        return Package::findOrFail($id);
    }

    public function store($request)
    {
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'description' => $request->description_ar,
            ],
            'en' => [
                'name' => $request->name_en,
                'description' => $request->description_en,
            ],
            'admin_id' => auth('admin')->id(),
            'package_id' => $request->package_id,
            'room_id' => $request->room_id,
            'hotel_id' => $request->hotel_id,
            'car_id' => $request->car_id,
            'residence_days' => $request->residence_days,
            'price' => $request->price,
            'currency' => $request->currency,
            'start_date' => $request->start_date,
            'expire_date' => $request->expire_date,
        ];
        $package = Package::create($data);
        if($request->hasFile('image')){
            $package->clearMediaCollection('PackageImg');
            $package->addMedia($request->image)->toMediaCollection('PackageImg');
        }
        $package->save();
    }

    public function update($id, $request)
    {
        $package = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'description' => $request->description_ar,
            ],
            'en' => [
                'name' => $request->name_en,
                'description' => $request->description_en,
            ],
            'updated_by' => auth('admin')->id(),
            'package_id' => $request->package_id,
            'hotel_id' => $request->hotel_id,
            'room_id' => $request->room_id,
            'car_id' => $request->car_id,
            'residence_days' => $request->residence_days,
            'price' => $request->price,
            'currency' => $request->currency,
            'start_date' => $request->start_date,
            'expire_date' => $request->expire_date,
        ];
        $package->update($data);
        if($request->hasFile('image')){
            $package->clearMediaCollection('PackageImg');
            $package->addMedia($request->image)->toMediaCollection('PackageImg');
        }
    }

    public function destroy($id)
    {
        Package::destroy($id);
    }

}
