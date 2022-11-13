<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\portofolios;

class portofoliosController extends Controller
{
    public function index()
    {

        $ar_portofolio = DB::table('portofolios')
            ->get();
        return view('client.page.portofolio.index')->with([
            'portofolios' => $ar_portofolio,
            'title' => 'Halaman Portofolio',
            'active' => 'portofolio'
        ]);
    }

    public function store(request $request)
    {
        DB::table('portofolios')->insert(
            [
                'users_id' => $request->users_id,
                'title' => $request->title,
                'categories_id' => $request->categories_id,
                'description' => $request->description,
                'photo' => $request->photo
            ]
        );
        return redirect('/portofolio');
    }
}
