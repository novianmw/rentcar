<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // pilih salah satu
    protected $guarded = ['id']; // jika menggunakan tinker dan input semua data yang ada. kecuali yang di guarded (id) tidak bisa diisi
   // protected $fillable = ['title', 'slug', 'excerpt', 'body']; // jika mneggunakan tinker dan input data secara langsung (title, excerp, body bersamaan). LIHAT BAWAH

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
