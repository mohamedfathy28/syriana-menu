<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\ProductStoreRequest;
use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            app()->setLocale(auth()->user()->lang);

            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $categories = new Category();
        if ($request->search) {
            $categories = $categories->where('name', 'LIKE', "%{$request->search}%");
        }
        $categories = $categories->latest()->paginate(10);

        return view('categories.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'name_ar' => $request->name_ar,
        ]);

        if (!$category) {
            return redirect()->back()->with('error', 'Sorry, there a problem while creating category.');
        }
        return redirect()->route('categories.index')->with('success', 'Success, you category have been created.');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->name_ar = $request->name_ar;

        if (!$category->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating category.');
        }
        return redirect()->route('categories.index')->with('success', 'Success, your category have been updated.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
