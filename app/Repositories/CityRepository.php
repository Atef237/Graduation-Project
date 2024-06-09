<?php


namespace App\Repositories;


use App\Models\old\City;

class CityRepository
{
    public function index()
    {
        return City::all();
    }
    public function show($id){
        return City::findOrFail($id);
    }
    public function store($request)
    {
        $data = [
            'ar' => [
                'name' => $request->name_ar,
            ],
            'en' => [
                'name' => $request->name_en,
            ],
            'phone_key' => $request->phone_key,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'country_id' => $request->country_id,
        ];
        $city = City::create($data);
        $city->save();
    }
    public function update($id,$request){
        $city = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
            ],
            'en' => [
                'name' => $request->name_en,
            ],
            'phone_key' => $request->phone_key,
            'lat' => $request->lat,
            'lng' => $request->lng,
            'country_id' => $request->country_id,
        ];
        $city->update($data);
    }
    public function destroy($id){
        City::destroy($id);
    }

}
