<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function index()
    {
        $menu = Makanan::all();
        return view('makanan.index', compact('menu'));
    }

    public function create()
    {
        return view('makanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'sarapan' => 'required',
            'makan_siang' => 'required',
            'makan_malam' => 'required',
        ]);
        Makanan::create($request->all());
        return redirect()->route('makanan.index');
    }

    public function edit(Makanan $makanan)
    {
        return view('makanan.edit', compact('makanan'));
    }

    public function update(Request $request, Makanan $makanan)
    {
        $request->validate([
            'hari' => 'required',
            'sarapan' => 'required',
            'makan_siang' => 'required',
            'makan_malam' => 'required',
        ]);
        $makanan->update($request->all());
        return redirect()->route('makanan.index');
    }

    public function destroy(Makanan $makanan)
    {
        $makanan->delete();
        return redirect()->route('makanan.index');
    }
}