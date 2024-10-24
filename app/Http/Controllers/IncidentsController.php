<?php

namespace App\Http\Controllers;

use App\Models\Incidents;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $incidents = Incidents::all();

        return view('welcome', compact('incidents'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidents $incidents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidents $incidents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidents $incidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidents $incidents)
    {
        //
    }
}
