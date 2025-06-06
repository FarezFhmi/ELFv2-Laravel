<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoundItem;
use App\Models\Category;
use App\Models\Status;
use Illuminate\validation\Rule;
use Illuminate\Support\Facades\DB;

class FoundItemController extends Controller
{
    public function index(){
        $lost_items = FoundItem::where('status_id', [1, 2])->latest()->paginate(10);

        return view('pages.admin.lost_item.index',[
            "lost_items" => $lost_items,
        ]);
    }

    public function create(){
        $categories = Category::all();
        $status = Status::all();

        return view('pages.admin.lost_item.create', [
            "categories" => $categories,
            "status" => $status,
        ]);
    }

    public function store(Request $request){
        $id = auth()->user()->id;
        
        // Validate the uploaded file
        $validatedData = $request->validate([
            "name" => "required|min:3",
            "location_found" => "required",
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
        return redirect('/foundItem')->with('success', 'Successfully create the item.');
    }

    public function edit($id){
        $categories = Category::all();
        $status = Status::all();
        $lost_items = FoundItem::findOrFail($id);

        return view('pages.admin.lost_item.edit', [
            "categories" => $categories,
            "status" => $status,
            "lost_items" => $lost_items,
        ]);
    }

    public function update(Request $request, $id){
        $categories = Category::all();
        $status = Status::all();
        $lost_items = FoundItem::findOrFail($id);
        
        $validated = $request->validate([
            "status_id" => ['required', Rule::notIn([$lost_items->status_id])],
        ],[
            "status_id.required" => "Choose the option!",
        ]);

        FoundItem::where('id',$id)->update($validated);

        return redirect('/foundItem')->with('success','Change Status Successfully');
    }

    public function delete($id){
        $lost_items = FoundItem::where('id', $id);
        $lost_items->delete();

        return redirect('/foundItem')->with('success', 'Delete Successfully');
    }
}
