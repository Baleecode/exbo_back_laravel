<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    function readAll()
    {
        $places = Place::all();

        return response()->json([
            'data' => $places,  
        ], 200);
    }

    function readRecommendationLimit()
    {
        $places = Place::orderBy('rate', 'desc')
        -> limit(5)
        -> get();

        if (count($places) > 0 )
        {
            return response()->json([
                'data' => $places,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $places,
            ], 404);
        }
    }

    function searchByCity($name)
    {
        $places = Place::where('location', 'like', '%' .$name. '%')
        ->orderBy('name')
        ->get();

        if (count($places) > 0 )
        {
            return response()->json([
                'data' => $places,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $places,
            ], 404);
        }
    }
}
