<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('images');
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
    public function store(Request $request, $userId)
    {
        $this->validate($request, [
            'listing_image' => 'required',
            'listing_image.*' => 'image|mimes:jpeg,png,jpg,|max:2048'
        ]);

        if($request->hasfile('listing_image'))
        {
            $baseDirectory = "listing-images/$userId";


            //in case the directory does not exist
            if(!Storage::disk('public')->exists($baseDirectory))
            {

                Storage::disk('public')->makeDirectory($baseDirectory);
            }
            
            foreach ($request->file('listing_image') as $image) {
                $imageName = Storage::disk('public')->put($baseDirectory, $image);
                // dd($imageName);
                $imageNames[] = $imageName;
            }
        }
        else
        {
            return response()->json(["success" => false]);
        }
        
        return response()->json(["success" => true, "imagePaths" => $imageNames]);
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
