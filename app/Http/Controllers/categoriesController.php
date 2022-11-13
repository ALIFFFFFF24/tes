<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;

class categoriesController extends Controller
{
    public function index()
    {

        $ar_category = DB::table('categories')->get();
        // return view('client.page.category.index', compact('ar_category'));

        return view('client.page.category.index')->with([
            'categories' => $ar_category,
            'title' => 'Halaman Kategori',
            'active' => 'category'
        ]);
    }

    public function store(request $request)
    {
        DB::table('categories')->insert(
            [
                'name' => $request->name
            ]
        );
        return redirect('/category');
    }
}
