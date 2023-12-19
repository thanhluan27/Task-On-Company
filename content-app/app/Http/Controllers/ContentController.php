<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\News;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $posts = News::latest()->paginate(5);
        return view('news.post-index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('news.post-add');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'excerpt' => 'required',
            'content' => 'required',
            'posted_at' => 'required',
            'feature'
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'img/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'public/img/posts';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destinationPath, $profileImage);
            // $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        News::create($input);
        return redirect()->route('post')
            ->with('success', 'Post created successfully.');
    }

    //
    public function edit(News $posts)
    {
        return view('news.post-edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $posts)
    {
        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'status' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'posted_at' => 'required',
            'feature'
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'img/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // } else {
        //     unset($input['image']);
        // }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $destinationPath = 'img/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // } else {
        //     unset($input['image']);
        // }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'public/img/posts';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($destinationPath, $profileImage);
            // $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $posts->update($input);

        return redirect()->route('post')
            ->with('success', 'Posts updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $posts)
    {
        $posts->delete();

        return redirect()->route('post')
            ->with('success', 'Posts deleted successfully');
    }


    /*
|--------------------------------------------------------------------------
| SEARCH
|--------------------------------------------------------------------------
*/
    public function search(Request $request)
    {
        $search = $request->search;
        $posts = News::where(function ($query) use ($search) {
            $query->where('title', 'like', "%$search%")
                ->orWhere('excerpt', 'like', "%$search%")
                ->orWhere('content', 'like', "%$search%")
                ->orWhere('status', 'like', "%$search%")
                ->orWhere('slug', 'like', "%$search%");
        })
            ->get();

        return view('news.post-search', compact('posts', 'search'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // DETAIL
    public function detail($id)
    {
        $data = News::find($id);
        return view('news.post-detail', ['posts' => $data]);
    }
}
