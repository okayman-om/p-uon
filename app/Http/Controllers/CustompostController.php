<?php

namespace App\Http\Controllers;

use App\Models\Custompost;
use Illuminate\Http\Request;

class CustompostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customposts = Custompost::all();
        return view('pages.ourstories', compact('customposts'));
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
        Custompost::create([
            'title' => request('title'),
            'post' => request('post-story'),
            'slug' => request('slug'),
        ]);

        return redirect('admin2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custompost  $custompost
     * @return \Illuminate\Http\Response
     */
    public function show(Custompost $custompost)
    {
        //
        $customposts = Custompost::all();
        return view('dashboard.admin2', compact('customposts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custompost  $custompost
     * @return \Illuminate\Http\Response
     */
    public function edit(Custompost $custompost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custompost  $custompost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custompost $custompost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custompost  $custompost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custompost $custompost)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $slug
     * @return \Illuminate\Http\Response
     */
    public function getPost($slug)
    {
        return view('pages.singlepost2')
            ->with('custompost', Custompost::where('slug', $slug)->first());
    }
}
