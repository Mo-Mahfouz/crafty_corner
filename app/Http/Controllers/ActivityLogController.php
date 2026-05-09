<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
        $logs = ActivityLog::with('user')
            ->latest()
            ->paginate(20); // ✅ 20 سطر في كل صفحة

        return view('dashboard.activity_logs', compact('logs'));
    }
}