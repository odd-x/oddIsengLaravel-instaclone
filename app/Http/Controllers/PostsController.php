<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{
    public function __construct()
    {

            $this->middleware('auth');

    }
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(){
            
            $data = request()->validate([
                    'caption'=>'required',
                    'image'=>['required','image'],
                ]);
                //whole image path
                $imagePath = (request('image')->store('uploads','public'));
                //thumbnail path
                $thumbnail = (request('image')->store('uploads/thumbnails','public'));
                Image::make(public_path("storage/{$thumbnail}"))
                ->fit(1200,1200)
                ->save();
            
                /**
                 *      MIGHT GONNA CHANGE CURRENT LOGIC LATER AS THERE IS NO NEED FOR 2 IMAGES
                 */

                //saves post
                
                auth()
                ->user()
                ->posts()
                ->create([
                    'caption' => $data['caption'],
                    'image' => $imagePath,
                    'thumbnail' => $thumbnail,
                ]);

        return redirect('/profile/'. Auth()->user()->id);
    }
    
    public function show(\App\Post $post){

        return view('posts.show', compact('post'));
    
    }

}