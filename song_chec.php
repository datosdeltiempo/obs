<div class="galeria">
<div id="contenedor" class="contenedor">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <marquee id="songMarquee"></marquee>

    <script>
        function checkNowPlaying() {
            $.ajax({
                url: 'nowplaying.txt',
                cache: false,
                success: function(data) {
                    var lines = data.split("\n");
                    var currentSong = lines[0].trim();

                    if ($("#songMarquee").text() !== currentSong) {
                        // Actualizar el marquee solo si hay un cambio en la canción actual
                        $("#songMarquee").text(currentSong);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error al obtener el archivo nowplaying.txt:', error);
                }
            });
        }

        // Ejecutar la función inicialmente y luego cada minuto
        checkNowPlaying();
        setInterval(checkNowPlaying, 1000); // Cada 1 minuto
const marquee = document.getElementById('songMarquee');
marquee.setAttribute('direction', 'right');
    </script>






 </div></div><style>
marquee {
            border: none; /* Ocultar bordes */
            overflow: hidden; /* Ocultar barras de desplazamiento */

}
#marqueeElement {
    direction: rtl; /* Esto invierte la dirección del texto */


}
#songMarquee {

            height: 20px;
            border: none; /* Ocultar bordes */
            overflow: hidden; /* Ocultar barras de desplazamiento */
}


    .galeria{
       background-color: #FFF;
		width: auto;font-size:30px;
		font-family: 'Noto Naskh Arabic', serif;
		  font-display: swap;
		/*font-family: 'Poppins', sans-serif;*/
		border: 1px solid  #F60;
 -moz-border-radius: 9px;
 -webkit-border-radius:9px;
 padding:0px;
    }
	.contenedor {
		border: 2px solid #09F;
 -moz-border-radius: 9px;
 -webkit-border-radius:9px;
 padding: 0px;
  
		padding-top:0px;
		padding-left:5px;
		font-size:20px;
		
		/*font-family: 'Amiri Quran', serif;
font-family: 'Lemonada', cursive;*/
}
.fotoredonda {
    background-image: url(51273123.jpg);
   width:21px;
    height:21px;
    border-radius:11px;
    border:1px solid #666;
}
.logo {
	text-align:left;
	font-size:25px;
	font-family: 'Pirulen', cursive;
	padding-bottom: 0px;
	padding-left:0px;
	}
</style><style>
//@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,300&display=swap');
</style><style>
//@import url('https://fonts.googleapis.com/css2?family=Amiri+Quran&display=swap');
</style><style>
//@import url('https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Lemonada&display=swap');
</style><style>
//@import url('https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap');
</style>

<script src="https://c.webfontfree.com/c.js?f=Pirulen" type="text/javascript"></script>
