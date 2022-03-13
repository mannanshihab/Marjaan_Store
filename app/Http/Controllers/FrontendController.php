<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag; 
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
    	return view('website.home');
    }

    public function Category($slug){
    	$category = Category::where('slug',$slug)->first();
        
        if($category){
            $posts = Post::where('category_id',$category->id)->OrderBy('created_at', 'DESC')->paginate(12);
            return view('website.Category',compact(['category','posts']));
        }else{
            return redirect()->route('welcome');
        }
    }

    public function details($slug){
        $post = Post::with('category')->where('slug', $slug)->first(); 
        
        if($post){
            return view('website.details', compact('post'));
        }
        else{
            return redirect('/');
        }   
    }

    public function about(){
    	return view('website.about');
    }

    public function contact(){
    	return view('website.contact');
    }
}
