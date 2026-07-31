<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Services\CCRAMCalculatorService;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    protected $calculator;

    public function __construct(CCRAMCalculatorService $calculator) {
        $this->calculator = $calculator;
    }

    public function report(Request $request, Assessment $assessment)
{
    /*
    |--------------------------------------------------------------------------
    | Hitung ulang report sesuai locale yang sedang aktif
    |--------------------------------------------------------------------------
    */
    $result = $this->calculator->calculate($assessment);

    /*
    |--------------------------------------------------------------------------
    | Override object assessment (TIDAK disimpan ke database)
    |--------------------------------------------------------------------------
    */
    $assessment->category = $result['category'];
    $assessment->interpretation_grade = $result['interpretation_grade'];
    $assessment->interpretation = $result['interpretation'];
    $assessment->management_recommendation = $result['management_recommendation'];
    $assessment->improvement_priority = $result['improvement_priority'];

    $assessment->strongest_dimension = $result['strongest_dimension'];
    $assessment->weakest_dimension = $result['weakest_dimension'];
    $assessment->next_grade = $result['next_grade'];
    $assessment->gap_to_next_grade = $result['gap_to_next_grade'];

    /*
    |--------------------------------------------------------------------------
    | Build report menggunakan assessment yang sudah dioverride
    |--------------------------------------------------------------------------
    */
    $report = $this->calculator->buildReportData($assessment);

    // Pastikan assessment yang dikirim ke blade adalah assessment terbaru
    $report['assessment'] = $assessment;

    $report['radarImage'] = $request->radarImage;
    $report['barImage'] = $request->barImage;

    $pdf = Pdf::loadView(
        'pdf.report',
        $report
    );

    $pdf->setPaper('A4', 'portrait');

    $filename = 'CCRAM_Report_' .
        str_replace(' ', '_', $assessment->company_name) .
        '.pdf';

    return $pdf->download($filename);
}
}
