@extends('espace_doctor.dashbord.contenu')
@section('titre')
Liste des dates    
@endsection
@section('section')
   <div class="w-50 p-3">
    @if (session()->get('success'))
        <div class="container alert alert-success mb-3">{{session()->get('success')}} </div>
    @endif
    <h3 class="text-center">Liste des dates</h3>
        <ul>
            @foreach ($dates as $date)
            <li >
                <div class="d-flex justify-content-around">
                    {{$date->date_pas_dispo}} 
                    <form action="{{route('dateNonDispo.destroy',$date->id)}}" method="post" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-white"><img class="img1 " alt="img" src="{{url('images/delete.png')}}"></button>
                    </form>
                </div>
            </li>
                
            @endforeach
        </ul>    
</div> 
@endsection