@extends('espace_patient.index')
@section('title')
    Acceuil
@endsection
@section('main')

<section class="hero-section mb-4" >
       
    <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
      <h1>Bienvenue</h1>
      <p>Sur Cabinet Dr.Samira BEKRIT</p>
      <a href="{{route('rendezvous.index')}}" class="login-button">Prendre Rendez-Vous En Un Clin D'oeil</a>
  
    </div>
</section>
<section class="about-section mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="{{URL('images/doctor2.jpg')}}" class="img-fluid rounded" alt="doctor">
                </div>

            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h1>Dr Samira Bekrit</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis numquam architecto sint dolor corrupti laboriosam harum porro error voluptas, deleniti voluptate enim veniam quis dolores doloribus est molestias. Exercitationem, error.</p>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="section-services mb-5">
    <h1 id="services">Services</h1>
    <div class="d-flex justify-content-evenly ">
    
      <div><a href="" ><img src="{{url('images/stethoscope.png')}}" alt="image"></a><br>
      <span>Médecine Générale</span>
     </div>
      <div><a href=""><img src="{{url('images/echocardiography.png')}}" alt="image"></a><br>
        <span>Echographie Clinique</span>
      </div>
      <div><a href=""><img src="{{url('images/grief.png')}}" alt="image"></a><br>
        <span id="span-in">Infertilité-stérilité du couple</span>
      </div>
      <div><a href=""><img src="{{url('images/maternity.png')}}" alt="image"></a><br>
        <span>Gynécologie Médicale</span>
      </div>
      <div><a href=""><img src="{{url('images/medicine.png')}}" alt="image" id="colposcopie"></a><br>
        <span id="span-col">Colposcopie</span>
      </div>
      </div>         
    </div>
  </section>
  
  
@endsection
