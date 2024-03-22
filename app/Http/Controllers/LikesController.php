<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Models\Service;
use App\Models\Likes;
use Auth;


use Illuminate\Http\Request;

class LikesController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {

       Likes::create([
            'mechanic_id' => $id,
            'user_id' => Auth::id()
       ]);

       return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {
        //
    }
}
