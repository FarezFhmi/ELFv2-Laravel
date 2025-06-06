<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoundItem;
use App\Models\Category;
use App\Models\Status;

class FoundController extends Controller
{
    public function foundView(){
        $categories = Category::all();
        $status = Status::all();

        return view('pages.users.lost_item.found', [
            "categories" => $categories,
            "status" => $status,
        ]);
    }
    
    public function upload(Request $request){
        $id = auth()->user()->id;
        
        // Validate the uploaded file
        $validatedData = $request->validate([
            "name" => "required|min:3",
            "location_found" => "nullable",
            "time_found" => "required",
            "date_found" => "required",
            "category_id" => "required",
            "image" => "required|image|mimes:jpeg,png,jpg,gif|max:2048", // Max 2MB
            "description" => "required",
        ]);
        
        $path = $request->file('image')->store('images', 'public');
        $validatedData['path'] = $path;
        unset($validatedData['image']);
        $validatedData['status_id'] = 1; // Pending
        $validatedData['uploaded_by'] = $id;
        
        FoundItem::create($validatedData);
        
        // Redirect back with a success message
        return redirect('/')->with('success', 'Successfully uploaded the found item.');
    }

    public function detailsView($id){
        $category = Category::all();
        $status = Status::all();
        $lost_items = FoundItem::findOrFail($id);
    
        return view('pages.users.item_details.details', [
            "categories" => $category,
            "status" => $status,
            "lost_items" => $lost_items,
        ]);
    }
}
