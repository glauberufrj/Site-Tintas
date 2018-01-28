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
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center">
              <img src="{{ asset('img/splash.png') }}" class="splash" alt="Logo">
  				  </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
              <li><a href="/inicio">Pagina Inicial</a></li>
              <li><a href="/produtos">Produtos</a></li>
              <li class="active"><a href="/contact">Contato</a></li>
            </ul>
          </div>
       </nav>
      </div>
      <div class="row" id="texto">
        <div class="container">
         <h1 class="mb-2 text-center">Contact Us</h1>

	       @if(session('message'))
	       <div class='alert alert-success'>
           {{ session('message') }}
         </div>
         @endif

         <div class="col-12 col-md-6">
           <form class="form-horizontal" method="POST" action="/contact">
             {{ csrf_field() }}
             <div class="form-group">
               <label for="Name">Name: </label>
               <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
             </div>

             <div class="form-group">
               <label for="email">Email: </label>
               <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
             </div>

             <div class="form-group">
               <label for="message">message: </label>
               <textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
             </div>

             <div class="form-group">
               <button type="submit" class="btn btn-primary" value="Send">Send</button>
             </div>
           </form>
         </div>
       </div> <!-- /container -->
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
               <img src="img/icones/redes-sociais/pinterest.svg" class="redes" alt="pinterest"></a>
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
      </body>
     </html>
