<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <title>Cabinet Samira Bekrit| @yield('titre')</title>
</head>
<body>
   <div class="main-container d-flex ">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">Dr.</span><span
                    class="text-dark">Samira Bekrit</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><img src="{{URL('/images/menu.png')}}" alt="c" class="img1"></button>
        </div>
         
        <ul class="list-unstyled px-2">
            <li class="">
                <a href="{{route('admin.index')}}" class="text-decoration-none px-3 py-2 d-block">
                <img src="{{URL('/images/home.png')}}" alt="c" class="img1 me-1"> Dashboard
                </a>
            </li>
            <li class=""><a href="{{route('admin.create')}}" class="text-decoration-none px-3 py-2 d-block"><img src="{{URL('/images/list.png')}}" alt="c" class="img1 me-1"> Liste des patients</a></li>
            <li class=""><a href="{{route('rendezvous.index')}}" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                <span><img src="{{URL('/images/add (1).png')}}" alt="c" class="img1 me-1">Rendez-Vous</span>
                
            </a>
        </li>
            <li class=""><a href="{{route('espace_doctor.dashbord.emails')}}" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><img src="{{URL('/images/mail.png')}}" alt="c" class="img1 me-1"> Emails</span>
                    
                </a>
            </li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-2">
            <li class="">
                <a href="{{route('login.logout')}}" class="text-decoration-none px-3 py-2 d-block"><img src="{{URL('/images/logout.png')}}" alt="c" class="img1 me-1">
                    log out</a></li>

        </ul>

    </div>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-md-none d-block">
                 <button class="btn px-1 py-0 open-btn me-2"><img src="{{URL('/images/menu.png')}}" alt="c" class="img1"></button>
                    <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">Dr Samira Bekrit</span></a>
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <form class="d-flex" method="POST" action="{{route('dateNonDispo.store')}}">
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-text">Entrer les dates non disponible:</span>
                                    <input type="date" name="date_pas_dispo"  class="form-control">
                                    <input type="submit" value="Ajouter" class="btn btn-outline-primary">
                                    <a href="{{route('dateNonDispo.index')}}" class="btn btn-outline-success">Voir listes des dates</a>
                                  </div>
                              </form>
                              
                              @if (session()->get('successdates'))
                              
                                  <span>{{session()->get('successdates')}} </span>
                              
                                @endif
                        </li>
                        <li class="nav-item ms-2">
                            <form class="d-flex" method="POST" action="{{route('rendezvous.store')}}" >
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-text">Augmenter le nombre des rendez-vous:</span>
                                    <input type="text" name="count"  class="form-control w-25" placeholder="Valeur par defaut 10">
                                    <input type="submit" value="augmenter"  class="btn btn-outline-primary">
                                   
                                  </div>
                              </form>
                              
                             
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <div class="dashboard-content px-3 pt-2">
            @yield('section')
          
       </div>
    </div>
</div>

       
    
  
</body>
</html>