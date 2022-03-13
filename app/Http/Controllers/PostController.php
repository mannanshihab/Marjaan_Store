<?php

namespace App\Http\Controllers;

use Session;
use App\Post;
use Carbon\Carbon;
use App\Category;
use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create',compact(['categories', 'tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $post = Post::create ([
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'image' => 'image.jpg',
            'description'=> $request ->description,
            'category_id' => $request ->category,
            'published_at' => Carbon::now(), 
        ]);

        $post->tags()->attach($request->tags); 

        if ($request-> has ('image')){
            $image = $request->image;
            $image_new_name = time(). '.' . $image->getClientOriginalExtension();
            $image->move('storage/post/' , $image_new_name );
            $post->image = '/storage/post/' . $image_new_name ;
            $post->save();  
        }

        Session::flash('Success', 'Post Create Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $post-> title = $request-> title;
        $post->slug  = Str::slug($request->title);
        $post->description = $request ->description;
        $post->category_id = $request ->category;

        $post->tags()->sync($request->tags);

        if ($request-> hasFile ('image'))
        {
            $image = $request->image;
            $image_new_name = time(). '.' . $image->getClientOriginalExtension();
            $image->move('storage/post/' , $image_new_name );
            $post->image = '/storage/post/' . $image_new_name ; 
        }
        $post->save(); 

        Session::flash('Success', 'Post Update Successfully');
        return redirect()-> back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post){
            
            if (file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }

            $post->delete();
        }
        Session::flash('Success', 'Post Delete Successfully');
        return redirect()->route('post.index');
    }
}
