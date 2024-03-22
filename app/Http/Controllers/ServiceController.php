<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
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
        return view('pages.add-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|max:255|unique:services',
        'address' => 'required|max:255',
        'manager' => 'required|max:255'
        ]
       );


       Service::create([
        'title' => request('title'),
        'address' => request('address'),
        'manager' => request('manager'),
       ]);

       return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('pages.show-service', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('pages.edit-service', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
                
        $validated = $request->validate([
        'title' => 'required|max:255',
        'address' => 'required|max:255',
        'manager' => 'required|max:255'
        ]
       );

        $service = Service::find($service->id);
        $service->title = request('title');
        $service->address = request('address');
        $service->manager = request('manager');

        $service->save();

       return redirect('/service/'.$service->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/');
    }
}
