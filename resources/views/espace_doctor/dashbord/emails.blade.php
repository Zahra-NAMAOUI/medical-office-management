
@extends('espace_doctor.dashbord.contenu')
@section('titre')
   Liste de Emails
@endsection
@section('section')
<section class="container">
<link rel="stylesheet" href="{{asset('css/css.css')}}">
    @if (session()->get('success'))
        <div class="container alert alert-success mb-3">{{session()->get('success')}} </div>
    @endif
    <h3 class="text-center">LISTES DES EMAILS</h3>
    
        
    
    <table class="table  table-bordered shadow p-3 mb-5 mt-4 bg-body-tertiary rounded">
            <thead>
                <th class="scope col text-center">Nom</th>
                <th class="scope col  text-center">Email</th>
                <th class="scope col  text-center">Message</th>
            </thead>
            <tbody class="">
                @foreach($emailsBD as $email)
                    <tr class=' '>
                        <td class="align-middle text-uppercase fw-mediumt">{{$email->Nom}}</td>
                        <td class="align-middle fw-mediumt"><a href="#" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">{{$email->Email}}</a></td>
                        <td class="align-middle fw-medium msg">" {{$email->Message}} "</td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
</section>

@endsection
