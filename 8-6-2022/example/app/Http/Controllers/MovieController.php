<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use App\Http\Requests\StoremovieRequest;
use App\Http\Requests\UpdatemovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        $movies = movie::all();
        return view('home', compact("movies"));
    }
    
    
    public function index()
    {
        $movies = movie::all();
        return view('admin', compact("movies"));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            'number'=> 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|max:5048',
            "video" => 'required'

        ]);




        $imageName = time() . '-' .$request->name . '.' .$request->image->extension();
        $request->image->move(public_path('images') , $imageName);

        $videoName = time() . '-video' .$request->name . '.' .$request->video->extension();
        $request->video->move(public_path('videos') , $videoName);

        movie::create([
            "name" => $request->input('name'),
            'number'=> $request->input('number'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'url_image' => $imageName,
            'url_video' => $videoName
        ]);

        return redirect("/admin");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        return view('edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemovieRequest  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemovieRequest $request, movie $movie)
    {
        $form = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required"
        ]);

        $movie->update($form);

        return redirect("/admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        $movie->delete();
        return redirect('/admin');
    }
}
