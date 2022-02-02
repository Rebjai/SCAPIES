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
        return $excel->download(new QuestionaireExport, 'Respuestas.xlsx');
    }
}
