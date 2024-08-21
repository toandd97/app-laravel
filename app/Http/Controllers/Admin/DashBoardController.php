<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    /**
     * Display the dashboard index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Add logic to fetch necessary data for the dashboard
        // For example:
        // $totalUsers = User::count();
        // $totalOrders = Order::count();
        // $recentActivities = Activity::latest()->take(10)->get();

        return view('admin.index');
    }

}
