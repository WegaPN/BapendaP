<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selatan extends Model
{
    protected $table = 'selatan'; // Ganti 'selatan' sesuai dengan nama tabel untuk model Selatan
    protected $fillable = ['judul', 'konten', 'gambar', 'kategori_id'];

    // Relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($selatan) {
            $selatan->slug = Str::slug($selatan->judul);
        });

        static::updating(function ($selatan) {
            $selatan->slug = Str::slug($selatan->judul);
        });
    }
}
