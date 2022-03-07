<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use PDF;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->keyword;
        $kasirs = Kasir::where('created_at', 'LIKE', '%' .$filter. '%')->get();

        return view('manager.laporan',compact('kasirs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
