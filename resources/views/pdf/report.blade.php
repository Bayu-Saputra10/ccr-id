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
                {{ t('Corporate Climate Resilience Assessment Report') }}
            </div>
            <div class="report-subtitle">
                {{ t('Climate Change Resilience Assessment Model (CCRAM)') }}
            </div>
        </td>
    </tr>
   </table>
    
    <div class="section">
        <div class="section-title">{{ t('Company Profile') }}</div>
        <table>
            <tr>
                <th width="30%" align="left">{{ t('Company') }}</th>
                <td>{{ $assessment->company_name }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Sector') }}</th>
                <td>{{ ucfirst($assessment->sector_name) }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Subsector') }}</th>
                <td>{{ $assessment->subsector_name }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">{{ t('Climate Rating') }}</div>
        <table>
            <tr>
                <th width="30%" align="left">{{ t('Grade') }}</th>
                <td>{{ $assessment->grade }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Category') }}</th>
                <td>{{ $assessment->category }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Total Score') }}</th>
                <td>{{ number_format($assessment->total_score,2) }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Gap to Next Grade') }}</th>
                <td>{{ $assessment->gap_to_next_grade }} points</td>
            </tr>
            <tr>
                <th align="left">{{ t('Next Grade') }}</th>
                <td>{{ $assessment->next_grade }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Address') }}</th>
                <td>{{ $assessment->address }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Assessment Date') }}</th>
                <td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale(app()->getLocale())->translatedFormat('d F Y') }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Entry Operator') }}</th>
                <td>{{ $assessment->entry_operator }}</td>
            </tr>
            <tr>
    <th align="left">{{ t('Data Source') }}</th>
    <td>{{ $assessment->data_source_name }}</td>
</tr>
            <tr>
                <th align="left">{{ t('Catatan') }}</th>
                <td>{{ $assessment->notes }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">{{ t('Executive Summary') }}</div>
        <table>
            <tr>
                <th width="30%" align="left">{{ t('Strongest Dimension') }}</th>
                <td>{{ $assessment->strongest_dimension }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Weakest Dimension') }}</th>
                <td>{{ $assessment->weakest_dimension }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Priority Improvement') }}</th>
                <td>{{ $assessment->improvement_priority }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Management Recommendation') }}</th>
                <td>{{ $assessment->management_recommendation }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">{{ t('Overall Interpretation') }}</div>
        <table>
            <tr>
                <th width="30%" align="left">{{ t('Grade Interpretation') }}</th>
                <td>{{ $assessment->interpretation_grade }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Sector Interpretation') }}</th>
                <td>{{ $assessment->interpretation }}</td>
            </tr>
        </table>
    </div>
        <div style="page-break-before: always;"></div>


    <div class="section">
        <div class="section-title">{{ t('Assessment Summary') }}</div>
        <table>
            <tr>
                <th width="30%" align="left">{{ t('Total Indicator') }}</th>
                <td>{{ count($answers) }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Average Assessment Score') }}</th>
                <td>{{ number_format(array_sum($averages)/count($averages),2) }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Final CCRAM Score') }}</th>
                <td>{{ number_format($assessment->total_score,2) }}</td>
            </tr>
            <tr>
                <th align="left">{{ t('Final Rating') }}</th>
                <td><strong>{{ $assessment->grade }}</strong>
<br>
{{ $assessment->category }}</td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">{{ t('CCRAM Dimension Score') }}</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%" class="text-center">{{ t('Dimension') }}</th>
                    <th width="42%">{{ t('Dimension Name') }}</th>
                    <th width="15%">{{ t('Average Score') }}</th>
                    <th width="15%">{{ t('Weight') }}</th>
                    <th width="20%">{{ t('Weighted Point') }}</th>
                </tr>
            </thead>
            <tbody>

@php
    $weights = [
        'A' => 20,
        'B' => 25,
        'C' => 20,
        'D' => 25,
        'E' => 10,
    ];

    $weightedScores = [
        'A' => $assessment->score_a,
        'B' => $assessment->score_b,
        'C' => $assessment->score_c,
        'D' => $assessment->score_d,
        'E' => $assessment->score_e,
    ];
@endphp

@foreach($dimensionPerformance as $row)

<tr>

    <td align="center">
        {{ $row['dimension'] }}
    </td>

    <td>
        {{ $row['dimension_name'] }}
    </td>

    <td align="center">
        {{ number_format($row['avg_score'],2) }}
    </td>

    <td align="center">
        {{ $weights[$row['dimension']] }}%
    </td>

    <td align="center">
        {{ number_format($weightedScores[$row['dimension']],2) }}
    </td>

</tr>

@endforeach

<tr style="font-weight:bold;background:#EFEFEF;">

    <td colspan="4">
        {{ t('TOTAL SCORE') }}
    </td>

    <td align="center">
        {{ number_format($assessment->total_score,2) }}
    </td>

</tr>

</tbody>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">{{ t('Climate Resilience Radar Chart') }}</div>
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
        <div class="section-title">{{ t('Dimension Average Score') }}</div>
        <table>
            <tr>
                <td align="center">
                    @if (!empty($barImage))
                    <img src="{{ $barImage }}" style="width: 360px;">
                    @endif
                </td>
            </tr>
        </table>
    </div>
    
    <div class="section">
        <div class="section-title">{{ t('Dimension Performance') }}</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="7%">{{ t('Dimension') }}</th>
                    <th width="22%">{{ t('Dimension Name') }}</th>
                    <th width="10%">{{ t('Average') }}</th>
                    <th width="12%">{{ t('Weighted') }}</th>
                    <th width="15%">{{ t('Category') }}</th>
                    <th>{{ t('Interpretation') }}</th>
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
        <div class="section-title">{{ t('Recommendation by Dimension') }}</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%">{{ t('Dimension') }}</th>
                    <th width="25%">{{ t('Dimension Name') }}</th>
                    <th>{{ t('Recommendation') }}</th>
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
        <div class="section-title">{{ t('Assessment Detail') }}</div>
        <table class="center-table">
            <thead>
                <tr>
                    <th width="8%">{{ t('Indikator') }}</th>
                    <th width="28%">{{ t('Nama Indikator') }}</th>
                    <th width="24%">{{ t('Score') }}</th>
                    <th width="25%">{{ t('Sumber Bukti') }}</th>
                    <th width="25%">{{ t('Dokumen Pendukung') }}</th>
                    <th width="15%">{{ t('Catatan') }}</th>
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
                            <span style="color:green;font-weight: bold;">{{ t('Diupload') }}</span>
                        @else
                            <span style="color: #888">{{ t('Tidak diupload') }}</span>
                        @endif
                    </td>
                    <td>{{ $answer->note }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        {{ t('Climate Change Resilience Assessment Model (CCRAM)') }}<br>{{ t('Generated') }}: {{ now()->locale(app()->getLocale())->translatedFormat('d F Y H:i') }}
    </div>
</body>
</html>