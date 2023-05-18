<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Desain;
use Illuminate\Http\Request;


class DesainController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);
    
        $desain = new Desain;
        $desain->deskripsi = $validated['deskripsi'];
        $desain->harga = $validated['harga'];
        $desain->gambar = $imageName;
        $desain->user_email = Auth::user()->email; // menyimpan email pengguna yang sudah login
        $desain->save();
    
        return redirect()->route('HalamanUpload')->with('success', 'Desain berhasil diupload!');
        return redirect()->route('Keranjang')->with('success', 'Desain berhasil diupload!');
    }
    


    public function create()
    {
        return view('HalamanUpload');
    }
    public function like($id)
{
    $desain = Desain::findOrFail($id);
    $desain->likes += 1;
    $desain->save();

    return response()->json(['likes' => $desain->likes]);
}
}
