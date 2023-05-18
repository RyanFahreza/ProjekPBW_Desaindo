<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Desain;
use App\Models\User;
use App\Models\Like;

class HomeController extends Controller
{
    public function index()

    {

        $desains = Desain::join('users', 'users.email', '=', 'desains.user_email')

            ->select('desains.id','users.username', 'desains.deskripsi', 'desains.gambar')

            ->orderBy('desains.created_at', 'desc')

            ->get();



        $trending = Desain::join('users', 'users.email', '=', 'desains.user_email')

            ->select('desains.id','users.username', 'desains.deskripsi', 'desains.gambar', 'desains.likes')

            ->orderBy('desains.likes', 'desc')

            ->limit(2)

            ->get();



        return view('halamanutama', [

            'desains' => $desains,

            'trending' => $trending,

        ]);

    } 

    public function keranjang()
    {
        $desains = Desain::join('users', 'users.email', '=', 'desains.user_email')

            ->select('desains.id','users.username', 'desains.deskripsi', 'desains.gambar', 'desains.harga')

            ->orderBy('desains.created_at', 'desc')

            ->get();

        return view('Keranjang', compact('desains'));
    }

}