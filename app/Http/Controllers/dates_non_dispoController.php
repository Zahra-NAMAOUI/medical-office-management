<?php

namespace App\Http\Controllers;

use App\Models\dates_non_dispo;
use Illuminate\Http\Request;

class dates_non_dispoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $dates=dates_non_dispo::all();
       return view('espace_doctor.dashbord.listeDate',compact('dates'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dates=$request->validate([
            'date_pas_dispo'=>'required|date'
        ]);
        dates_non_dispo::create($dates);
        return redirect()->route('admin.index')->with('successdates', 'Les dates ont été ajoutées avec succès.');

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
        $date=dates_non_dispo::findOrFail($id);
        $date->delete();
        return redirect()->route('dateNonDispo.index')->with('success','les donnees sont supprimer avec succes');
    }
}
