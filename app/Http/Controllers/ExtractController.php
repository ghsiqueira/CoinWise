<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extrato;
use Illuminate\Support\Facades\Auth;

class ExtractController extends Controller
{
    public function index(Request $request, Extrato $extrato)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $query = $extrato->newQuery()->where('user_id', $user->id);

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

        return view('extrato', compact('transfers', 'selectedMonth'));
    }
}
