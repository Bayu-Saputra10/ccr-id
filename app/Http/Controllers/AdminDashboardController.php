<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role!='admin') {
            abort(403);
        }

        $totalAssessment = Assessment::count();

        $totalUser = User::where('role', 'viewer')->count();

        $totalAdmin = User::where('role', 'admin')->count();

        $draft = Assessment::where('status', 'draft')->count();

        $completed = Assessment::where('status', 'completed')->count();

        $sectorChart = Assessment::selectRaw('sector, COUNT(*) as total')
            ->groupBy('sector')
            ->pluck('total', 'sector');

        $recentAssessments = Assessment::latest()
            ->take(10)
            ->get();

        return view('admin.dashboard',[
            'totalUser'=>User::count(),
            'totalAdmin'=>User::where('role','admin')->count(),
            'totalViewer'=>User::where('role','viewer')->count(),
            'assessment'=>Assessment::count(),
            'draft'=>Assessment::where('status','draft')->count(),
            'completed'=>Assessment::where('status','completed')->count()
        ]);
    }
}
