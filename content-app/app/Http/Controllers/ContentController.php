<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Categories;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $posts = News::latest()->paginate(5);
        $categories = DB::table('categories')->select('*')->get();

        return view('news.post-index', compact('posts', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        // return view('news.post-index', compact('posts'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function getCate(Categories $categories)
    {
        $posts = News::where('category_id', $categories->id)->with('category')->get();
        return view('news.post-index', compact('posts'));
    }
    public function getDataById($id)
    {
        $getData = DB::table('news')->select('*')->where('post_id', $id)->get();
        $categories = DB::table('categories')->select('*')->get();
        return view('news.post-add', ['getDataProductById' => $getData, 'categories' => $categories]);
    }

    public function create()
    {
        // $posts = News::all();
        $categories = DB::table('categories')->select('*')->get();
        return view('news.post-add', compact('categories'));
        // dd($posts);
        // $categories = DB::table('categories')->select('*')->get();
        // $posts = DB::table('news')->select('*')->get();
        // return view('news.post-add', ['categories' => $categories, 'posts' => $posts]);
        // $getData = DB::table('news')->select('*')->where('post_id', $id)->get();
        // $categories = DB::table('categories')->select('*')->get();
        // return view('news.post-add', ['getDataProductById' => $getData, 'categories' => $categories]);
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
            'feature',
            'category_id' => 'required'
        ]);

        $input = $request->all();

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

    //EDIT
    public function edit(News $posts)
    {
        $categories = DB::table('categories')->select('*')->get();
        return view('news.post-edit', compact('posts', 'categories'));
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
            'feature',
            'category_id' => 'required'
        ]);

        $input = $request->all();

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

    /*
|--------------------------------------------------------------------------
| Update and Delete all Post status
|--------------------------------------------------------------------------
*/
    public function editAllStatus()
    {
        return view('news.edit-status');
    }

    public function updateAllStatus(Request $request, News $news)
    {
        $request->validate([
            'status' => 'required|max:255',
        ]);

        $input = $request->all();
        News::query()->update(['status' => $request->status]);
        $news->update($input);

        return redirect()->route('post')
            ->with('success', 'Updated all status successfully');
    }

    public function destroyAllStatus(News $news)
    {
        News::query()->update(['status' => null]);
        $news->delete();

        return redirect()->route('post')
            ->with('success', 'Deleted all status successfully');
    }
}
