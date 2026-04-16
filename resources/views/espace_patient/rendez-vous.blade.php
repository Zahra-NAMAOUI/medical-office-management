@extends('espace_patient.index')
@section('title')
Rendez-Vous
@endsection
@section('main')
<div  style="background-image: linear-gradient(to left,#F5F5DC,#FFFACD)">
    <div class="container  col-lg-8 p-5">
        <div class="p-4 mt-5">
            @isset($dates_non_dispo)
            @if ($dates_non_dispo->isNotEmpty())
            <div class="alert alert-success mt-2">
                <h3>Voila les dates <strong>NON DISPONIBLE</strong></h3>
                <ul>
                    @foreach ($dates_non_dispo as $item)
                    <li>{{$item->date_pas_dispo}}</li>
                    @endforeach
                </ul>
            
            </div>
            @endif
           
            @endisset
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <ul>
                <li class="alert alert-danger" >{{$error}}</li>
                </ul>
                    
                @endforeach
                    
            @endif
        
        <form action="{{route('rendezvous.store')}}" method="POST">
            @csrf
            <div class="card p-5">
                <div class="row">
                    <h1 class="text-center">Prendre Rendez-Vous</h1>
                    <div class="col-5 ms-5 mt-3 ps-3">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Entre votre Nom" class="form-control">
                    </div>
    
                    <div class="col-5  mt-3">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Entre votre Prénom" class="form-control">
                    </div>
                    <div class="col-10 ms-5  mt-3 ps-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="" id="email" placeholder="Entre votre email" class="form-control">
                    </div>
    
                    <div class="col-10 ms-5  mt-3 ps-3">
                        <label for="phone">Téléphone</label>
                        <input type="text" name="phone" id="phone" placeholder="Entre votre Téléphone" class="form-control">
                    </div>
    
                    <div class="col-5 ms-5 mt-3 ps-3">
                        <label for="cin">CIN</label>
                        <input type="text" name="cin" id="cin" placeholder="Entre votre CIN" class="form-control">
                    </div>
    
                    <div class="col-5  mt-3">
                        <label for="rendez-vous">Date de rendez-vous</label>
                        <input type="date" name="date_rendez_vous" id="rendez-vous"  class="form-control">
                    </div>
                    <div class="col-5 ms-5 mt-3 ps-3">
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="ville" placeholder="Entre votre Ville" class="form-control">
                    </div>
                    
                    <div class="col-5  mt-3 ">
                        <label for="genre">Genre</label>
                        <select name="genre" id="genre" class="form-select">
                            <option value="femme">Femme</option>
                            <option value="homme">Homme</option>
                        </select>
                    </div>
                    
                   <div class="col-10 ms-5 mt-3 ps-3">
                    <button type="submit" class="form-control" style="background-image: linear-gradient(to right,#00BFFF,#FFFACD)">Confirmer</button>
                   </div>
                </div>
            </div>
    </form>
        </div>

       
</div>

</div>
@endsection
