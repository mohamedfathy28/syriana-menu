<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeLangRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function changeLang(ChangeLangRequest $request)
    {
        auth()->user()->update(['lang' => $request->validated()['lang']]);

        return redirect()->back();
    }
    
    
        public function setting() {
        
        $settings = Settings::orderBy('id','ASC')->get();
        $route = route('settingsave');

        return view('settings.global-form',compact('route','settings'));   
    
    }
    
    
    
    public function settingsave(Request $request) {
      

     foreach ($request->all() as $key=>$item){

        $update =Settings::where('key',$key)->update([

             'value'=>$item
         ]);

     }




          return redirect()->route('setting')->with('success', 'Success, your Setting have been updated.');
    }
}
