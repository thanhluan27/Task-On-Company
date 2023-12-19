<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilerController extends Controller
{
    public function __invoke(Request $request)
    {
        $file = $request->file('image');
        $name = 'ahmed' . $file->extension();

        return Storage::putFile('content-app', $file, $name);
        
    }
}
