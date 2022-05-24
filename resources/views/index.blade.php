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
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(156, 185, 144)">
            <div class="d-flex container justify-content-lg-around justify-content-center">
                <h5 class="navbar-brand" class="d-none col-lg-1 d-lg-block ">{{__('messages.desenvolupadorweb')}}</h5>
            </div>
            <div class="d-flex container justify-content-lg-around justify-content-center">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border-color:black; background-color: #d6bda9">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li> <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></li>
                        @endif
                    @endforeach
                    </ul>
                </div>




            </div>
        </nav>

    </header>


    <main class="row">

        {{-- Sidebar --}}

        <div id="sidebar" class="col-lg-1 d-lg-block d-none" >
            <div class="sticky-top">
                <hr>
                {{-- <button id="tancarSidebar" class="btn btn-primary active m-1 position-relative start-50" aria-current="page"><</button> --}}
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#sobremi" class="nav-link opcionsSidebar active" aria-current="page">
                            {{__('messages.sobremi')}}
                        </a>
                    </li>
                    <li>
                        <a href="#elsmeusprojectes" class="nav-link opcionsSidebar link-dark">
                            {{__('messages.elsmeusprojectes')}}
                        </a>
                    </li>
                    <li>
                        <a href="#altreshabilitats" class="nav-link opcionsSidebar link-dark">
                            {{__('messages.altreshabilitats')}}
                        </a>
                    </li>
                    <li>
                        <a href="#contacte" class="nav-link opcionsSidebar link-dark">
                            {{__('messages.contacte')}}
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Principal --}}

        <div class="d-xs-12 col-lg-11">

            <div class="col-12 text-align-center">
                {{-- Fuente: https://es.vecteezy.com/arte-vectorial/305090-fondo-verde-vector --}}
                <a href="#sobremi">
                    <img alt="Logo" src="{{ url('img/green-vector-background.webp') }}" style="width: 100%;"> </a>

            </div>

            <div class="row" id="sobremi">

                <div class="col-xs-12 col-lg-8">
                    <h1 class="my-3">{{__('messages.sobremi')}}</h1>
                    <div style="text-align: center">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" style="background-color: #d6bda9">
                                    <a class="btn " data-bs-toggle="collapse" href="#collapseOne">
                                        <b>{{__('messages.softskills')}}</b>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body" style="background-color: #e0fdd5">
                                      <p class="">{{__('messages.softskills1')}} </p>

                                        <img alt="Lista de Softskills" class=""

                                        @if (Config::get('languages')[App::getLocale()] == "Català")

                                             src="{{ url("img/softSkillsCatala.webp")}}"
                                        @elseif (Config::get('languages')[App::getLocale()] == "Castellano")
                                            src="{{ url("img/softSkillsCastellano.webp")}}"
                                        @else
                                            src="{{ url("img/softSkillsEnglish.webp")}}"

                                        @endif
                                         style="width: 100%;">


                                    <p class="">{{__('messages.softskills2')}} </p>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" style="background-color: #d4ad8c">
                                    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                        <b>{{__('messages.hardskills')}}</b>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body" style="background-color: #c2e2b5">

                                        <p class="">{{__('messages.hardskills1')}} </p>

                                        <div class="row">


                                            <div class="col-4">

                                                <img alt="Logo Angular" class="" src="{{ url('img/angular.png') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Angular</p>

                                            </div>
                                            <div class="col-4">

                                                <img alt="Logo Laravel" class="" src="{{ url('img/laravel.png') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Laravel</p>

                                            </div>
                                            <div class="col-4">

                                                <img alt="Logo Vue" class="" src="{{ url('img/vue.webp') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Vue</p>

                                            </div>
                                        </div>


                                        <p class="">{{__('messages.hardskills2')}}</p>
                                        <p class="">{{__('messages.hardskills3')}}</p>
                                        <p class="">{{__('messages.hardskills4')}} </p>

                                        <img alt="Logo HTML + CSS + Javascript" class="" src="{{ url('img/bootstrap.png') }}"
                                            style="width: 60%;">

                                            <p class="mt-5">{{__('messages.hardskills5')}}</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <div class="col-xs-12 col-lg-1">
                    <img alt="Surto jo en Vertical" class="d-none d-lg-block" src="{{ url('img/captura1.png') }}">

                    <img  alt="Surto jo en Horitzontal" class=" d-lg-none" src="{{ url('img/captura2.png') }}" style="width: 100%;">



                    {{-- <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                  </div> --}}
                </div>

            </div>
            <div id="elsmeusprojectes">

                <h1 class="my-3">{{__('messages.elsmeusprojectes')}}</h1>

                <div class="row d-flex justify-content-center">

                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img alt="Previsualització projecte Broggi" id="projecte1" src="{{ url('img/Grabacio1.jpg') }}"
                            style="width:80%;">

                        <p class="px-5"><b>{{__('messages.elsmeusprojectes1')}}</b></p>


                </div>
                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img alt="Previsualització projecte Centre d'Estudis Politecnics" id="projecte2"  src="{{ url('img/Grabacio2.jpg') }}"
                            style="width: 80%;">

                        <p class="px-5"><b>{{__('messages.elsmeusprojectes2')}}</b></p>


                </div>
                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img alt="Previsualització minijoc Centre d'Estudis Politecnics" id="projecte3" src="{{ url('img/Grabacio3.jpg') }}"
                            style="width: 80%;">

                        <p class="px-5" ><b>{{__('messages.elsmeusprojectes3')}}</b></p>


                </div>
                </div>

            </div>
            <div class="" id="altreshabilitats">

                <h1 class="my-3">{{__('messages.altreshabilitats')}}</h1>


                <div class=" d-flex justify-content-center my-2">
                    <video style="height: auto; width:80%;" id="video">
                    <source src="{{ url('img/VideoInteractivo.mp4') }}"  type="video/mp4">
                        {{__('messages.navegadorerror')}}
                    </video>
                </div>
                <div class=" d-flex justify-content-center my-2">
                    <nav>
                        <input type="button" class="videobuttons" id="restart" value="&#8634;">
                        <input type="button" class="videobuttons" id="backward" value="&laquo;">
                        <input type="button" class="videobuttons" id="play" value="&#9658;">
                        <input type="button" class="videobuttons" id="forward" value="&raquo;">
                        <input type="button" class="videobuttons" id="changevolume" value="&#128263;">
                    </nav>
                </div>

            </div>
            <div class="" id="contacte">

                <h1 class="my-3">{{__('messages.contacte')}}</h1>
                <div class="row  col-xs-12 col-lg-11" style="text-align: center">



                    <div class="col-xs-12 col-lg-6" >
                        <a href="https://www.linkedin.com/in/victor-soriano-calder%C3%B3n-0a22a6229">

                        <img alt="Logo Linkedin" id="projecte1" src="{{ url('img/linkedin.png') }}"
                            style="width: 50%;">

                        <p class=" p-2">LinkedIn</p>

                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 ">
                        <a href="https://github.com/VSorianoABC123">

                        <img alt="Logo GitHub" id="projecte2" src="{{ url('img/github.png') }}"
                            style="width: 50%;">

                        <p class=" p-2">GitHub</p>

                        </a>
                    </div>
                </div>

            </div>

        </div>

    </main>

    {{-- Modales Video Interactivo --}}
    <div class="modal" id="modalInicio" tabindex="-1" aria-labelledby="modalInicioLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{__('messages.seleccionaunaopcio')}}</h5>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-5 text-center">
                    <button id="opcion1" type="button" class="btn btn-primary">Wikis</button>
                    </div>
                </div>
                <div class="row my-5 justify-content-evenly">
                    <div class="col-5 text-center">
                    <button id="opcion2" type="button" class="btn btn-primary">{{__('messages.contingutmultimedia')}}</button>
                    </div>
                    <div class="col-5 text-center">
                    <button id="opcion3" type="button" class="btn btn-primary">{{__('messages.altresllenguatges')}}</button>
                    </div>
                </div>
                <div class="row my-5 justify-content-center">
                    <div class="col-5 text-center">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('messages.sortir')}}</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal" id="modalVolver" tabindex="-1" aria-labelledby="modalInicioLabel" aria-hidden="true" data-bs-backdrop="static">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:black">{{__('messages.escoltaraltreopcio')}}</h5>
            </div>
            <div class="modal-body">
                <div class="row justify-content-evenly">
                    <div class="col-5 text-center">
                    <button id="opcionSeguir" type="button" class="btn btn-primary">{{__('messages.si')}}</button>
                    </div>
                    <div class="col-5 text-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('messages.no')}}</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>


<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="sidebars.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="{{ url('js/index.js') }}">


</script>

</html>
