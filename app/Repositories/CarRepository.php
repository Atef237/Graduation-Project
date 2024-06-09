<?php


namespace App\Repositories;


use App\Models\old\Car;

class CarRepository
{
    public function search($data)
    {
        return Car::
        when(isset($data['city_id']), fn($q) => $q->where('city_id', $data['city_id']))
            ->when(isset($data['country_id']), fn($q) => $q->where('country_id', $data['country_id']))
            ->when(isset($data['car_type_id']), fn($q) => $q->where('car_type_id', $data['car_type_id']));
    }

    public function index()
    {
        return Car::all();
    }

    public function show($id)
    {
        return Car::findOrFail($id);
    }

    public function store($request)
    {
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'driver_name' => $request->driver_name_ar,
                'description' => $request->description_ar,
            ],
            'en' => [
                'name' => $request->name_en,
                'driver_name' => $request->driver_name_en,
                'description' => $request->description_en,
            ],
            'manufacturing_year' => $request->manufacturing_year,
            'license_number' => $request->license_number,
            'driver_phone' => $request->driver_phone,
            'day_rent_price' => $request->day_rent_price,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'car_brand_id' => $request->car_brand_id,
            'car_type_id' => $request->car_type_id,
        ];
        $car = Car::create($data);
        if ($request->hasFile('car_image')) {
            $car->clearMediaCollection('CarImg');
            $car->addMedia($request->car_image)->toMediaCollection('CarImg');
        }
        if ($request->hasFile('driver_photo')) {
            $car->clearMediaCollection('DriverImg');
            $car->addMedia($request->driver_photo)->toMediaCollection('DriverImg');
        }
        $car->save();
    }

    public function update($id, $request)
    {
        $car = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'driver_name' => $request->driver_name_ar,
                'description' => $request->description_ar,
            ],
            'en' => [
                'name' => $request->name_en,
                'driver_name' => $request->driver_name_en,
                'description' => $request->description_en,
            ],
            'manufacturing_year' => $request->manufacturing_year,
            'license_number' => $request->license_number,
            'driver_phone' => $request->driver_phone,
            'day_rent_price' => $request->day_rent_price,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'car_brand_id' => $request->car_brand_id,
            'car_type_id' => $request->car_type_id,
        ];
        $car->update($data);
        if ($request->hasFile('car_image')) {
            $car->clearMediaCollection('CarImg');
            $car->addMedia($request->car_image)->toMediaCollection('CarImg');
        }
        if ($request->hasFile('driver_photo')) {
            $car->clearMediaCollection('DriverImg');
            $car->addMedia($request->driver_photo)->toMediaCollection('DriverImg');
        }
    }

    public function destroy($id)
    {
        Car::destroy($id);
    }

}
