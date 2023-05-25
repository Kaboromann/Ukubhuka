<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight2;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PhotoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $flight2 = new Flight2;


 
        $flight2->name = $request->name;
 
        $flight2->save();
        return redirect('/welcome');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flight2 = new Flight2;


        $flight2= flight2::find(4);
               $flight2->name = $request->name;
        
               $flight2->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $flight2 = Flight2::find(2);
        $flight2 ->name = $request->name;
        $flight2->delete();
    }
}
