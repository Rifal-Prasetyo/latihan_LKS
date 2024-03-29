<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $site = [
            'title' => 'STUDIO'
        ];
        $studios = Studio::latest()->get();
        return view('page.dashboardV2.studio.studioAll', compact('site', 'studios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $site = [
            'title' => 'STUDIO'
        ];
        return view('page.dashboardV2.studio.action.createStudio', compact('site'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
