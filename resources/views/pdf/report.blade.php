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
    
    table {
        width:100%;
        border-collapse:collapse;
        margin-bottom:15px;
    }
    
    table th {
        background:#2f5597;
        color:white;
        padding:6px;
        border:1px solid #999;
    }
    
    table td {
        padding:6px;
        border:1px solid #999;
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
    <div class="title">Corporate Climate Resilience Assessment Report</div>

    <div class="subtitle">Climate Change Resilience Assessment Model</div>
    
    <div class="section">
        <div class="section-title">Company Profile</div>
        
        <table>
            <tr>
                <th width="30%">Company</th>
                <td>{{ $assessment->company_name }}</td>
            </tr>
            <tr>
                <th>Sector</th>
                <td>{{ ucfirst($assessment->sector_name) }}</td>
            </tr>
            <tr>
                <th>Subsector</th>
                <td>{{ $assessment->subsector }}</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title">Climate Rating</div>
        <table>
            <tr>
                <th width="30%">Grade</th>
                <td>{{ $assessment->grade }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $assessment->category }}</td>
            </tr>
            <tr>
                <th>Total Score</th>
                <td>{{ number_format($assessment->total_score,2) }}</td>
            </tr>
            <tr>
                <th>Gap to Next Grade</th>
                <td>{{ $assessment->gap_to_next_grade }} points</td>
            </tr>
            <tr>
                <th>Next Grade</th>
                <td>{{ $assessment->next_grade }}</td>
            </tr>
        
<th>

Address

</th>

<td>

{{ $assessment->address }}

</td>

</tr>

<tr>

<th>

Assessment Date

</th>

<td>{{ \Carbon\Carbon::parse($assessment->assessment_date)->locale('id')->translatedFormat('d F Y') }}</td>

</tr>

<tr>

<th>

Entry Operator

</th>

<td>

{{ $assessment->entry_operator }}

</td>

</tr>

<tr>

<th>

Data Source

</th>

<td>

{{ $assessment->data_source }}

</td>

</tr>

</table>

</div>


<div class="section">

<div class="section-title">

Climate Rating

</div>

<table>

<tr>

<th width="30%">

Grade

</th>

<td>

{{ $assessment->grade }}

</td>

</tr>

<tr>

<th>

Category

</th>

<td>

{{ $assessment->category }}

</td>

</tr>

<tr>

<th>

Total Score

</th>

<td>

{{ number_format($assessment->total_score,2) }}

</td>

</tr>

<tr>

<th>

Gap to Next Grade

</th>

<td>

{{ $assessment->gap_to_next_grade }}

points

</td>

</tr>

<tr>

<th>

Next Grade

</th>

<td>

{{ $assessment->next_grade }}

</td>

</tr>

</table>

</div>

<div class="section">

    <div class="section-title">

        Executive Summary

    </div>

    <table>

        <tr>

            <th width="30%">
                Strongest Dimension
            </th>

            <td>

                {{ $assessment->strongest_dimension }}

            </td>

        </tr>

        <tr>

            <th>
                Weakest Dimension
            </th>

            <td>

                {{ $assessment->weakest_dimension }}

            </td>

        </tr>

        <tr>

            <th>
                Priority Improvement
            </th>

            <td>

                {{ $assessment->improvement_priority }}

            </td>

        </tr>

        <tr>

            <th>
                Management Recommendation
            </th>

            <td>

                {{ $assessment->management_recommendation }}

            </td>

        </tr>

    </table>

</div>

<div class="section">

    <div class="section-title">

        Overall Interpretation

    </div>

    <table>

        <tr>

            <th width="30%">
                Grade Interpretation
            </th>

            <td>

                {{ $assessment->interpretation_grade }}

            </td>

        </tr>

        <tr>

            <th>
                Sector Interpretation
            </th>

            <td>

                {{ $assessment->interpretation }}

            </td>

        </tr>

    </table>

</div>

<div style="page-break-before: always;"></div>

