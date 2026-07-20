<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CCRAM Assessment Report</title>

    <style>
    @page {
        margin:25px;
    }
    
    body {
        font-family: DejaVu Sans;
        font-size:11px;
        color:#333;
    }
    .header-table{
        width: 100%;
        border: none;
        margin-bottom: 20px;
    }
    .header-table td{
        border: none;
        vertical-align: middle;
    }
    .logo{
        width: 70px;
    }
    .report-title{
        font-size: 22px;
        font-weight: bold;
        color: #0d6efd;
    }
    .report-subtitle{
        font-size: 12px;
        color: #666;
    }
    
    table {
        width:100%;
        border-collapse:collapse;
        margin-bottom:15px;
    }
    
    table th {
        background:#2f5597;
        color:white;
        padding:6px 8px;
        border:1px solid #999;
        /* text-align: left;
        vertical-align: middle; */
    }
    table td {
        padding:6px;
        border:1px solid #999;
        /* text-align: left;
        vertical-align: middle; */
    }
    
    .section {
        margin-top:20px;
    }
    
    .section-title {
        background:#0d6efd;
        color:white;
        padding:8px;
        font-size:14px;
        font-weight:bold;
        margin-bottom:8px;
        /* text-align: left; */
        padding-left: 12px;
    }
    
    .title {
        font-size:24px;
        font-weight:bold;
        text-align:center;
    }

    .subtitle {
        text-align:center;
        margin-bottom:20px;
        color:#777;
    }
    
    .clear {
        clear:both;
    }
    
    .footer {
        position:fixed;
        bottom:-15px;
        left:0;
        right:0;
        text-align:center;
        font-size:9px;
        color:#666;
    }

    .page-break {
        page-break-before: always;
    }
    </style>

