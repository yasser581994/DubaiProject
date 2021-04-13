<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getSettings()
    {
        return view('backend.settings')->with('settings',Setting::all());
    }
    public function editSettings(Request $request)
    {
        $data = $request->except(['_token']);

        foreach (Setting::all() as $setting)
        {
            $setting->where('setting_name',$setting->setting_name)->update([
                'setting_value'=>$data[$setting->setting_name]
            ]);
        }
        return redirect()->back()->with('success','settings has been edited');

    }
}
