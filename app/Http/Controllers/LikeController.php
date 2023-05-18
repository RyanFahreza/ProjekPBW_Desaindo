<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Desain;
use App\Models\Like;

class LikeController extends Controller
{
    public function toggleLike(Request $request, $id)
    {
        $user = Auth::user();
        $desain = Desain::find($id);

        if (!$desain) {
            return response()->json([
                'success' => false,
                'message' => 'Desain not found'
            ], 404);
        }

        $like = Like::where('desain_id', $id)->where('user_id', $user->id)->first();

        if ($like) {
            $like->delete();
            $desain->decrement('likes');
            return response()->json([
                'success' => true,
                'liked' => false,
                'likes' => $desain->likes
            ]);
        } else {
            $like = new Like();
            $like->desain_id = $desain->id;
            $like->user_id = $user->id;
            $like->save();
            $desain->increment('likes');
            return response()->json([
                'success' => true,
                'liked' => true,
                'likes' => $desain->likes
            ]);
        }
    }
}
