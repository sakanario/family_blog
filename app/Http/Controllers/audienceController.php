<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//syntax yang ngebuat kita bisa terhubung dengan database
use Illuminate\Support\Facades\DB;
use App\Blog;

class audienceController extends Controller
{
    public function index ()
    {
        $blogs = Blog::all();
        $banners = Blog::paginate(3);
        return view('/index' , ['blogs'=>$blogs, 'banners' => $banners]);
    }

    public function show ($id)
    {
        $blog = Blog::find($id);
        return view('/show' , ['blog'=>$blog]);
    }
}
