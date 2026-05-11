<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Cache::rememberForever('all_settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });
        
        return view('pages.kontak', compact('settings'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda kembali.');
    }
}
