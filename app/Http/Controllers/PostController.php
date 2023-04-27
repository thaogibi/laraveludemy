<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //khai báo dữ liệu do chưa có DB
    // private $posts = [
    //     1 => [
    //         'title' => 'title1',
    //         'content' => 'content1'
    //     ],
    //     2 => [
    //         'title' => 'title2',
    //         'content' => 'content2'
    //     ],
    //     3 => [
    //         'title' => 'title3',
    //         'content' => 'content3'
    //     ],
    //     4 => [
    //         'title' => 'title4',
    //         'content' => 'content4'
    //     ],
    //     5 => [
    //         'title' => 'title5',
    //         'content' => 'content5'
    //     ]
    // ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
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
    public function store(StorePost $request)
    {
        // $request->validate([
        //     'title' => 'bail|required|min:5|max:100',
        //     'content' => 'required'
        // ]);
        // $post = new Post();
        // $post->title = $request->input('title');
        // $post->content = $request->input('content');
        // $post->save();


        
        $validated = $request->validated();
        // $post = new Post();
        // $post -> title = $validated['title'];
        // $post -> content = $validated['content'];
        // $post->save();

        $post = Post::create($validated);

        $request->session()->flash('status', 'The new post was created');
        return redirect()->route('posts.show', ['post' => $post->id]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // abort_if(!isset($this->posts[$id]), 404);   //nếu không tồn tại $id => trả về 404
        // return view('posts.show', ['post' => $this->posts[$id]]);

        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('posts.edit', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::findOrFail($id);
        $validated = $request->validated();
        $post->fill($validated);
        $post->save();

        $request->session()->flash('status', 'The post was updated!');
        return redirect()->route('posts.show', ['post' => $post->id]);
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
