<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max: 2028', 'image'],
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => 'required'
        ]);

        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = 'storage/' . $filePath;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  'image' => ['required', 'max: 2028', 'image'],
        $request->validate([
            'title' => ['required', 'max: 255'],
            'category_id' => ['required', 'integer'],
            'description' => 'required'
        ]);

        $post = Post::findOrFail($id);

        // Image validation goes here...
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => ['required', 'max: 2028', 'image'],
            ]);

            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);

            File::delete(public_path($post->image));

            $post->image = 'storage/' . $filePath;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::FindOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }

    /**
     * Display a listing of Trashed records
     */

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trashed', compact('posts'));
    }

    public function restore(string $id)
    {
        $post = Post::onlyTrashed()->FindOrFail($id);
        $post->restore();

        return redirect()->back();
    }

    public function forceDelete(string $id)
    {
        $post = Post::onlyTrashed()->FindOrFail($id);

        File::delete(public_path($post->image));

        $post->forceDelete();

        return redirect()->back();
    }
}
