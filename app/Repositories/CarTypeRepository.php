<?php


namespace App\Repositories;


use App\Models\old\CarType;

class CarTypeRepository
{
    public function index()
    {
        return CarType::all();
    }
    public function show($id){
        return CarType::findOrFail($id);
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
        $category = CarType::create($data);
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
        CarType::destroy($id);
    }

}
