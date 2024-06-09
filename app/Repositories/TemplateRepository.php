<?php


namespace App\Repositories;


use App\Models\Template;

class TemplateRepository
{
    public function index()
    {
        return Template::all();
    }
    public function show($id){
        return Template::findOrFail($id);
    }
    public function store($request)
    {
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'description' => $request->description_ar
            ],
            'en' => [
                'name' => $request->name_en,
                'description' => $request->description_en
            ],
            'price_en'=> $request->price_en,
            'price_ar'=> $request->price_ar,
            'price_both'=> $request->price_both,
        ];
        $category = Template::create($data);
        if( $request->hasFile('image') ){
            $category->addMedia($request->image)->toMediaCollection('Template');
        }
        if( $request->hasFile('cover') ){
            $category->addMedia($request->cover)->toMediaCollection('Cover');
        }
        $category->save();
    }
    public function update($id,$request){
        $category = $this->show($id);
        $data = [
            'ar' => [
                'name' => $request->name_ar,
                'description' => $request->description_ar
            ],
            'en' => [
                'name' => $request->name_en,
                'description' => $request->description_en
            ],
            'price_en'=> $request->price_en,
            'price_ar'=> $request->price_ar,
            'price_both'=> $request->price_both,
            'discount'=> $request->discount,
            'discount_start_date'=> $request->discount_start_date,
            'discount_end_date'=> $request->discount_end_date,
        ];
        $category->update($data);
        if($request->hasFile('image')){
            $category->clearMediaCollection('Template');
            $category->addMedia($request->image)->toMediaCollection('Template');
        }
        if($request->hasFile('cover')){
            $category->clearMediaCollection('Cover');
            $category->addMedia($request->cover)->toMediaCollection('Cover');
        }
    }
    public function destroy($id){
        Template::destroy($id);
    }

}
