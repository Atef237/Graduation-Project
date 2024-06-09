<?php

namespace App\Repositories;

use App\Models\Setting;

class SettingsRepository
{
    public function index()
    {
        return Setting::all();
    }

    public function store()
    {

        $requests = request()->except('_token');
        foreach ($requests as $key => $value) {

            $this->createSetting($key, $value);
        }
    }

    public function createSetting($key, $value)
    {
        $setting = Setting::where('key', $key)->first();


        if (isset($setting)) {
            $setting->key = $key;
            $setting->value = $value;
            $setting->update();
        } else {


            Setting::create([
                'key' => $key,
                'value' => $value
            ]);
        }

    }

}
