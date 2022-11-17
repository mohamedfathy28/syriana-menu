<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Product;
use App\Settings;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class VisitorController extends Controller
{
    public function menu(Request $request)
    {
        if ($request->get('lang') == 'ar'){
            app()->setLocale('ar');
        }

        $categories = Category::all();
        $Settings = Settings::get();

        return view('menu',compact('categories','Settings'));
    }
    
    
    
    
     public function ContactUs(Request $request)
    {
        if ($request->get('lang') == 'ar'){
            app()->setLocale('ar');
        }

        $Settings = Settings::get();

        return view('ContactUs')->with('Settings', $Settings);
    }
}
