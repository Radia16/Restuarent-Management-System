<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportSearchController extends Controller
{
    public function search(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;

        $purchase  = Purchase::where('outlet_id', $request->outlet_id)
            ->whereBetween('date', [$start, $end])
            ->get();
        
        $outlets = Outlet::all();
        return view('backend.reports.purchase_report', compact('purchase','outlets'));
    }
}
