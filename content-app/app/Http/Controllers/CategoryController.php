<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {

        $category = Categories::latest()->paginate(5);
        return view('categories.cate-index', compact('category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('categories.cate-add');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        $input = $request->all();

        Categories::create($input);
        return redirect()->route('category')
            ->with('success', 'Category created successfully.');
    }

    public function edit(Categories $category)
    {
        return view('categories.cate-edit', compact('category'));
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
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        $category->delete();

        return redirect()->route('category')
            ->with('success', 'Category deleted successfully');
    }
}
