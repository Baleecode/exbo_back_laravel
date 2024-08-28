<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    function readAll()
    {
        $rates = Rate::with('user', 'place')->get();

        return response()->json([
            'data' => $rates,  
        ], 200);
    }

    function whereUserId($id)
    {
        $rates = Rate::where('user_id', '=', $id)
        ->with('place', 'user')
        ->orderBy('created_at', 'desc')
        -> get();

        if (count($rates) > 0 )
        {
            return response()->json([
                'data' => $rates,
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
                'data' => $rates,
            ], 404);
        }
    }
}
