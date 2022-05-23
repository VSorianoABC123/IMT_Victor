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
                <h5 class="navbar-brand" class="d-none col-lg-1 d-lg-block ">Desenvolupador web</h5>
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

            <div class="col-12 text-align-center">
                {{-- Fuente: https://es.vecteezy.com/arte-vectorial/305090-fondo-verde-vector --}}
                <a href="#sobremi">
                    <img src="{{ url('img/green-vector-background.webp') }}" style="width: 100%;"> </a>

            </div>

            <div class="row" id="sobremi">

                <div class="col-xs-12 col-lg-8">
                    <h1 class="my-3">Sobre mí</h1>
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
                                      <p class="">Pacient, cuidadós i flexible, <b>el món de la informática
                                        m'ha interessat desde petit.</b> </p>

                                        <img class="" src="{{ url('img/softskills.webp') }}"
                                                    style="width: 100%;">


                                    <p class="">Em <b>considero bastant versátil</b>, ja que em puc adaptar a
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

                                        <p class="">He treballat amb diversos framework com... </p>

                                        <div class="row">


                                            <div class="col-4">

                                                <img class="" src="{{ url('img/angular.png') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Angular</p>

                                            </div>
                                            <div class="col-4">

                                                <img class="" src="{{ url('img/laravel.png') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Laravel</p>

                                            </div>
                                            <div class="col-4">

                                                <img class="" src="{{ url('img/vue.webp') }}"
                                                    style="width: 50%;">

                                                <p class=" p-2">Vue</p>

                                            </div>
                                        </div>


                                        <p class="">Amb els que m'he pogut desenvolupar, <b>tant en front-end
                                            com en back-end. </b></p>
                                        <p class="">També he treballat en diverses eines molt importants
                                            per a ser <b>un expert en llengüatge de marques.</b> </p>
                                        <p class=""> HTML, CSS i JavaScript, <b>ademés de Bootstrap per a
                                            complementar-les. </b></p>

                                        <img class="" src="{{ url('img/bootstrap.png') }}"
                                            style="width: 60%;">

                                            <p class="mt-5">En quant a bases de dades, tinc pràctica en <b> l'us de MySQL.</b></p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
                <div class="col-xs-12 col-lg-1">
                    <img class="d-none d-lg-block" src="{{ url('img/captura1.png') }}">

                    <img class=" d-lg-none" src="{{ url('img/captura2.png') }}" style="width: 100%;">



                    {{-- <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                  </div> --}}
                </div>

            </div>
            <div id="elsmeusprojectes">

                <h1 class="my-3">Els meus projectes</h1>

                <div class="row d-flex justify-content-center">

                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img id="projecte1" src="{{ url('img/Grabacio1.jpg') }}"
                            style="width:80%;">

                        <p class="px-5"><b>Projecte de simulació de trucades de emergéncia al 112 per el institut Moisés Broggi.</b></p>


                </div>
                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img id="projecte2"  src="{{ url('img/Grabacio2.jpg') }}"
                            style="width: 80%;">

                        <p class="px-5"><b>Projecte per a la introducció de la pàgina de portes obertes del Centre d'Estudis Politécnics.</b></p>


                </div>
                <div class="col-xs-12 col-lg-4" style="text-align: center">
                    <img id="projecte3" src="{{ url('img/Grabacio3.jpg') }}"
                            style="width: 80%;">

                        <p class="px-5" ><b>Minijoc com a part del storytelling del transcurs d'un curs al Centre d'Estudis Politécnics</b></p>


                </div>
                </div>

            </div>
            <div class="" id="altreshabilitats">

                <h1 class="my-3">Altres habilitats</h1>
                {{--
                <div class="d-flex justify-content-center ">
                    <video autoplay controls style="width: 50%; height: auto;">
                    <source src="{{ url('img/Proyecto.mp4') }}" type="video/mp4">
                    Tu navegador no soporta el video.
                    </video>



                </div> --}}


                <div class=" d-flex justify-content-center my-2">
                    <video style="height: auto; width:80%;" id="video">
                    <source src="{{ url('img/Proyecto.mp4') }}"  type="video/mp4">
                    Tu navegador no soporta el video.
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

                <h1 class="my-3">Contacte</h1>
                <div class="row  col-xs-12 col-lg-11" style="text-align: center">



                    <div class="col-xs-12 col-lg-6" >
                        <a href="https://www.linkedin.com/in/victor-soriano-calder%C3%B3n-0a22a6229">

                        <img id="projecte1" src="{{ url('img/linkedin.png') }}"
                            style="width: 50%;">

                        <p class=" p-2">LinkedIn</p>

                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 ">
                        <a href="https://github.com/VSorianoABC123">

                        <img id="projecte2" src="{{ url('img/github.png') }}"
                            style="width: 50%;">

                        <p class=" p-2">GitHub</p>

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



    //Funcionalitat del video

    function actionPlay()
{
	if(!video.paused && !video.ended)
	{
		video.pause();
		play.value='\u25BA'; //\u25BA
	}
	else
	{
		video.play();
		play.value='||';
	}
}
function actionRestart()
{
    video.currentTime = 0;
    video.pause();
}
function actionBackward()
{
	video.currentTime = video.currentTime - 10;
}
function actionForward()
{
    video.currentTime = video.currentTime + 10;
}
function actionChangeVolume()
{
	video.muted = !video.muted;

    if(video.muted)
	{
        // 	Para seleccionar un icono, ir a esta pagina https://www.fileformat.info/info/unicode/char/25ba/index.htm y copiar el codigo de "C/C++/Java source code"
		changevolume.value= '\uD83D\uDD09'; //\u25BA
	}
	else
	{
		changevolume.value='\uD83D\uDD07'; //\u25BA
	}

    /*


                        <input type="button" class="videobuttons" id="restart" value="&#8634;">
                        <input type="button" class="videobuttons" id="backward" value="&laquo;">
                        <input type="button" class="videobuttons" id="play" value="&#9658;">
                        <input type="button" class="videobuttons" id="forward" value="&raquo;">
                        <input type="button" class="videobuttons" id="changevolume" value="&#128263;">

    */



}

	video=document.getElementById('video');
	play=document.getElementById('play');
	restart=document.getElementById('restart');
	backward=document.getElementById('backward');
	forward=document.getElementById('forward');
	changevolume=document.getElementById('changevolume');


	video.addEventListener('click', actionPlay);
	play.addEventListener('click', actionPlay);
	restart.addEventListener('click', actionRestart);
	backward.addEventListener('click', actionBackward);
	forward.addEventListener('click', actionForward);
	changevolume.addEventListener('click', actionChangeVolume);

    /* function progressLoop() {
        setInterval(function () {
            var tiempoTotal;
            progress.value = Math.round((video.currentTime / video.duration) * 100);
            timer.innerHTML = progress.value + " %";

            if (progress.value < 74) {
                document.getElementById("tiempo").style.color = "white";
            }
            if (progress.value >= 75) {
                document.getElementById("tiempo").style.color = "#DC3545";
            }


        });
    }
    video.addEventListener("play", progressLoop); */



    /* let boto = document.getElementById("tancarSidebar");

        boto.addEventListener("click",function(){


            document.getElementById("sidebar").classList.add("invisible");

            document.getElementById("sidebar").classList.remove("col-3");
            document.getElementById("sidebar").classList.add("col-0");


        }, false); */
</script>

</html>
