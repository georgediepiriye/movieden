<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets arrays of popular movies
        $popular_movies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];


        //gets arrays of now playing
        $now_playing = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing')
        ->json()['results'];

        //gets arrays of genres
        $genresArray = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/list')
        ->json()['genres'];

        //converts genre arrays into a collection of arrays of id and name key value pairs
        $genres = collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id']=> $genre['name']];
        });
     
     
   
        return view('home',[
            'popular_movies'=>$popular_movies,
            'genres' => $genres,
            'now_playing'=>$now_playing
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
