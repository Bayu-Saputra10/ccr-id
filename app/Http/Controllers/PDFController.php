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

    public function report(Request $request, Assessment $assessment) {
        $report = $this->calculator->buildReportData($assessment);

        $report['radarImage'] = $request->radarImage;

        $report['barImage'] = $request->barImage;

        $pdf = Pdf::loadView(
            'pdf.report',
            $report
        );

        $pdf->setPaper('A4', 'portrait');

        $filename = 'CCRAM_Report_' .str_replace(' ', '_', $assessment->company_name) .'.pdf';

        return $pdf->download($filename);
    }
}
