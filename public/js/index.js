
// Hover al pasar per damunt de l'imatge es reprodueix el gif, i al sortir retorna a la seva posicio original.


let projecte1 = document.getElementById("projecte1");

projecte1.addEventListener("mouseover", function(){
    projecte1.src="img/Grabacio1.gif";
}
, false);

projecte1.addEventListener("mouseout", function(){
    projecte1.src="img/Grabacio1.jpg";
}
, false);

let projecte2 = document.getElementById("projecte2");

projecte2.addEventListener("mouseover", function(){
    projecte2.src="img/Grabacio2.gif";
}
, false);

projecte2.addEventListener("mouseout", function(){
projecte2.src= "img/Grabacio2.jpg";
}
, false);

let projecte3 = document.getElementById("projecte3");

projecte3.addEventListener("mouseover", function(){
projecte3.src= "img/Grabacio3.gif";
}
, false);

projecte3.addEventListener("mouseout", function(){
projecte3.src= "img/Grabacio3.jpg";
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


function iniciar()
{
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

    medio.addEventListener("play");

}


    window.addEventListener('load', iniciar, false);

        video.addEventListener("timeupdate", function(){

            let modalInicial = new bootstrap.Modal(document.getElementById('modalInicio'), {
                keyboard: false
            });
            let modalVolver = new bootstrap.Modal(document.getElementById('modalVolver'), {
                keyboard: false
            });



        switch (true) {
            case (this.currentTime > 18 && this.currentTime < 19):

                modalInicial.toggle();
                this.pause();
                this.controls = false;

            break;

                case (this.currentTime > 39 && this.currentTime < 40):
                case (this.currentTime > 61 && this.currentTime < 62):
                case (this.ended):
                    modalVolver.toggle();
                    this.pause();
                    this.controls = false;

                    document.getElementById("opcionSeguir").addEventListener("click", function(){
                        modalVolver.hide();
                        modalInicial.toggle();

                    },false);

                break;


            default:
                break;
        }





    /*
            document.getElementById("opcionVolver").addEventListener("click", function(){

                location.href='../../frontend/games.php'

            },false); */




        document.getElementById("opcion1").addEventListener("click", function(){
                modalInicial.hide();
                video.currentTime = 22;
                video.play();
            },false);
            document.getElementById("opcion2").addEventListener("click", function(){
                modalInicial.hide();
                video.currentTime = 43;
                video.play();
            },false);
            document.getElementById("opcion3").addEventListener("click", function(){
                modalInicial.hide();
                video.currentTime = 66;
                video.play();
            },false);

        })
