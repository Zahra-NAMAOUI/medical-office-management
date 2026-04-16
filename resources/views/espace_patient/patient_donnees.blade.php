@extends('espace_patient.index')
@section('main')
<div class="container mt-5 p-5 mb-1">
    <div class="ms-5 mt-5">
        <div class="card w-50">
            <div class="card-body">
              <h5 class="card-title">{{ $patient->prenom }} {{ $patient->nom }}</h5>
              <h6 class="card-title">Date:  {{ $patient->date_rendez_vous }}</h6>
              <a class="btn btn-primary">Numéro {{ $patient->tour }}</a>
              <p class="card-text">Restez informé en cas d'annulation de votre rendez-vous via <a href="{{route('rendezvous.index')}}">ce lien</a></p>
            </div>
    </div>
</div> 
@endsection

    