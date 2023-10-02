<?php

namespace App\Http\Controllers;

use App\Models\Barat;
use App\Models\Timur;
use App\Models\Utara;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
     public function index()
    {
        // Ambil data berita terbaru
        $berita = Berita::with('kategori')
            ->latest('created_at')
            ->take(4)
            ->get();

        // Ambil data berita utara terbaru
        $utara = Utara::with('kategori')
            ->latest('created_at')
            ->take(4)
            ->get();

        $timur = Timur::with('kategori')
            ->latest('created_at')
            ->take(4)
            ->get();
        $barat = Barat::with('kategori')
            ->latest('created_at')
            ->take(4)
            ->get();

        $kategori = Kategori::all();

        return view('welcome', compact('berita','barat', 'utara','timur', 'kategori'));
    }
     
       public function about()
    {
            return view('about');
    }
    public function beutara()
    {
        $beritaUtara = Utara::latest('created_at')
            ->take(10) // Misalnya, ambil 10 berita terbaru
            ->get();
    
        return view('beutara', compact('beritaUtara'));
    }
    public function betimur()
    {
        $beritaTimur = Timur::latest('created_at')
            ->take(10) // Misalnya, ambil 10 berita terbaru
            ->get();
    
        return view('betimur', compact('beritaTimur'));
    }
    public function betengah()
    {
        $beritaTengah = Berita::latest('created_at')
            ->take(10) // Misalnya, ambil 10 berita terbaru
            ->get();
    
        return view('betengah', compact('beritaTengah'));
    }
    public function bebarat()
    {
        $beritaBarat = Barat::latest('created_at')
            ->take(10) // Misalnya, ambil 10 berita terbaru
            ->get();
    
        return view('bebarat', compact('beritaBarat'));
    }

 }
