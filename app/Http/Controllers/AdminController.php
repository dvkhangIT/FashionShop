<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function view_category()
  {
    $data = Category::all();
    return view('admin.category', compact('data'));
  }
  public function add_category(Request $request)
  {
    $data = new category;
    $data->category_name = $request->category;
    $data->save();
    return redirect()->back()->with('message', 'Category added successfully!');
  }
  public function delete_category($id)
  {
    $data = Category::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Category deleted!');
  }
}
