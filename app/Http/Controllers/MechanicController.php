<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Models\Service;

use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();

        return view('pages.add-mechanic', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $img_path = null;
        
        $validated = $request->validate([
        'name' => 'required|max:255',
        'last_name' => 'required|max:255',
        'specialization' => 'required|max:255',
        'city' => 'required|max:255',
        'service_id' => 'required'
        ]
       );

       if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $img_path = str_replace('public/','',$path);
        }


       Mechanic::create([
        'name' => request('name'),
        'last_name' => request('last_name'),
        'specialization' => request('specialization'),
        'city' => request('city'),
        'service_id' => request('service_id'),
        'img_path' => $img_path
       ]);

       return redirect('/dashboard');


    }

    /**
     * Display the specified resource.
     */
    public function show(Mechanic $mechanic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mechanic $mechanic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {
        //
    }
}
