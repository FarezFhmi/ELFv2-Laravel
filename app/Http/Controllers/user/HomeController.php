<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FoundItem;

class HomeController extends Controller
{
    public function index(){
        $lost_items = FoundItem::where('status_id', 2)->get(); 

        return view('pages.users.lost_item.index',[
            'lost_items' => $lost_items,
        ]);
    }
}
