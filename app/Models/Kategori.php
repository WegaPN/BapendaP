<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = ['nama'];

    // Relasi ke model Berita
    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}
