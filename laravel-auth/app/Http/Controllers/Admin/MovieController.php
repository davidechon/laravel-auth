<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRule);
        $data = $request->all();
        $newMovie = new Movie();
        $newMovie->title = $data['title'];
        $newMovie->duration = $data['duration'];
        $newMovie->description = $data['description'];
        $newMovie->thumb = $data['thumb'];
        $newMovie->slug = Movie::generateSlug($data['title']);
        $newMovie->save();
        return redirect()->route('admin.Movies.show', $newMovie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate($this->validationRule);
        $data = $request->all();
        if($movie->title != $data['title']){
            $movie->slug = Movie::generateSlug($data['title']);
        }
        $movie->title = $data['title'];
        $movie->duration = $data['duration'];
        $movie->description = $data['description'];
        $movie->thumb = $data['thumb'];
        $movie->slug = Movie::generateSlug($data['title']);
        $movie->save();
        return redirect()->route('admin.movies.show', $movie->id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post->delete();
        return redirect()->route('admin.movies.index');    }
}
