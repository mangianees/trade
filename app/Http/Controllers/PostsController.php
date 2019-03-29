<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
class PostsController extends Controller
{


/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this-> validate($request,[
            'make'=>'required',
            'model'=>'required',
            'price'=>'required',
            'mileage'=>'required',
            'registration'=>'required',
            'item_type'=>'required',
            'fuel_type'=>'required',
            'transmission'=>'required',          
            'description'=>'required',
            'image_path' =>'image|nullable|max:1999'

        ]);

        //file upload

        if($request->hasFile('cover_image'))
        {
            //get filename
            $fileNameWithExt = $request ->file('cover_image')->getclientoriginalname();
            //Filename only
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //extension
            $extension=$request->file('cover_image')->getclientoriginalExtension();
            //file name to store
            $fileNameToStore= $fileName.'_'.time().'.'.$extension;
            $path=$request ->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } else 
        {
            $fileNameToStore='noimage.jpg';
        }

        //}

        //DB store value

        $post = new Post;
        $post -> make =$request->input('make');
        $post -> model =$request->input('model');
        $post -> price =$request->input('price');
        $post -> mileage =$request->input('mileage');
        $post -> registration =$request->input('registration');
        $post -> user_id = auth()->user()->id;
        $post -> item_type =$request->input('item_type');
        $post -> fuel_type =$request->input('fuel_type');
        $post -> transmission =$request->input('transmission');
        $post -> description =$request->input('description');
        $post-> image_path=$fileNameToStore;
        $post ->save();

        return redirect('/posts')->with('success','Advertisement Created');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        //check authentication

        if(auth()-> user() ->id !== $post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorized Access');
        }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this-> validate($request,[
            'make'=>'required',
            'model'=>'required',
            'price'=>'required',
            'mileage'=>'required',
            'registration'=>'required',
            'item_type'=>'required',
            'fuel_type'=>'required',
            'transmission'=>'required',
            'description'=>'required'          

        ]);


        if($request->hasFile('cover_image'))
        {
            //get filename
            $fileNameWithExt = $request ->file('cover_image')->getclientoriginalname();
            //Filename only
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //extension
            $extension=$request->file('cover_image')->getclientoriginalExtension();
            //file name to store
            $fileNameToStore= $fileName.'_'.time().'.'.$extension;
            $path=$request ->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }

        //DB store value

        $post =  Post::find($id);
        $post -> make =$request->input('make');
        $post -> model =$request->input('model');
        $post -> price =$request->input('price');
        $post -> mileage =$request->input('mileage');
        $post -> registration =$request->input('registration');
        $post -> item_type =$request->input('item_type');
        $post -> fuel_type =$request->input('fuel_type');
        $post -> transmission =$request->input('transmission');
        $post -> description =$request->input('description');
        if($request->hasfile('cover_image')){
            $post->image_path=$fileNameToStore;
        }
        $post ->save();

        return redirect('/posts')->with('success','Advertisement Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        if(auth()-> user() ->id !== $post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorized Access');
        }


        $post->delete();

        if($post->image_path !=='noimage.jpg'){

            storage::delete('public/cover_images/'.$post->image_path);

        }

        return redirect('/posts')->with('success','Advertisement Removed',['class','alertfixed']);

    }
}
