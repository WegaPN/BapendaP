<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Timur extends Model
{
    protected $table = 'timur'; // Ganti 'timur' sesuai dengan nama tabel untuk model Selatan
    protected $fillable = ['judul', 'konten', 'gambar', 'kategori_id'];

    // Relasi ke model Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($timur) {
            $timur->slug = Str::slug($timur->judul);
        });

        static::updating(function ($timur) {
            $timur->slug = Str::slug($timur->judul);
        });
    }
}
