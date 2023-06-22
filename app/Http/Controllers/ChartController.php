<?php

    namespace App\Http\Controllers;

    use App\Models\Transfer;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class ChartController extends Controller
    {
        public function showChart()
        {
            $transfers = Transfer::all();
            $data = [
                'labels' => [],
                'expenses' => [],
                'earnings' => [],
            ];
            
            foreach ($transfers as $transfer) {
                $data['labels'][] = $transfer->title;
                if ($transfer->isExpense) {
                    $data['expenses'][] = $transfer->value;
                    $data['earnings'][] = null;
                } else {
                    $data['expenses'][] = null;
                    $data['earnings'][] = $transfer->value;
                }
            }
            
            return view('chart', ['data' => $data]);
        }
    }
