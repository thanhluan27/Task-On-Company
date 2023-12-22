<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $category = Categories::latest()->paginate(5);
        return view('categories.cate-index', compact('category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Categories $category)
    {
        $this->authorize('addCate', $category);
        return view('categories.cate-add', compact('category'))->with('addCate', $category);
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'required|max:255',
            'user_id'
        ]);

        $input = $request->all();

        Categories::create($input);
        return redirect()->route('category')
            ->with('success', 'Category created successfully.');
    }

    public function edit(Categories $category)
    {
        $this->authorize('editCate', $category);
        return view('categories.cate-edit', compact('category'))->with('editCate', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        $input = $request->all();

        $category->update($input);

        return redirect()->route('category')
            ->with('success', 'Category updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        $this->authorize('deleteCate', $category);
        return redirect()->route('category')
            ->with('success', 'Category deleted successfully');
    }


    /**
     * Update and Delete all status
     */
    public function editAllStatus()
    {
        return view('categories.edit-status');
    }

    public function updateAllStatus(Request $request, Categories $category)
    {
        $request->validate([
            'status' => 'required|max:255',
        ]);

        $input = $request->all();
        Categories::query()->update(['status' => $request->status]);
        $category->update($input);

        return redirect()->route('category')
            ->with('success', 'Updated all status successfully');
    }

    public function destroyAllStatus(Categories $category)
    {
        Categories::query()->update(['status' => null]);
        $category->delete();

        return redirect()->route('category')
            ->with('success', 'Deleted all status successfully');
    }

    /**
     * Update and Delete each status
     */
    public function editListStatus()
    {
        return view('categories.cate-list-status');
    }

    public function updateListStatus(Request $request)
    {
        $request->validate([
            'status' => 'required|max:255',
        ]);

        $cateIds = $request->input('category_id', []);
        $status = $request->input('status', 'published');

        // Update trạng thái của các bài viết có ID trong mảng $postIds
        Categories::whereIn('category_id', $cateIds)->update(['status' => $status]);

        return redirect()->route('category')->with('success', 'Cập nhật trạng thái thành công.');


        // return redirect()->route('category')
        //     ->with('success', 'Updated all status successfully');
    }

    // BULK ACTION
    public function showBulkCategory()
    {
        return view('livewire.dashboard-category');
    }
}
