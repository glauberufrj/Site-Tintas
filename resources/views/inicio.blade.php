<!DOCTYPE html>
  <html lang="ptbr">
    <head>
      <meta charset="utf-8">
      <title>Aquarela Tintas</title>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.2.1.min.js') }}"></script>
  		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center">
              <img src="{{ asset('img/splash.png') }}" class="splash" alt="Logo">
  				  </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li class="active"><a href="/inicio">Pagina Inicial</a></li>
              <li><a href="/produtos">Produtos</a></li>
              <li><a href="/contato">Contato</a></li>
            </ul>
          </div>
       </nav>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/Suvinil_Tintas.png" style="padding-top: 30px;width:400px;">
            <div class="text">Toda a Linha Suvinil com preços incriveis</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/atlas.jpg" style="padding-top: 30px;width:400px;">
            <div class="text">Linha atlas completa</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/splash.png" style="padding-top: 30px;width:300px;">
            <div class="text">Venha você fazer parte desta equipe incrivel</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </div>

      <footer class="page-footer">
  			<div class="container">
  				<div class="row">
  					<div class="col l6 s12">
  						<h5 class="black-text">
  							<a href="#">
  								<img src="img/icones/map-location.svg" class="map" alt="map">
  							</a>
  							Rio de janeiro
  						</h5>
  					</div>
  					<div class="col l4 offset-l2 s12">
  						<h5 class="black-text">Links</h5>
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
