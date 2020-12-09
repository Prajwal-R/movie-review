<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $movie_name=$request->movie_name;
        $poster=$request->poster;
        $language=$request->language;
        $genre=$request->genre;
        $date=$request->date;
        $actors=$request->actors;
        $description=$request->Description;
        

        $review =new Review();
        $review->movie_name=$movie_name;
        $review->poster=$poster;
        $review->language=$language;
        $review->genre=$genre;
        $review->release_year=$date;
        $review->actors=$actors;
        $review->description=$description;
        
        $review->save();
        return redirect()->route('home')->with('succes data added');
    }

    public function show()
    {
        
        $reviews=Review::all();
        return view('review', ['reviews' => $reviews]);


    }
}
