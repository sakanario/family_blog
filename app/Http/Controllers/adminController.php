<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//syntax yang ngebuat kita bisa terhubung dengan database
use Illuminate\Support\Facades\DB;
use App\Blog;

class adminController extends Controller
{
    public function index ()
    {
        $blogs = Blog::all();
        return view('/admin_home' , ['blogs'=>$blogs]);
    }

    public function store(Request $request)
    {
        Blog::create([
            'category' => $request->category ,
            'title' => $request->title ,
            'gambar' => $request->gambar ,
            'content' => $request->content ,
            'slug' => 'null' ,

        ]);

        return redirect ('/admin');
        //REDIRECT HANYA FOKUS KE URL
    }

    public function delete ($id)
    {
        Blog::destroy($id);
        return redirect ('/admin');
    }

    public function update(Request $request , $id)
    {
        Blog::find($id)->update([
            'category' => $request->category ,
            'title' => $request->title ,
            'gambar' => $request->gambar ,
            'content' => $request->content ,
            'slug' => 'null' ,
        ]);

        return redirect('/admin');
    }
}
