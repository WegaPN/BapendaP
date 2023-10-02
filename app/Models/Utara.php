<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Utara extends Model
{
    protected $table = 'utara'; // Ganti 'utara' sesuai dengan nama tabel untuk model Selatan
    protected $fillable = ['judul', 'konten', 'gambar', 'kategori_id'];

    // Relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($utara) {
            $utara->slug = Str::slug($utara->judul);
        });

        static::updating(function ($utara) {
            $utara->slug = Str::slug($utara->judul);
        });
    }
}
