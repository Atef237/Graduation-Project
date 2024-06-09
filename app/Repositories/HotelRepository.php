<?php


namespace App\Repositories;


use App\Models\old\Hotel;

class HotelRepository
{
    public function search($data)
    {
        return Hotel::
        when(isset($data['city_id']),fn($q)=>$q->where('city_id',$data['city_id']))
        ->when(isset($data['country_id']),fn($q)=>$q->where('country_id',$data['country_id']))
        ->when(isset($data['hotel_category_id']),fn($q)=>$q->where('hotel_category_id',$data['hotel_category_id']));
    }
    public function index()
    {
        return Hotel::all();
    }

    public function show($id)
    {
        return Hotel::findOrFail($id);
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
            'phone' => $request->phone,
            'website' => $request->website,
            'info' => $request->info,
            'lng' => $request->lng,
            'lat' => $request->lat,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'hotel_category_id' => $request->hotel_category_id,
        ];
        $hotel = Hotel::create($data);
        if($request->hasFile('image')){
            $hotel->clearMediaCollection('HotelImg');
            $hotel->addMedia($request->image)->toMediaCollection('HotelImg');
        }
        $hotel->save();
    }

    public function update($id, $request)
    {
        $hotel = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
            ],
            'en' => [
                'name' => $request->name_en,
            ],
            'phone' => $request->phone,
            'website' => $request->website,
            'info' => $request->info,
            'lng' => $request->lng,
            'lat' => $request->lat,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'hotel_category_id' => $request->hotel_category_id,
        ];
        $hotel->update($data);
        if($request->hasFile('image')){
            $hotel->clearMediaCollection('HotelImg');
            $hotel->addMedia($request->image)->toMediaCollection('HotelImg');
        }
    }

    public function destroy($id)
    {
        Hotel::destroy($id);
    }

}
