<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Post;
use DateTime;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::where('status', 1)->get();
        // return view('welcome',compact('post'));
        
        // $post = Post::where('user',1)->get();
        // return view('post.index',$post);
      // $post= Post::all();
    //   $post= Post::where('status', '1')->get();
    //     return view('post.index')->with('Post',$post);
        // 
        // //$Post= DB::select('SELECT * FROM Posts WHERE status_id=1');
        // return view('welcome')->with('Post',$post);
        // return  Post::all();
        // return view('post.index');
    }

    public function postActive()
    {
        
        $post= Post::where('status',1)->get();      
        return view('welcome',compact('post'));
    }

    public function postIndex()
    {       
        $post = Post::all();
        $user=auth()->user();
        if($user->type=='Normal')
        {
            $post = Post::where('user',$user->id)->get();
        }        
        return view('home',compact('post'));
    }

    public function postShow($id)
     {
        $post = Post::find($id);
        return view('show',compact('post'));
 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            'post'=> 'required', 
          'image' => 'required|mimes:jpg,jpeg,png|max:2048',              
            ]);

                  
                  $fileName = time().'.'.$request->image->getClientOriginalExtension(); 
                  $request->image->move(public_path('storage'), $fileName);
            $user = Auth::user();
            $id = $user->id;
            $current_date = date('Y-m-d H:i:s');
            $post = new Post;
            $post->title = $request->input('title');
            $post->post = $request->input('post');
            $post->image=$fileName;
            $post->created_date = $current_date;
            $post->user = $id;
            $post->status = 0;
            $post->save();
            return back()->with('success','Post created successfully!');

            //return redirect('/post')->with('success','Item created successfully!');
            //return redirect('/post');
    }

    public function postApprove($id)
    {
        Post::find($id)->update(['status'=>1]);
        $post = Post::all();
 
     
       return view('approve',compact('post'));
    }

    public function postReject($id)
    {
        Post::find($id)->update(['status'=>0]);
        $post = Post::all();
    
        return view('reject',compact('post'));
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // return Topic::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
