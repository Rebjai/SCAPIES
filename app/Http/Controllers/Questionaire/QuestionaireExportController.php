<?php

namespace App\Http\Controllers\Questionaire;

use App\Exports\QuestionaireExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class QuestionaireExportController extends Controller
{
    public function export( Excel $excel)
    
    {
        ini_set('max_execution_time', 16800);

        return $excel->download(new QuestionaireExport, 'Respuestas.xlsx');
    }
}
