<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.blade.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="bodyStyle" style="font-family: barlow">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="d-flex container justify-content-lg-around justify-content-center">
                <h5 class="navbar-brand" class="d-none col-lg-1 d-lg-block ">Desenvolupador web</h5>
            </div>
            <div class="d-flex container justify-content-lg-around justify-content-center">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Escollir idioma
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Català</a></li>
                      <li><a class="dropdown-item" href="#">Castellá</a></li>
                      <li><a class="dropdown-item" href="#">Anglés</a></li>
                    </ul>
                  </div>
            </div>
        </nav>

    </header>

    <main class="row">

        {{-- Sidebar --}}

        <div id="sidebar" class="d-none col-lg-1 d-lg-block ">
            <div class="sticky-top">
                <hr>
                {{-- <button id="tancarSidebar" class="btn btn-primary active m-1 position-relative start-50" aria-current="page"><</button> --}}
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#sobremi" class="nav-link opcionsSidebar active" aria-current="page">
                            Sobre mi
                        </a>
                    </li>
                    <li>
                        <a href="#elsmeusprojectes" class="nav-link opcionsSidebar link-dark">
                            Els meus projectes
                        </a>
                    </li>
                    <li>
                        <a href="#altreshabilitats" class="nav-link opcionsSidebar link-dark">
                            Altres habilitats
                        </a>
                    </li>
                    <li>
                        <a href="#contacte" class="nav-link opcionsSidebar link-dark">
                            Contacte
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Principal --}}

        <div class="d-xs-12 col-lg-11">

            <div class="text-align-center">
                {{-- Fuente: https://es.vecteezy.com/arte-vectorial/305090-fondo-verde-vector --}}
                <a href="#sobremi">
                    <img src="{{ url('img/green-vector-background.webp') }}" style="width: 100%;"> </a>

            </div>

            <div class="mt-5 row" id="sobremi">

                <div class="col-xs-12 col-lg-8">
                    <h1>Sobre mí</h1>
                    <div style="text-align: center">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" style="background-color: #d6bda9">
                                    <a class="btn " data-bs-toggle="collapse" href="#collapseOne">
                                        <b>Soft skills</b>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body" style="background-color: #e0fdd5">
                                      <p class="d-block">Pacient, cuidadós i flexible, <b>el món de la informática
                                        m'ha interessat desde petit.</b> </p>

                                        <img class="d-block" src="{{ url('img/softskills.webp') }}"
                                                    style="width: 100%;">


                                    <p class="d-block">Em <b>considero bastant versátil</b>, ja que em puc adaptar a
                                        lo que necessiti l'equip per a que avançin els projectes. </p>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" style="background-color: #d4ad8c">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        <b>Hard skills</b>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body" style="background-color: #c2e2b5">

                                        <p class="d-block">He treballat amb diversos framework com... </p>

                                        <div class="row">


                                            <div class="col-4">

                                                <img class="d-block" src="{{ url('img/angular.png') }}"
                                                    style="width: 100%;">

                                                <p class="d-block p-2">Angular</p>

                                            </div>
                                            <div class="col-4">

                                                <img class="d-block" src="{{ url('img/laravel.png') }}"
                                                    style="width: 100%;">

                                                <p class="d-block p-2">Laravel</p>

                                            </div>
                                            <div class="col-4">

                                                <img class="d-block" src="{{ url('img/vue.webp') }}"
                                                    style="width: 100%;">

                                                <p class="d-block p-2">Vue</p>

                                            </div>
                                        </div>


                                        <p class="d-block">Amb els que m'he pogut desenvolupar, <b>tant en front-end
                                            com en back-end. </b></p>
                                        <p class="d-block">També he treballat en diverses eines molt importants
                                            per a ser <b>un expert en llengüatge de marques.</b> </p>
                                        <p class="d-block"> HTML, CSS i JavaScript, <b>ademés de Bootstrap per a
                                            combinar-les. </b></p>

                                        <img class="d-block" src="{{ url('img/bootstrap.png') }}"
                                            style="width: 100%;">
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <div class="col-xs-12 col-lg-1">
                    <img class="d-none d-lg-block" src="{{ url('img/captura1.png') }}">

                    <img class="d-block d-lg-none" src="{{ url('img/captura2.png') }}" style="width: 100%;">



                    {{-- <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                  </div> --}}
                </div>

            </div>
            <div class="mt-5" id="elsmeusprojectes">

                <h1>Els meus projectes</h1>
                <div class="row ml-5 d-flex justify-content-center " style="text-align: center">


                    <div class=" offset-2 col-xs-10 col-lg-4 offset-lg-0">

                        <img id="projecte1" class="d-flex justify-content-center" src="{{ url('img/Grabacio1.jpg') }}"
                            style="width: 80%;">

                        <p class="d-flex justify-content-center p-2" style="width: 80%;"><b>Projecte de simulació de trucades de emergéncia al 112 per el institut Moisés Broggi.</b></p>

                    </div>
                    <div class="offset-2 col-xs-10 col-lg-4 offset-lg-0 ">

                        <img id="projecte2" class="d-flex justify-content-center" src="{{ url('img/Grabacio2.jpg') }}"
                            style="width: 80%;">

                        <p class="d-flex justify-content-center p-2" style="width: 80%; text-align:center"><b>Projecte per a la introducció de la pàgina de portes obertes del Centre d'Estudis Politécnics.</b></p>

                    </div>
                    <div class="offset-2 col-xs-10 col-lg-4 offset-lg-0 ">

                        <img id="projecte3" class="d-flex justify-content-center " src="{{ url('img/Grabacio3.jpg') }}"
                            style="width: 80%;">

                        <p class="d-flex justify-content-center p-2" style="width: 80%;"><b>Minijoc com a part del storytelling del transcurs d'un curs al Centre d'Estudis Politécnics.</b></p>

                    </div>
                </div>

            </div>
            <div class="mt-5" id="altreshabilitats">

                <h1>Altres habilitats</h1>
                {{--
                <div class="d-flex justify-content-center mt-5">
                    <video autoplay controls style="width: 50%; height: auto;">
                    <source src="{{ url('img/Proyecto.mp4') }}" type="video/mp4">
                    Tu navegador no soporta el video.
                    </video>



                </div> --}}


                <div class="mt-5 d-flex justify-content-center">
                    <video autoplay controls style="height: auto; width:0%;">
                    <source src="{{ url('img/Proyecto.mp4') }}"  type="video/mp4">
                    Tu navegador no soporta el video.
                    </video>
                </div>

            </div>
            <div class="mt-5" id="contacte">

                <h1>Contacte</h1>
                <div class="row mt-5 col-xs-12 col-lg-11" style="text-align: center">



                    <div class="col-xs-12 col-lg-6" >
                        <a href="https://www.linkedin.com/in/victor-soriano-calder%C3%B3n-0a22a6229">

                        <img id="projecte1" src="{{ url('img/linkedin.png') }}"
                            style="width: 50%;">

                        <p class="d-block p-2">LinkedIn</p>

                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 ">
                        <a href="https://github.com/VSorianoABC123">

                        <img id="projecte2" src="{{ url('img/github.png') }}"
                            style="width: 50%;">

                        <p class="d-block p-2">GitHub</p>

                        </a>
                    </div>
                </div>

            </div>

        </div>

    </main>

</body>


<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="sidebars.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>


// Hover al pasar per damunt de l'imatge es reprodueix el gif, i al sortir retorna a la seva posicio original.


    let projecte1 = document.getElementById("projecte1");

    projecte1.addEventListener("mouseover", function(){
        projecte1.src="{{ url('img/Grabacio1.gif') }}";
    }
  , false);

  projecte1.addEventListener("mouseout", function(){
        projecte1.src="{{ url('img/Grabacio1.jpg') }}";
    }
  , false);

  let projecte2 = document.getElementById("projecte2");

    projecte2.addEventListener("mouseover", function(){
        projecte2.src="{{ url('img/Grabacio2.gif') }}";
    }
  , false);

  projecte2.addEventListener("mouseout", function(){
    projecte2.src="{{ url('img/Grabacio2.jpg') }}";
    }
  , false);

  let projecte3 = document.getElementById("projecte3");

  projecte3.addEventListener("mouseover", function(){
    projecte3.src="{{ url('img/Grabacio3.gif') }}";
    }
  , false);

  projecte3.addEventListener("mouseout", function(){
    projecte3.src="{{ url('img/Grabacio3.jpg') }}";
    }
  , false);



  //Funcionalitat de la sidebar.

  let opcionsSidebar = document.getElementsByClassName("opcionsSidebar");

  for (var i= 0; i< opcionsSidebar.length; i++){



        opcionsSidebar[i].addEventListener("click", function(){

            for (var i2= 0; i2<opcionsSidebar.length; i2++){
                opcionsSidebar[i2].classList.add("link-dark");
                opcionsSidebar[i2].classList.remove("active");

            }

            this.classList.add("active");
            this.classList.remove("link-dark");
        })



    }





    /* let boto = document.getElementById("tancarSidebar");

        boto.addEventListener("click",function(){


            document.getElementById("sidebar").classList.add("invisible");

            document.getElementById("sidebar").classList.remove("col-3");
            document.getElementById("sidebar").classList.add("col-0");


        }, false); */
</script>

</html>
