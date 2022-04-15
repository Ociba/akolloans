<?php

namespace Modules\AccountSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getCategory()
    {
        return view('accountsettings::category');
    }

    /**
     * This function saves category information
     */
    public function createCategory(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|unique:categories',
        ]);
        $category_obj  =new Category;
        $category_obj->category =request()->category;
        $category_obj->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
    /**
     * This function gets edit form.
     * @param int $id
     * @return Renderable
     */
    public function editCategory($category_id)
    {
        $edit_category =Category::where('id',$category_id)->get();
        return view('accountsettings::edit_category',compact('edit_category'));
    }

    /**
     * This function updates category.
     * @param int $id
     * @return Renderable
     */
    public function updateCategory($category_id)
    {
        Category::where('id',$category_id)->update(array(
            'category' =>request()->category
        ));
        return redirect('/accountsettings/get-categories')->with('msg','Operation Successful');
    }
    /**
     * This function deletes the category permanently.
     * @param int $id
     * @return Renderable
     */
    public function deleteCategory($category_id)
    {
        Category::where('id',$category_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
