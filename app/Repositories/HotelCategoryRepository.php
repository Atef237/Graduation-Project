<?php


namespace App\Repositories;


use App\Models\old\HotelCategory;

class HotelCategoryRepository
{
    public function index()
    {
        return HotelCategory::all();
    }
    public function show($id){
        return HotelCategory::findOrFail($id);
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
        $category = HotelCategory::create($data);
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
        HotelCategory::destroy($id);
    }

}
