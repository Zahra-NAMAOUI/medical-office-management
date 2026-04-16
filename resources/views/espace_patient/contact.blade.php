@extends('espace_patient.index')
@section('title')
Contactez-Nous
@endsection
<!-- <div class="mt-3"></div> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@section('main')
<link rel="stylesheet" href="{{asset('css/css.css')}}">
<div  style="     background-color: #e7f1f6" >
    <div class="container  col-lg-5 p-5 ">
        <div class="container">
            <form action="{{route('espace_patient.submitForm')}}" method="POST">
                @csrf
                <div class="card p-5 mt-5 ">
                    <div class="card p-5 card2">
                        <h1 class="text-center">Contactez-nous</h1>
                        <div class="form-group mt-3  w-100 input-icon">
                            <i class="bi bi-person"></i>
                            <input type="text" class="form-control input " id="name" name="name" required  placeholder="Nom">
                        </div>
                        <div class="form-group mt-3  w-100 input-icon">
                            <i class="bi bi-envelope"></i>
                            <input type="text" class="form-control input" id="email" name="email" required placeholder="E-mail">
                        </div>
                        <div class="form-group mt-3  w-100 input-icon-msg">
                            <!-- <i class="bi bi-chat-left-text"></i> -->
                            <i class="bi bi-person"></i>
                            <textarea class="form-control input" id="message" name="message" rows="5" required placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3 ps-3 ">
                        <button type="submit" class="btn btn-primary  w-100 input text-dark " style="background-image: linear-gradient(to right,#fbf7d1 ,#bae4f1) "  >Envoyer</button>
                        <div>
                    </div>
                </div>
            </form>
        </div>   
    </div>
</div>


</div>

</div>

@endsection

