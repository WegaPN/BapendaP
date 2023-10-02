<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Barat extends Model
{
    protected $table = 'barat'; // Ganti 'barat' sesuai dengan nama tabel untuk model Selatan
    protected $fillable = ['judul', 'konten', 'gambar', 'kategori_id'];

    // Relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($barat) {
            $barat->slug = Str::slug($barat->judul);
        });

        static::updating(function ($barat) {
            $barat->slug = Str::slug($barat->judul);
        });
    }
}
