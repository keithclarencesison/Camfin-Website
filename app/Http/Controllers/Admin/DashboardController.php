<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Blog;
use App\Models\Vehicle;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalViews = Visit::count();
        $todayViews = Visit::whereDate('created_at', today())->count();

        $visits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as views')
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->pluck('views', 'date');

        $blogs = Blog::latest()->paginate(10)->appends(['tab' => 'blog']);
        $assets = Vehicle::latest()->paginate(10)->appends(['tab' => 'asset']);
        $loans = Loan::latest()->paginate(10)->appends(['tab' => 'loan']);
        
        $dates = $visits->keys();
        $views = $visits->values();


        return view('admin.dashboard.tabs.overview', compact('totalViews', 'todayViews', 'dates', 'views'));
    }
}
