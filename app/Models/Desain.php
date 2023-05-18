<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desain extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'deskripsi',
        'harga',
        'gambar',
        'user_email',
        'likes'
    ];
}
