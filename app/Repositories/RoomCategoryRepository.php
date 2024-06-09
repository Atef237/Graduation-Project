<?php


namespace App\Repositories;


use App\Models\old\RoomCategory;

class RoomCategoryRepository
{
    public function index()
    {
        return RoomCategory::all();
    }
    public function show($id){
        return RoomCategory::findOrFail($id);
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
        ];
        $category = RoomCategory::create($data);
        $category->save();
    }
    public function update($id,$request){
        $category = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
            ],
            'en' => [
                'name' => $request->name_en,
            ],
        ];
        $category->update($data);
    }
    public function destroy($id){
        RoomCategory::destroy($id);
    }

}
