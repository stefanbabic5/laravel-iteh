<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return \response()->json(Movie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return response()->json(Movie::create($request->all()));
        } catch (\Throwable $th) {
           return \response()->json($th->getMessage(),500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return \response()->json($movie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $movie->update($request->all());
            return response()->json($movie);
        } catch (\Throwable $th) {
           return \response()->json($th->getMessage(),500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $movie->delete();
            return \response()->noContent();
         } catch (\Throwable $th) {
            return \response()->json($th->getMessage(),500);
         }
    }
}
