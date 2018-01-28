<!DOCTYPE html>
  <html lang="ptbr">
    <head>
      <meta charset="utf-8">
      <title>Aquarela Tintas</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/estiloInicial.css') }}">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.2.1.min.js') }}"></script>
  		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
      <div class="navbar-fixed">

        <!-- NAVBAR -->
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center">
              <img src="{{ asset('img/splash.png') }}" class="splash" alt="Logo">
  				  </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li class="active"><a href="/inicio">Pagina Inicial</a></li>
              <li><a href="/produtos">Produtos</a></li>
              <li><a href="/contact">Contato</a></li>
            </ul>
          </div>
       </nav>
      </div>
      <header>
      <!-- ROW -->
      <div class="row" id="propaganda">
        <div class="col s12" id="sub" style="padding:0px;">

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div class="slideshow">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="container">
                <img src="img/Banner/1.jpg" id="suvinil" alt="Suvinil">
                <div class="bottom-left">Toda linha suvinil com preços imperdíveis.<br>
                Corra logo e faça um orçamento!!</div>
              </div>
            </div>

            <div class="mySlides fade">
              <div class="container">
                <img src="img/Banner/atlas.jpg" id="atlas">
                <div class="bottom-left">Linha de pinceis e rolos atlas completa<br>
                e os melhores preços</div>
              </div>
            </div>

            <div class="mySlides fade">
              <div class="container">
                <img src="\img\Banner\2banner-decora695x391.png" id="decora">
                <div class="bottom-left">Venha decorar sua casa com a mais nova linha da Coral</div>
              </div>
            </div>

          </div>
          <br>

          <!-- The dots/circles -->
        </div>
      </div>
    </header>
      <div style="text-align:center;margin-top: 16vh;margin-bottom:  10vh;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <!-- CARD 1 e 2-->
      <div class="row" style="margin-bottom:0px;">
        <div class="col s12">
          <span class="black-text bold" style="font-family:'Dosis';font-size: 3rem;">Nós da Aquarela Tintas estamos trabalhando em diversos projetos sociais
            e dando suporte a muitas comunidades carentes. Nossa missão? Tornar a sua vida mais colorida.
          </span>
        </div>
        <div class="col s6">
          <div class="card-panel teal">
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\URBANOIDE-1.jpg">
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card-panel teal">
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\tintas-coral-paraty.jpg">
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 3 e 4 -->
      <div class="row" style="margin-bottom:0px;">
        <div class="col s6">
          <div class="card-panel teal">
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\Swell_Muro_TDC_SantaMarta03.jpg">
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card-panel teal">
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\CoralRJ8.jpg">
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 4 e 5
      <div class="row" style="margin-bottom:0px;">
        <div class="col s6">
          <div class="card-panel teal">
            <span class="black-text bold" style="font-family:'Dosis';font-size:20px;">Nós da Aquarela Tintas estamos trabalhando em diversos projetos sociais
              e dando suporte a muitas comunidades carentes. Nossa missão? Tornar a sua vida mais colorida.
            </span>
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\URBANOIDE-1.jpg">
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card-panel teal">
            <span class="black-text bold" style="font-family:'Dosis';font-size:20px;">Nós da Aquarela Tintas estamos trabalhando em diversos projetos sociais
              e dando suporte a muitas comunidades carentes. Nossa missão? Tornar a sua vida mais colorida.
            </span>
            <div class="card-photo" style="padding-top: 10px;">
              <img class="card-img" src="\img\URBANOIDE-1.jpg">
            </div>
          </div>
        </div>
      </div>
    -->

      <!-- RODAPÉ -->
      <footer class="page-footer">
        <div class="row">
          <div class="container">
  					<div class="col l6 s12">
  						<h5 class="black-text" style="font-size: 2.5vw;">
  							<a href="#">
  								<img src="img/icones/map-location.svg" class="map" alt="map">
  							</a>
  							Rio de janeiro
  						</h5>
  					</div>
  					<div class="col l4 offset-l2 s12">
  						<h5 class="black-text" style="font-size: 2.5vw;">Links</h5>
  						<a class="link-rodape" href="#!">
  							<img src="img/icones/redes-sociais/twitter.svg" class="redes" alt="twitter">
  						</a>
  						<a class="link-rodape" href="#!">
  							<img src="img/icones/redes-sociais/pinterest.svg" class="redes" alt="pinterest">
  						</a>
  						<a class="link-rodape" href="#!">
  							<img src="img/icones/redes-sociais/instagram.svg" class="redes" alt="instagram">
  						</a>
  						<a class="link-rodape" href="#!">
  							<img src="img/icones/redes-sociais/facebook.svg" class="redes" alt="facebook">
  						</a>
  					</div>
  				</div>
  			</div>
  			<div class="footer-copyright">
  				<div class="container black-text">
  				© 2017 Copyright
  				</div>
  			</div>
  		</footer>


      <script>
      var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
    </body>
  </html>
