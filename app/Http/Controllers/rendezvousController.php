<?php

namespace App\Http\Controllers;

use App\Models\dates_non_dispo;
use App\Models\patient;
use Illuminate\Http\Request;

class rendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dates_non_dispo=dates_non_dispo::all();
        return view('espace_patient.rendez-vous',compact('dates_non_dispo'));
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
        if ($request->filled('count')) {
            // If count value is provided, update it in the session
            session(['count' => (int)$request->input('count')]);
        }
    
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'nullable',
            'cin' => 'required',
            'ville' => 'required',
            'genre' => 'required',
            'date_rendez_vous' => 'required|date',
        ]);

        $count = session('count', 10);
        $dateRendezVous = $data['date_rendez_vous'];
      
        $appointmentsCount = patient::where('date_rendez_vous', $data['date_rendez_vous'])->count();
        $dateObj = \Carbon\Carbon::createFromFormat('Y-m-d', $dateRendezVous);
        $date_non_dispo = dates_non_dispo::where('date_pas_dispo', $dateRendezVous)->exists();

        if ($date_non_dispo) {
            return back()->withErrors(['errors'=>'Désolé, Cette date est pas disponible']);
        }

        if ($dateObj->dayOfWeek === 0 || $dateObj->dayOfWeek === 6) {
            
            return back()->withErrors(['errors'=>'Les rendez-vous ne sont pas disponibles les week-ends.']);
        }
        else{
            if ($appointmentsCount >= $count) {
                return back()->withErrors(['errors'=>'Le nombre maximum de rendez-vous pour cette date a été atteint. Veuillez réessayer plus tard.']);
            }else{
                $lastTour = patient::where('date_rendez_vous', $data['date_rendez_vous'])->max('tour');
      
                $data['tour'] = $lastTour + 1;
        
              
                $patient=patient::create($data);
                return redirect()->route('rendezvous.show', ['rendezvou' => $patient->id]);
        
        
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = patient::findOrFail($id);
        return view('espace_patient.patient_donnees',compact('patient'));
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
        $patient=patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('admin.create')->with('success','les donnees sont supprimer avec succes');
    }
}
