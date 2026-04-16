<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();
        $patientsfilter = patient::whereDate('date_rendez_vous', '=', $today)->get();
        return view('espace_doctor.dashbord.dashbord',compact('patientsfilter'));
        
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients= patient::all();
        return view('espace_doctor.dashbord.listePatients',compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }
   


    /**
     * Display the specified resource.
     */
    public function show()
    {
       return view('espace_doctor.dashbord.ajouterPatient');
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
