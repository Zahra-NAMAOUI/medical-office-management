@extends('espace_patient.index')
@section('title')
Espace privé
@endsection
@section('main')
<section>
    <div class="body">
        @if (session()->get('success'))
            <div class="session alert alert-success">
                <span class="text-center text-dark">{{session()->get('success')}}</span>
            </div>
        @endif
        <div class="contact-form">
    
            <img alt="img" class="avatar" src="{{URL('images/user.jpg')}}">
            
            <h2>Login pour admin</h2>
            <form action="{{route('login.signin')}}" method="POST">
                @csrf
                <p>Email</p><input placeholder="Enter Email" type="email" name="email" value="{{old('email')}}">
                <br>
                @error('email')
                   <span class="text-danger">{{$message}}</span> 
                @enderror
                <span></span>
                <p>Passwrod</p><input placeholder="Enter Password" type="password" name="password"> 
                <input type="submit" value="Sign in">
                
            </form>
        </div>    
    </div>
</section>


@endsection