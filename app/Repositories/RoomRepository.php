<?php


namespace App\Repositories;


use App\Models\old\Room;

class RoomRepository
{

    public function search($data)
    {
        return Room::
        when(isset(data['hotel_id']), fn($q) => $q->where('hotel_id', $data['hotel_id']))
            ->when(isset($data['room_category_id']), fn($q) => $q->where('room_category_id', $data['room_category_id']));
    }

    public function index()
    {
        return Room::all();
    }

    public function show($id)
    {
        return Room::findOrFail($id);
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
            'floor_number' => $request->floor_number,
            'beds_number' => $request->beds_number,
            'night_price' => $request->night_price,
            'is_children_available' => $request->is_children_available ?? 0,
            'hotel_id' => $request->hotel_id,
            'room_category_id' => $request->room_category_id,
        ];
        $hotel = Room::create($data);
        if ($request->hasFile('image')) {
            $hotel->clearMediaCollection('RoomImg');
            $hotel->addMedia($request->image)->toMediaCollection('RoomImg');
        }
        $hotel->save();
    }

    public function update($id, $request)
    {
        $hotel = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'description' => $request->description_ar,
            ],
            'en' => [
                'name' => $request->name_en,
                'description' => $request->description_en,
            ],
            'floor_number' => $request->floor_number,
            'beds_number' => $request->beds_number,
            'night_price' => $request->night_price,
            'is_children_available' => $request->is_children_available ?? 0,
            'hotel_id' => $request->hotel_id,
            'room_category_id' => $request->room_category_id,
        ];
        $hotel->update($data);
        if ($request->hasFile('image')) {
            $hotel->clearMediaCollection('RoomImg');
            $hotel->addMedia($request->image)->toMediaCollection('RoomImg');
        }
    }

    public function destroy($id)
    {
        Room::destroy($id);
    }

    public  function calculatePrice($request){
//        dd($request);

        $room = $this->show($request->room_id);
        $price = $room->night_price * $request->residenceDays;
//        dd($price);
        return $price;
    }

}
