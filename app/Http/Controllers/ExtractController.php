<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extrato;

class ExtractController extends Controller
{
    public function index(Request $request, Extrato $extrato)
    {
        $query = $extrato->newQuery();
        $selectedMonth = $request->input('month');

        if ($request->has('specific_month') && $selectedMonth) {
            $query->whereMonth('created_at', $selectedMonth);
            session(['selected_month' => $selectedMonth]);
        } elseif (!$selectedMonth && $request->has('clear_month')) {
            session()->forget('selected_month');
        }

        // Filtrar por recorrência
        $recurrent = $request->input('recurrent');
        if ($recurrent !== null) {
            $query->where('isRecurrent', $recurrent);
        }

        $transfers = $query->paginate(10)->appends($request->query());

        return view('extract.index', compact('transfers', 'selectedMonth'));
    }
}
