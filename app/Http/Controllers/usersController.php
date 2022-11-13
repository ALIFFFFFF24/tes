<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index()
    {

        $ar_user = DB::table('users')
            ->get();
        return view('client.page.user.index')->with([
            'user' => $ar_user,
            'title' => 'Halaman User',
            'active' => 'category'
        ]);
    }

    public function store(request $request)
    {
        DB::table('users')->insert(
            [
                'name' => $request->name
            ]
        );
        return redirect('/category');
    }
}
