<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Web Librerias</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li > <a href="{{route('index')}}">Home</a> </li>
                                 <li><a href="{{route('books')}}">Books</a></li>
                                 <li class="active"><a href="{{route('library')}}">Library</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Librarys Gandhi</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Library -->
      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <span>Navega en todas nuestras opciones de librerias que te ofrecemos y visita la que mas te guste y mejor te convenga</span> 
                  </div>
               </div>
            </div>
         </div>

      <div class="col-md-10 offset-md-1">
      <div class="card-group">
      <div class="card">
         <img src="images/CDMX - Oasis.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">CDMX - Oasis</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            CDMX - Oasis
            Av. Miguel Angel de Quevedo #222,
            Romero de Terreros , Coyoacan, Ciudad de México.
            Coyoacan, Ciudad de México,
            México
            04319
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Oasis/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>

      <div class="card">
         <img src="images/Edo de Mex - Cosmopol.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Edo de Mex - Cosmopol</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Edo de Mex - Cosmopol
            Vía José Lopez Portillo (Plaza Cosmopol) #1, Locales E-202, E-203, E-204,
            San Francisco Coacalco.
            Coacalco, Estado de México,
            México
            55700
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Coacalco/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      <div class="card">
         <img src="images/Metepec - Town Square.PNG" class="card-img-top" alt="#">
      <div class="card-body">
      <h5 class="card-title">Metepec - Town Square</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Metepec - Town Square
            Avenida Ignacio Comonfort #1100 Norte, La Providencia, Metepec, México .
            Metepec, Estado de México,
            México
            52177
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Metepec/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      </div>
      </div>   

      <div class="col-md-10 offset-md-1">
      <div class="card-group">
      <div class="card">
         <img src="images/Arboledas.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Arboledas</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Arboledas
            Calz. de los Jinetes #35, Las Arboledas.
            Tlalnepantla, Estado de México, Estado de México
            México
            54026
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Arboledas/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>

      <div class="card">
         <img src="images/Toluca.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Toluca</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Toluca
            Avenida General Venustiano Carranza esquina Dr. Andrés Benavides #701,
            El Ciprés , Toluca, México.
            Toluca, Estado de México
            México
            50120
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
      </div>
      </div>
      <div class="card">
         <img src="images/Las Antenas.PNG" class="card-img-top" alt="#">
      <div class="card-body">
      <h5 class="card-title">Las Antenas</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Las Antenas
            Plaza Las Antenas. Local L50 Avenida Periférico #3278,
            Col.Esperanza,
            ztapalapa, Ciudad de México,
            México
            09910
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
      </div>
      </div>
      </div>
      </div>  
      
      <div class="col-md-10 offset-md-1">
      <div class="card-group">
      <div class="card">
         <img src="images/Cuernavaca - Teopanzolco.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Cuernavaca - Teopanzolco</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Cuernavaca - Teopanzolco
            Av.Teopanzolco #401
            Reforma
            Cuernavaca, Morelos
            México
            62260
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Cuernavaca_re/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>

      <div class="card">
         <img src="images/Monterrey - San Pedro.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Monterrey - San Pedro</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Monterrey - San Pedro
            Fashion Drive. Av. Diego Rivera #1000
            Zona San Agustín
            San Pedro Garza García, Nuevo León
            México
            66278
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Monterrey_Fashion/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      <div class="card">
         <img src="images/Monterrey - La Rioja, Plaza Esfera.PNG" class="card-img-top" alt="#">
      <div class="card-body">
      <h5 class="card-title">Monterrey - La Rioja, Plaza Esfera</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Monterrey - La Rioja, Plaza Esfera
            Plaza Esfera Fashion Hall Av. La Rioja #245
            Monterrey, Nuevo León
            México
            64985
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Monterrey_Rioja/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      </div>
      </div>

      <div class="col-md-10 offset-md-1">
      <div class="card-group">
      <div class="card">
         <img src="images/Guadalajara - Centro.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Guadalajara - Centro</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Guadalajara - Centro
            López Cotilla #1567, Col. Lafayette Sector Juárez
            Guadalajara, Jalisco
            México
            44140
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Guadalajara_Centro_re/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>

      <div class="card">
         <img src="images/Guadalajara - Puerta de Hierro.PNG" class="card-img-top" alt="#">
      <div class="card-body">
         <h5 class="card-title">Guadalajara - Puerta de Hierro</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Guadalajara - Puerta de Hierro
            Av. de la Patria #2052,
            Santa Isabel
            Zapopan, Jalisco
            México
            45110
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Guadalajara_PuertaH/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      <div class="card">
         <img src="images/CDMX - Universidad Siete Seis Siete.PNG" class="card-img-top" alt="#">
      <div class="card-body">
      <h5 class="card-title">Guadalajara - Aeropuerto</h5>
         <p class="card-text">
         <b>Dirección:</b><br>
            Guadalajara - Aeropuerto
            Carretera Guadalajara-Chapala Km 17.5 #Local 13,
            Aeropuerto Internacional de Guadalajara
            Tlajomulco de Zuñiga, Jalisco
            México
            45659
         </p>
         <br>
         <a href="{{route('detalles')}}" class="btn btn-primary">Ver detalles</a>
         <a href="https://gandhi-recorridos-virtuales.s3.amazonaws.com/Guadalajara_Aeropuerto_re/index.htm" class="btn btn-primary">Vista virtual</a>
      </div>
      </div>
      </div>
      </div>
<br>
      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="{{route('library')}}">1</a></li>
    <li class="page-item"><a class="page-link" href="{{route('library2')}}">2</a></li>
    <li class="page-item"><a class="page-link" href="{{route('library3')}}">3</a></li>
    <li class="page-item"><a class="page-link" href="{{route('library4')}}">4</a></li>
  </ul>
</nav>
         
      </div>
      <!-- end Library -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>