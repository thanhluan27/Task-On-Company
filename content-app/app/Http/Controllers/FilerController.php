<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilerController extends Controller
{
    public function getData()
    {
        // $category = Categories::with('news')->get();
        // $catTab = isset($request->id) ? $request->id : $category->first()->id;
        // return view()->exists('dd') ? view('dd', compact('category', 'catTab')) : '';

        // $category = Categories::withCount(['news' => function ($query) {
        //     $query->where('post_id ', 1);
        // }])->get();
        // return view()->exists('dd') ? view('dd', compact('category')) : '';

        // $getData = DB::table('news')->select('*')->where('post_idid', $id)->get();
        // $categories = DB::table('categories')->select('*')->get();
        // return view('tesr.dd', ['getDataNewsById' => $getData, 'categories' => $categories]);
        // dd($getData);

        // Categories::with('news')->orderBy('category_id', 'desc')->get()->map(function($categories) {
        //     $categories->setRelation('news', $categories->news->sortByDesc('post_id')->take(1));
        //     return view('test.dd', compact('categories'));
        // });

    }
}
