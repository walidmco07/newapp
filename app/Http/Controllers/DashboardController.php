<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class DashboardController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        $sched_res = [];

        foreach ($schedules as $row) {
            $row->sdate = date("F d, Y h:i A", strtotime($row->start_datetime));
            $row->edate = date("F d, Y h:i A", strtotime($row->end_datetime));
            $sched_res[$row->id] = $row;
        }
        
        
        return view('dashboard', compact('sched_res'));
    }
}