<div class="section">

    <div class="section-title">

        CCRAM Dimension Score

    </div>

    <table>

    <thead>

        <tr>

            <th width="8%">
                Dimension
            </th>

            <th width="42%">
                Dimension Name
            </th>

            <th width="15%">
                Average Score
            </th>

            <th width="15%">
                Weight
            </th>

            <th width="20%">
                Weighted Point
            </th>

        </tr>

    </thead>

    <tbody>

        <tr>

            <td align="center">A</td>

            <td>Tata Kelola & Kepemimpinan Iklim</td>

            <td align="center">

                {{ number_format($averages['A'],2) }}

            </td>

            <td align="center">

                20%

            </td>

            <td align="center">

                {{ number_format($assessment->score_a,2) }}

            </td>

        </tr>

        <tr>

            <td align="center">B</td>

            <td>Strategi & Resiliensi Model Bisnis</td>

            <td align="center">

                {{ number_format($averages['B'],2) }}

            </td>

            <td align="center">

                25%

            </td>

            <td align="center">

                {{ number_format($assessment->score_b,2) }}

            </td>

        </tr>

        <tr>

            <td align="center">C</td>

            <td>Manajemen Risiko Iklim Terintegrasi</td>

            <td align="center">

                {{ number_format($averages['C'],2) }}

            </td>

            <td align="center">

                20%

            </td>

            <td align="center">

                {{ number_format($assessment->score_c,2) }}

            </td>

        </tr>

        <tr>

            <td align="center">D</td>

            <td>Kinerja & Target Terukur</td>

            <td align="center">

                {{ number_format($averages['D'],2) }}

            </td>

            <td align="center">

                25%

            </td>

            <td align="center">

                {{ number_format($assessment->score_d,2) }}

            </td>

        </tr>

        <tr>

            <td align="center">E</td>

            <td>Resiliensi Sosial & Rantai Nilai</td>

            <td align="center">

                {{ number_format($averages['E'],2) }}

            </td>

            <td align="center">

                10%

            </td>

            <td align="center">

                {{ number_format($assessment->score_e,2) }}

            </td>

        </tr>

        <tr style="font-weight:bold;background:#EFEFEF;">

            <td colspan="4">

                TOTAL SCORE

            </td>

            <td align="center">

                {{ number_format($assessment->total_score,2) }}

            </td>

        </tr>

    </tbody>

</table>

</div>

<div class="section">

    <div class="section-title">

        Climate Resilience Radar Chart

    </div>

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

<div class="section">

    <div class="section-title">

        Dimension Performance

    </div>

    <table>

    <thead>

        <tr>

            <th width="7%">
                Dimension
            </th>

            <th width="22%">
                Dimension Name
            </th>

            <th width="10%">
                Average
            </th>

            <th width="12%">
                Weighted
            </th>

            <th width="15%">
                Category
            </th>

            <th>
                Interpretation
            </th>

        </tr>

    </thead>

    <tbody>

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

                {{ number_format($row['weighted_score'],2) }}

            </td>

            <td align="center">

                {{ $row['category'] }}

            </td>

            <td>

                {{ $row['automatic_interpretation'] }}

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

<div class="section">

    <div class="section-title">

        Recommendation by Dimension

    </div>

    <table>

        <thead>

            <tr>

                <th width="8%">
                    Dimension
                </th>

                <th width="25%">
                    Dimension Name
                </th>

                <th>
                    Recommendation
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($dimensionPerformance as $row)

            <tr>

                <td align="center">

                    {{ $row['dimension'] }}

                </td>

                <td>

                    {{ $row['dimension_name'] }}

                </td>

                <td>

                    {{ $row['short_recommendation'] }}

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

<div style="page-break-before: always;"></div>

<div class="section">

    <div class="section-title">

        Assessment Detail

    </div>

    <table>

    <thead>

        <tr>

            <th width="8%">

                Indicator

            </th>

            <th width="28%">

                Indicator Name

            </th>

            <th width="24%">

                Score

            </th>

            <th width="25%">

                Evidence

            </th>

            <th width="15%">

                Note

            </th>

        </tr>

    </thead>

    <tbody>

    @foreach($answers as $answer)

        <tr>

            <td align="center">

                {{ $answer->indicator->indicator_id }}

            </td>

            <td>

                {{ $answer->indicator->indicator_name }}

            </td>

            <td>

                <strong>

                    {{ $answer->score }}

                </strong>

                -

                {{ $answer->score_description }}

            </td>

            <td>

                {{ $answer->evidence_description }}

            </td>

            <td>

                {{ $answer->note }}

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

</div>

<div class="section">

    <div class="section-title">

        Assessment Summary

    </div>

    <table>

        <tr>

            <th width="35%">

                Total Indicator

            </th>

            <td>

                {{ count($answers) }}

            </td>

        </tr>

        <tr>

            <th>

                Average Assessment Score

            </th>

            <td>

                {{ number_format(array_sum($averages)/count($averages),2) }}

            </td>

        </tr>

        <tr>

            <th>

                Final CCRAM Score

            </th>

            <td>

                {{ number_format($assessment->total_score,2) }}

            </td>

        </tr>

        <tr>

            <th>

                Final Rating

            </th>

            <td>

                {{ $assessment->grade }}

                -

                {{ $assessment->category }}

            </td>

        </tr>

    </table>

</div>

<div class="section">

    <div class="section-title">

        Dimension Average Score

    </div>

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

<div class="footer">
    Climate Change Resilience Assessment Model (CCRAM)
    <br>
    Generated : {{ now()->format('d F Y H:i') }}
</div>

</body>

</html>