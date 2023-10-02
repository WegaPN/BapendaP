<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda'; // Nama tabel sesuai dengan yang ada di database
    protected $fillable = ['judul', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai'];

    // Definisikan relasi jika diperlukan, misalnya dengan pengguna
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
