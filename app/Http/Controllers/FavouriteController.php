<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function index()
    {
        return auth()->user()->favourites()->paginate(20);
    }

    public function store(Request $request)
    {
        auth()->user()->favourites()->attach($request->product_id);

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy($favourite_id)
    {
        if (auth()->user()->hasFavourite($favourite_id)) {
            auth()->user()->favourites()->detach($favourite_id);

            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'favourite does not exist in this user']);
    }
}
