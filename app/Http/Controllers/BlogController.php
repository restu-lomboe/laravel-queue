<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Blog;
use App\Events\BlogsNotification;
use App\Events\BlogsUpdateNotification;

class BlogController extends Controller
{
    public function post(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if (empty($data['publish'])) {
            $status = 0;
        } else {
            $status = 1;
        }

        $blog = new Blog;
        $blog->user_id = \Auth::user()->id;
        $blog->title = $data['title'];
        $blog->publish = $status;
        $blog->save();

        event(new BlogsNotification($blog));

        return redirect()->back()->with('status', 'Blog berhasil terkirim');
    }

    public function index()
    {
        $blog = Blog::get();

        return view ('blog', compact('blog'));
    }

    public function edit(Request $request, $id)
    {
        $data = $request->all();
        $blog = Blog::where('id', $id)->first();

        if (empty($data['publish'])) {
            $status = 0;
        } else {
            $status = 1;
        }

        $blog->update(['publish'=> $status]);

        event(new BlogsUpdateNotification($blog));

        return redirect()->back()->with('status', 'Blog berhasil di Update');
    }
}
