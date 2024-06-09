<?php


namespace App\Repositories;


use App\Models\old\CarBrand;

class CarBrandRepository
{
    public function index()
    {
        return CarBrand::all();
    }
    public function show($id){
        return CarBrand::findOrFail($id);
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
        $category = CarBrand::create($data);
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
        CarBrand::destroy($id);
    }

}
