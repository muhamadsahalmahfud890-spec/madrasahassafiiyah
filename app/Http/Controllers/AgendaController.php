<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index()
    {
        $now = Carbon::today()->format('Y-m-d');
        
        $upcoming = Agenda::published()
            ->where('start_date', '>=', $now)
            ->orderBy('start_date', 'asc')
            ->get();
            
        $past = Agenda::published()
            ->where('start_date', '<', $now)
            ->orderBy('start_date', 'desc')
            ->get();
            
        return view('pages.agenda', compact('upcoming', 'past'));
    }
}
