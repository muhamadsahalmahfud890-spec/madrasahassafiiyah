<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PmbmRegistration;
use App\Models\Setting;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Cache;

class PmbmController extends Controller
{
    public function index()
    {
        $settings = Cache::rememberForever('all_settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });
        
        return view('pages.pmbm.index', compact('settings'));
    }

    public function store(\App\Http\Requests\StorePmbmRequest $request)
    {
        $validated = $request->validated();

        // Generate registration number
        $year = date('Y');
        $lastReg = PmbmRegistration::whereYear('created_at', $year)->count();
        $regNumber = 'PMBM-' . $year . '-' . str_pad($lastReg + 1, 4, '0', STR_PAD_LEFT);
        
        $validated['registration_number'] = $regNumber;
        $validated['status'] = 'pending';

        PmbmRegistration::create($validated);

        return redirect()->route('pmbm.hasil')->with('success', 'Pendaftaran berhasil dikirim. Nomor Registrasi Anda: ' . $regNumber);
    }

    public function hasil(Request $request)
    {
        $query = $request->input('q');
        $results = collect();
        
        if ($query) {
            $results = PmbmRegistration::where('full_name', 'like', "%{$query}%")
                ->orWhere('nik', $query)
                ->orWhere('registration_number', $query)
                ->get();
        }
        
        return view('pages.pmbm.hasil', compact('results', 'query'));
    }

    public function cetak($id)
    {
        $registration = PmbmRegistration::findOrFail($id);
        
        $pdf = Pdf::loadView('pages.pmbm.cetak', compact('registration'));
        
        return $pdf->stream('Bukti-Pendaftaran-' . $registration->registration_number . '.pdf');
    }
}
