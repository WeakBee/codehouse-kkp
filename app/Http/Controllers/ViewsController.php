<?php

namespace App\Http\Controllers;

use App\Models\Views;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\Section5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ViewsController extends Controller
{
    public function index(Request $request)
    {
        $ip_address = $request->ip();
        $cacheKey = 'ip_' . $ip_address;

        // Cek apakah alamat IP sudah ada dalam cache
        if (!Cache::has($cacheKey)) {
            // Tambahkan alamat IP ke cache dengan waktu kadaluarsa 24 jam (1 hari)
            Cache::put($cacheKey, true, 1440);

            // Lakukan operasi yang Anda butuhkan saat menambahkan alamat IP untuk pertama kalinya
            Views::create(['ip_address' => $ip_address]);
        }

        $section1 = Section1::all();
        $section2 = Section2::all();
        $section3 = Section3::all();
        $section4 = Section4::all();
        $section5 = Section5::all();
        return view('welcome', [
            'section1' => $section1,
            'section2' => $section2,
            'section3' => $section3,
            'section4' => $section4,
            'section5' => $section5
        ]);
    }
}
