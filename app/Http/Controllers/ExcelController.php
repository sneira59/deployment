<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DespExport;


class ExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('example');

    }
    public function DespExport()
    {       
    
        return Excel::download(new DespExport, 'despliegues.xlsx');
    
    }
}
