@extends('espace_doctor.dashbord.contenu')
@section('titre')
    Liste Patients
@endsection
@section('section')
<section class="container">
    @if (session()->get('success'))
        <div class="container alert alert-success mb-3">{{session()->get('success')}} </div>
    @endif
    <h3 class="text-center">Liste des patients</h3>
    
        
    
    <table class="container table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th><th>Nom Complet</th><th>CIN</th><th>Genre</th><th>ville</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $ide=1
            @endphp
            @foreach ($patients as $patient)
            <tr>
                <td>{{$ide}}</td>
                <td>{{$patient->prenom}} {{$patient->nom}}</td>
                <td>{{$patient->cin}}</td>
                <td>{{$patient->genre}}</td>
                <td>{{$patient->ville}}</td>
                <td><form action="{{route('rendezvous.destroy',$patient->id)}}" method="post" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form></td>
            </tr>
            @php
                $ide+=1
            @endphp
                
            @endforeach
        </tbody>
    </table>
</section>

@endsection