<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();

        return view('auth.home', ['posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,mp4,mov,ogg,qt|max:204800',
        ]);

        $file = $request->file('file');
        $filePath = $file->store('posts', 'public');
        $fileType = $file->getMimeType();

        $post = new Post();
        $post->user_id = auth()->id();
        $post->caption = $request->caption;
        $post->file_path = $filePath;
        $post->file_type = $fileType;
        $post->save();

        return redirect()->route('home')->with('success', '投稿完了');
    }

    public function create()
    {
        return view('parts.create_post');
    }
}
