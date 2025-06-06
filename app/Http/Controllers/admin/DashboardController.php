<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoundItem;

class DashboardController extends Controller
{
    public function index(){
        
        $pendingCount = FoundItem::where('status_id', 1)->count(); 
        $readyCount = FoundItem::where('status_id', 2)->count(); 
        $completedCount = FoundItem::where('status_id', 3)->count(); 

        return view('pages.admin.dashboard', compact('pendingCount', 'readyCount', 'completedCount'));
    }
}
