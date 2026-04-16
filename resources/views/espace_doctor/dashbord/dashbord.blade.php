@extends('espace_doctor.dashbord.contenu')
@section('titre')
Dashboard    
@endsection
@section('section')
        @if (session()->get('success'))
            <div class="alert alert-primary w-50 mb-2" >
                {{session()->get('success')}}
            </div>
        @endif
        <div class="row">    
            @foreach ($patientsfilter->sortBy('tour') as $item)
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h6 class="card-subtitle mb-2 btn btn-warning text-dark ">{{$item->tour}}</h6>
                      <h5 class="card-title">{{$item->prenom}} {{$item->nom}}</h5>
                      <p class="card-text">CIN: {{$item->cin}}, ville: {{$item->ville}}
                      </p>
                      {{-- <a href="" class="btn btn-outline-danger">Supprimer</a> --}}
                      
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
@endsection

