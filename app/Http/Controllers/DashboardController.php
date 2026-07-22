<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Infrastructure;
use App\Models\Manufacturing;
use App\Models\Agriculture;
use App\Models\Finance;
use App\Models\Mining;
use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index()
    {
        if(auth()->user()->role=='admin'){
            return redirect()->route('assessments.index');
        }

        $user = auth()->user();

        $total = Assessment::where('user_id',$user->id)->count();

        $draft = Assessment::where('user_id',$user->id)
                    ->where('status','draft')
                    ->count();

        $completed = Assessment::where('user_id',$user->id)
                    ->where('status','completed')
                    ->count();

        $overallProgress = $total
            ? round(($completed/$total)*100)
            : 0;

        $assessments = Assessment::where('user_id',$user->id)
            ->latest()
            ->paginate(5);

        foreach($assessments as $assessment){

            switch($assessment->sector){

                case 'infrastructure':
                    $indicator = Infrastructure::count();
                    break;

                case 'manufacturing':
                    $indicator = Manufacturing::count();
                    break;

                case 'agriculture':
                    $indicator = Agriculture::count();
                    break;

                case 'finance':
                    $indicator = Finance::count();
                    break;

                case 'mining':
                    $indicator = Mining::count();
                    break;

                default:
                    $indicator = 0;
            }

            $answered = $assessment->answers()
                ->whereNotNull('score')
                ->count();

            $assessment->progress = $assessment->status=='completed'
                ?100
                :($indicator
                    ?round(($answered/$indicator)*100)
                    :0);
        }

        $sectorChart = Assessment::where('user_id',$user->id)
            ->selectRaw('sector,count(*) total')
            ->groupBy('sector')
            ->pluck('total','sector');

        $draftAssessments = Assessment::where('user_id', $user->id)
    ->where('status', 'draft')
    ->latest()
    ->take(5)
    ->get();

$recentActivities = Assessment::where('user_id', $user->id)
    ->where('updated_at', '>=', now()->subDay())
    ->latest()
    ->take(5)
    ->get();

$sectorProgress = [];

$sectors = [
    'infrastructure',
    'manufacturing',
    'agriculture',
    'finance',
    'mining'
];

foreach ($sectors as $sector) {

    $totalSector = Assessment::where('user_id', $user->id)
        ->where('sector', $sector)
        ->count();

    $completedSector = Assessment::where('user_id', $user->id)
        ->where('sector', $sector)
        ->where('status', 'completed')
        ->count();

    $sectorProgress[$sector] = $totalSector
        ? round(($completedSector / $totalSector) * 100)
        : 0;
}

        $today = Carbon::now();

        return view('dashboard.viewer',[
    'total'             => $total,
    'draft'             => $draft,
    'completed'         => $completed,
    'overallProgress'   => $overallProgress,
    'assessments'       => $assessments,
    'sectorChart'       => $sectorChart,
    'draftAssessments'  => $draftAssessments,
    'recentActivities'  => $recentActivities,
    'sectorProgress'    => $sectorProgress,
    'today'             => Carbon::now(),
]);
    }
}