</head>
<body>
   <table class="header-table">
    <tr>
        <td width="12%">
            <img src="{{ public_path('assets/images/android-chrome-512x512.png') }}" class="logo">
        </td>
        <td>
            <div class="report-title">
                Corporate Climate Resilience Assessment Report
            </div>
            <div class="report-subtitle">
                Climate Change Resilience Assessment Model (CCRAM)
            </div>
        </td>
    </tr>
   </table>
    
    <div class="section">
        <div class="section-title">Company Profile</div>
        <table>
            <tr>
                <th width="30%" align="left">Company</th>
                <td>{{ $assessment->company_name }}</td>
            </tr>
            <tr>
                <th align="left">Sector</th>
                <td>{{ ucfirst($assessment->sector_name) }}</td>
            </tr>
            <tr>
                <th align="left">Subsector</th>
                <td>{{ $assessment->subsector }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">Climate Rating</div>
        <table>
            <tr>
                <th width="30%" align="left">Grade</th>
                <td>{{ $assessment->grade }}</td>
            </tr>
            <tr>
                <th align="left">Category</th>
                <td>{{ $assessment->category }}</td>
            </tr>
            <tr>
                <th align="left">Total Score</th>
                <td>{{ number_format($assessment->total_score,2) }}</td>
            </tr>
            <tr>
                <th align="left">Gap to Next Grade</th>
                <td>{{ $assessment->gap_to_next_grade }} points</td>
            </tr>
            <tr>
                <th align="left">Next Grade</th>
                <td>{{ $assessment->next_grade }}</td>
            </tr>
            <tr>
                <th align="left">Address</th>
                <td>{{ $assessment->address }}</td>
            </tr>
            <tr>
                <th align="left">Assessment Date</th>
                <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <th align="left">Entry Operator</th>
                <td>{{ $assessment->entry_operator }}</td>
            </tr>
            <tr>
                <th align="left">Data Source</th>
                <td>{{ $assessment->data_source }}</td>
            </tr>
            <tr>
                <th align="left">Catatan</th>
                <td>{{ $assessment->notes }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Executive Summary</div>
        <table>
            <tr>
                <th width="30%" align="left">Strongest Dimension</th>
                <td>{{ $assessment->strongest_dimension }}</td>
            </tr>
            <tr>
                <th align="left">Weakest Dimension</th>
                <td>{{ $assessment->weakest_dimension }}</td>
            </tr>
            <tr>
                <th align="left">Priority Improvement</th>
                <td>{{ $assessment->improvement_priority }}</td>
            </tr>
            <tr>
                <th align="left">Management Recommendation</th>
                <td>{{ $assessment->management_recommendation }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Overall Interpretation</div>
        <table>
            <tr>
                <th width="30%" align="left">Grade Interpretation</th>
                <td>{{ $assessment->interpretation_grade }}</td>
            </tr>
            <tr>
                <th align="left">Sector Interpretation</th>
                <td>{{ $assessment->interpretation }}</td>
            </tr>
        </table>
    </div>
        <div style="page-break-before: always;"></div>


    <div class="section">
        <div class="section-title">Assessment Summary</div>
        <table>
            <tr>
                <th width="30%" align="left">Total Indicator</th>
                <td>{{ count($answers) }}</td>
            </tr>
            <tr>
                <th align="left">Average Assessment Score</th>
                <td>{{ number_format(array_sum($averages)/count($averages),2) }}</td>
            </tr>
            <tr>
                <th align="left">Final CCRAM Score</th>
                <td>{{ number_format($assessment->total_score,2) }}</td>
            </tr>
            <tr>
                <th align="left">Final Rating</th>
                <td>{{ $assessment->grade }} - {{ $assessment->category }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">CCRAM Dimension Score</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%" class="text-center">Dimension</th>
                    <th width="42%">Dimension Name</th>
                    <th width="15%">Average Score</th>
                    <th width="15%">Weight</th>
                    <th width="20%">Weighted Point</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center">A</td>
                    <td>Tata Kelola & Kepemimpinan Iklim</td>
                    <td align="center">{{ number_format($averages['A'],2) }}</td>
                    <td align="center">20%</td>
                    <td align="center">{{ number_format($assessment->score_a,2) }}</td>
                </tr>
                <tr>
                    <td align="center">B</td>
                    <td>Strategi & Resiliensi Model Bisnis</td>
                    <td align="center">{{ number_format($averages['B'],2) }}</td>
                    <td align="center">25%</td>
                    <td align="center">{{ number_format($assessment->score_b,2) }}</td>
                </tr>
                <tr>
                    <td align="center">C</td>
                    <td>Manajemen Risiko Iklim Terintegrasi</td>
                    <td align="center">{{ number_format($averages['C'],2) }}</td>
                    <td align="center">20%</td>
                    <td align="center">{{ number_format($assessment->score_c,2) }}</td>
                </tr>
                <tr>
                    <td align="center">D</td>
                    <td>Kinerja & Target Terukur</td>
                    <td align="center">{{ number_format($averages['D'],2) }}</td>
                    <td align="center">25%</td>
                    <td align="center">{{ number_format($assessment->score_d,2) }}</td>
                </tr>
                <tr>
                    <td align="center">E</td>
                    <td>Resiliensi Sosial & Rantai Nilai</td>
                    <td align="center">{{ number_format($averages['E'],2) }}</td>
                    <td align="center">10%</td>
                    <td align="center">{{ number_format($assessment->score_e,2) }}</td>
                </tr>
                <tr style="font-weight:bold;background:#EFEFEF;">
                    <td colspan="4">TOTAL SCORE</td>
                    <td align="center">{{ number_format($assessment->total_score,2) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Climate Resilience Radar Chart</div>
        <table>
            <tr>
                <td align="center">
                    @if (!empty($radarImage))
                    <img src="{{ $radarImage }}" style="width: 420px;">
                    @endif
                </td>
            </tr>
        </table>
    </div>

        <div style="page-break-before: always;"></div>
    <div class="section">
        <div class="section-title">Dimension Average Score</div>
        <table>
            <tr>
                <td align="center">
                    @if (!empty($barImage))
                    <img src="{{ $barImage }}" style="width: 520px;">
                    @endif
                </td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Dimension Performance</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="7%">Dimension</th>
                    <th width="22%">Dimension Name</th>
                    <th width="10%">Average</th>
                    <th width="12%">Weighted</th>
                    <th width="15%">Category</th>
                    <th>Interpretation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dimensionPerformance as $row)
                <tr>
                    <td align="center">{{ $row['dimension'] }}</td>
                    <td>{{ $row['dimension_name'] }}</td>
                    <td align="center">{{ number_format($row['avg_score'],2) }}</td>
                    <td align="center">{{ number_format($row['weighted_score'],2) }}</td>
                    <td align="center">{{ $row['category'] }}</td>
                    <td>{{ $row['automatic_interpretation'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Recommendation by Dimension</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%">Dimension</th>
                    <th width="25%">Dimension Name</th>
                    <th>Recommendation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dimensionPerformance as $row)
                <tr>
                    <td align="center">{{ $row['dimension'] }}</td>
                    <td>{{ $row['dimension_name'] }}</td>
                    <td>{{ $row['short_recommendation'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">Assessment Detail</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%">Indikator</th>
                    <th width="28%">Nama Indikator</th>
                    <th width="24%">Score</th>
                    <th width="25%">Sumber Bukti</th>
                    <th width="25%">Dokumen Pendukung</th>
                    <th width="15%">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($answers as $answer)
                <tr>
                    <td align="center">{{ $answer->indicator->indicator_id }}</td>
                    <td>{{ $answer->indicator->indicator_name }}</td>
                    <td>
                        <strong>{{ $answer->score }}</strong> - {{ $answer->score_description }}
                    </td>
                    <td>{{ $answer->evidence_description }}</td>
                    <td style="text-align: center">
                        @if ($answer->evidence_file)
                            <span style="color:green;font-weight: bold;">Diupload</span>
                        @else
                            <span style="color: #888">Tidak diupload</span>
                        @endif
                    </td>
                    <td>{{ $answer->note }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        Climate Change Resilience Assessment Model (CCRAM)<br>Generated : {{ now()->format('d F Y H:i') }}
    </div>
</body>
</html>