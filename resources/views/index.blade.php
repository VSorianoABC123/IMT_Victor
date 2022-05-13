<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.blade.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
</head>
<body class="bodyStyle">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>

    <main class="row">

        {{-- Sidebar --}}

    <aside id="sidebar" class="d-none col-lg-1 d-lg-block" >
    <div>
        <hr>
        {{--<button id="tancarSidebar" class="btn btn-primary active m-1 position-relative start-50" aria-current="page"><</button> --}}
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#sobremi" class="nav-link active" aria-current="page">
              Sobre mi
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              Els meus projectes
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              Altres habilitats
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              Contacte
            </a>
          </li>
        </ul>
      </div>

    </aside>

    {{-- Principal --}}

    <section class="d-xs-12 col-lg-11 bodyStyle" >

        <div class="text-align-center">
            {{-- Fuente: https://es.vecteezy.com/arte-vectorial/305090-fondo-verde-vector --}}
            <a href= "#sobremi">
                <img src="{{ url('img/green-vector-background.webp') }}" style="width: 100%;"> </a>

        </div>

        <div class= "mt-5 row" id="sobremi">

            <div class="col-xs-12 col-lg-7 border-end border-dark">
                <h1>Sobre mí</h1>
                <div style="text-align: center">

                    <p class="d-block">Pacient, cuidadós i flexible, el món de la informática m'ha interessat desde petit. </p>

                    <p class="d-block">He treballat amb diversos framework com... </p>

                    <div class="row">


                    <div class="col-4">

                        <img class= "d-block" src="{{ url('img/angular.png') }}" style="width: 100%;">

                        <p class="d-block p-2">Angular</p>

                    </div>
                    <div class="col-4">

                        <img class= "d-block" src="{{ url('img/laravel.png') }}" style="width: 100%;">

                        <p class="d-block p-2">Laravel</p>

                    </div>
                    <div class="col-4">

                        <img class= "d-block" src="{{ url('img/vue.webp') }}" style="width: 100%;">

                        <p class="d-block p-2">Vue</p>

                    </div>
                    </div>


                    <p class="d-block">Amb els que m'he pogut desenvolupar, tant en front-end com en back-end. </p>
                    <p class="d-block">Em considero bastant versátil, ja que em puc adaptar a lo que necessiti l'equip per a que avançin els projectes. </p>

                    <p class="d-block">També he treballat en diverses eines molt importants per a ser un expert en llengüatge de marques. </p>
                    <p class= "d-block"> HTML, CSS i JavaScript, ademés de Bootstrap per a combinar-les. </p>

                    <img class= "d-block" src="{{ url('img/bootstrap.png') }}" style="width: 100%;">
                </div>
            </div>
            <div class="col-xs-12 col-lg-2">
                <img class= "d-none d-lg-block" src="{{ url('img/captura1.png') }}" style="width: 100%;">

                <img class= "d-block d-lg-none" src="{{ url('img/captura2.png') }}" style="width: 100%;">



                {{--
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                  </div> --}}
            </div>

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>
        <div class= "mt-5">
            absagikbagksajgbsakgsabaskjgasbksabga

        </div>


    </section>

    </main>

    </body>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="sidebars.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

    <script>


        /* let boto = document.getElementById("tancarSidebar");

        boto.addEventListener("click",function(){


            document.getElementById("sidebar").classList.add("invisible");

            document.getElementById("sidebar").classList.remove("col-3");
            document.getElementById("sidebar").classList.add("col-0");


        }, false); */


    </script>
</html>
