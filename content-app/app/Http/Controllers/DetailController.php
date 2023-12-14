<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index()
    {
        $data = DB::table('News')
            ->get();
        return view('news.post-detail', ['data' => $data]);
    }
    public function detail($id)
    {
        $data = News::find($id);
        return view('news.post-detail', ['posts' => $data]);
    }
}
