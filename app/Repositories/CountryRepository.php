<?php


namespace App\Repositories;


use App\Models\old\Country;

class CountryRepository
{
    public function index()
    {
        return Country::all();
    }
    public function show($id){
        return Country::findOrFail($id);
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
            'code_name' => $request->code_name,
            'phone_key' => $request->phone_key,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ];
        $country = Country::create($data);
        if( $request->hasFile('image') ){
            $country->addMedia($request->image)->toMediaCollection('Flag');
        }
        $country->save();
    }
    public function update($id,$request){
        $country = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
            ],
            'en' => [
                'name' => $request->name_en,
            ],
            'code_name' => $request->code_name,
            'phone_key' => $request->phone_key,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ];
        $country->update($data);
        if($request->hasFile('image')){
            $country->clearMediaCollection('Flag');
            $country->addMedia($request->image)->toMediaCollection('Flag');
        }
    }
    public function destroy($id){
        Country::destroy($id);
    }

}
