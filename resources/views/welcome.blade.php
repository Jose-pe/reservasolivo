<!DOCTYPE html>
<html lang="es">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NVEYF040MZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-NVEYF040MZ');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IL OLIVO Restaurant</title>
    
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">

    <link rel="icon" type="image/png" href="favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/olivo.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" media="print" onload="this.media='all'">
    <link href="/css/olivo_experiencias.css" rel="stylesheet" media="print" onload="this.media='all'">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" media="print" onload="this.media='all'">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" media="print" onload="this.media='all'">
</head>
<style>
  .img-hover-container {
    overflow: hidden;
    position: relative;
    aspect-ratio: 3 / 4; /* Mantiene la proporción vertical similar a tu imagen */
  }

  .img-hover-container img {
    transition: transform 0.3s ease-in-out;
  }

  /* Efecto hover sencillo: escala la imagen un 5% */
  .img-hover-container:hover img {
    transform: scale(1.05);
  }
</style>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
     <a class="navbar navbar-brand ms-3" href="#"> 
         <img class="img-fluid logo" src="/img/logo-catedral.png" alt="restaurant origen cusco logo"  fetchpriority="high">
     </a>

    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-start text-lg-start">
        <a class="nav-link" href="#">Inicio</a>
        <a class="nav-link" id="link-galeria" href="#galeria">Galería</a>
        <a class="nav-link" id="link-galeria-mobile" href="#galeria-mobile">Galería</a>
        <a class="nav-link" href="{{route('reservas_comensales')}}">Reservas</a>
        <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ver Menú</a>
        <a class="nav-link" href="#contactanos">Contáctanos</a>    
      </div>   
      <div class="d-flex ms-auto justify-content-start justify-content-lg-end mt-3 me-3 mt-lg-0">
         <a class="nav-link pe-2" href="#"> ES </a> / 
         <a class="nav-link ps-2" href="/eng"> EN </a>
     </div>
    </div>  
</nav>

<section class="hero-ultra min-vh-100 d-flex align-items-center justify-content-center">
  <div class="hero-layer hero-bg" fetchpriority="high"></div>
  <div class="hero-layer hero-overlay"></div>
  <div class="hero-layer hero-light"></div>

  <div class="hero-content text-center">
    <h1 class="hero-title">RESTAURANTE</h1>
    <p class="hero-sub">ITALO - PERUANO</p>
    <a href="{{route('reservas_comensales')}}" class="btn-reserva-main">RESERVA CON NOSOTROS</a>
  </div>
</section>

<section class="section text-center mb-2" id="nosotros">
  <div class="container-fluid py-5 px-5">
    <h2 class="mb-4 mt-3" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine">Nosotros</h2>
    <p class="mx-auto" style="max-width:1800px;" data-aos="fade-up" data-aos-duration="1300" data-aos-easing="ease-in-sine">
       Il Olivo es una propuesta gastronómica ítalo-peruana que celebra el encuentro entre dos culturas reconocidas por su pasión por la buena cocina. Inspirado en la tradición italiana y enriquecido con la diversidad de los insumos peruanos, el restaurante ofrece una experiencia donde la autenticidad, el sabor y la creatividad se unen en perfecta armonía.
  </div>
</section>

<section class=" text-center mt-4 mb-5" id="reservas">
<button type="button" class="btn-reserva mt-4 pe-5 ps-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> VER MENÚ </button>
 
</div>
 
   
</section>

   

<section class="section container-fluid pt-5">
  <div class="row align-items-center">
    <div class="col-12 col-lg-6" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
       <div class="p-3 p-md-5">
          <h2 class="text-start mb-4" id=gastronomia-title>GASTRONOMÍA</h2>
          <p class="text-start">
          Detrás de cada experiencia en Il Olivo existe un equipo comprometido con la excelencia, la pasión por la gastronomía y el cuidado de cada detalle. La dedicación, creatividad y profesionalismo de nuestros chefs se reflejan en cada preparación, donde la técnica y la experiencia se unen para transformar ingredientes de calidad en platos memorables. </p>
           </div>
    </div>
    <div class="col-md-6 img-container" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-easing="ease-in-sine" id="imgsection">
      <div class="img-box">
        <img src="/img-olivo/section-2.webp" class="img-fluid w-100" alt="Origen Cusco" loading="lazy" width="800" height="533">
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="background_experiencias">
      <div class="modal-header">
        <h5 class="modal-title fw-bolder" id="staticBackdropLabel" style="color: #f5f5f5 !important; font-size: 1.5rem;">CARTAS Y MENÚ</h5>
        <button type="button" class="btn-close" style="background-color: rgba(255, 255, 255, 0.541) !important;" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <a target="_blank" href="/carta/carta_esp.pdf" class=" fw-bolder text-white "> <i class="fas fa-utensils"></i> VER CARTA DE MENÚ</a><br><br>
        <a target="_blank" href="/carta/carta_postres.pdf" class=" fw-bolder text-white "> <i class="bi bi-cake2-fill"></i> VER CARTA DE POSTRES</a><br><br>
        <a target="_blank" href="/carta/carta_vinos.pdf" class="fw-bolder text-white "> <i class="fas fa-wine-glass-empty"></i> VER CARTA DE VINOS</a><br><br>
        <a target="_blank" href="/carta/carta_bar.pdf" class=" fw-bolder text-white "> <i class="fas fa-wine-bottle"></i> VER CARTA DE BAR</a><br><br>
        <hr>
       

      </div>
       <div class="modal-header">
        <h5 class="modal-title fw-bolder" id="staticBackdropLabel" style="color: #f5f5f5 !important; font-size: 1.5rem;">EMENTA</h5> 
       </div>
           <div class="modal-body">
        <a target="_blank" href="/carta/carta_portu.pdf" class=" fw-bolder text-white "> <i class="fas fa-utensils"></i> VER CARDÁPIO</a><br><br>       

      </div>
       <div class="modal-footer">
        <button type="button" class="btn btn btn-light bt-lg" data-bs-dismiss="modal">C E R R A R</button>         
      </div>

      </div>
     
    </div>
  </div>


<section class="section container-fluid">
  <div class="row align-items-center flex-md-row-reverse" id="propuesta">
    <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
        <div class="p-5" id=text_propuesta>
            <h2 class="text-end mb-4 pe-4">PROPUESTA</h2>
            <p class="text-start" >
              Origen es una celebración de nuestras raíces, una propuesta gastronómica inspirada en la riqueza cultural, histórica y natural de nuestra tierra. Cada plato nace de la búsqueda constante de los sabores que nos definen, rescatando ingredientes ancestrales, tradiciones culinarias y conocimientos transmitidos de generación en generación.
            </p>
        </div>
    </div>
    <div class="col-md-6 img-container" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine" id="imgsection">
      <div class="img-box">
        <img src="/img-olivo/section-3.webp" class="img-fluid w-100" alt="Olivo Cusco" loading="lazy" width="800" height="533">
      </div>
    </div>
  </div>
</section>

<section class="section container gallery separate-2" id="galeria">
  <div class="section text-center mt-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <h2 class="mb-4 mt-3">NUESTRA GALERÍA</h2> 
    </div>
  </div>
  <div class="p-2 row g-3 gallery">
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-1.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-2.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-3.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
  </div>
  <div class="p-2 row g-3 gallery">
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-4.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-5.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-6.webp" alt="Il Olivo" loading="lazy" width="400" height="300"></div>
  </div>
</section>

<section id="galeria-mobile">
   <div class="section text-center" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <h2 class="mb-4 mt-3">NUESTRA GALERÍA</h2> 
    </div>
  </div>
<div id="carouselExampleAutoplaying" class="carousel slide m-2" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img-olivo/galeria-1.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>
    <div class="carousel-item">
      <img src="img-olivo/galeria-2.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>
    {{--<div class="carousel-item">
      <img src="img-olivo/galeria-3.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>--}}
     <div class="carousel-item">
      <img src="img-olivo/galeria-4.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>
     <div class="carousel-item">
      <img src="img-olivo/galeria-5.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>
     <div class="carousel-item">
      <img src="img-olivo/galeria-6.webp" class="d-block w-100" alt="Il Olivo Restaurant">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon"   aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<section class="container px-0 mt-5">
{{--<p class="text-center">
  <button class="btn-reserva text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
     NUESTRAS EXPERIENCIAS <i class="bi bi-chevron-down"></i>
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body" id="background_experiencias">
    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">01</div>
                <div class="icon-circle"><i class="fas fa-utensils"></i></div>
            </div>
            <div class="col-12 col-md text-center">
                <h5 class="card-title text-center">COOKING CLASS CEVICHE</h5>
            </div>
        </div>
    </div>

    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">02</div>
                <div class="icon-circle"><i class="fas fa-wine-glass-empty"></i></div>
            </div>
            <div class="col-12 col-md text-center">
                <h5 class="card-title text-center">MAKING PISCO SOUR</h5>
            </div>
        </div>
    </div>

    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">03</div>
                <div class="icon-circle"><i class="fas fa-utensils"></i></div>
            </div>
            <div class="col-12 col-md text-center">
                <h5 class="card-title text-center">COOKING CLASS CAUSA</h5>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-12 text-end mt-4">
            <a target="_blank" href="/portafolio-origen/Portafolio_origen.pdf" class="btn btn-warning btn-lg p-3" id="conoce-mas">Conoce más</a>
      </div>
    </div>
  </div>
</div>--}}
<div class="text-center mt-4">
  <button type="button" class="button-cartas pt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     VER MENÚ
  </button>
</div>
</section>

<section class="py-5">
  <div class="section text-center mt-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
      <h2 class="mb-4 mt-3">NUESTROS RECONOCIMIENTOS</h2> 
    </div>
  </div>
  <div class="container">
    <div class="row g-4 justify-content-center">
      
      <!-- Primera Imagen -->
      <div class="col-12 col-md-6 col-lg-5">
        <div class="card h-100 border-0 shadow-sm overflow-hidden">
          <div class="img-hover-container">
            <img src="/img-olivo/guru_pizza.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Recomendado Restaurant Guru Il Olivo">
          </div>
        </div>
      </div>

      <!-- Segunda Imagen -->
      <div class="col-12 col-md-6 col-lg-5">
        <div class="card h-100 border-0 shadow-sm overflow-hidden">
          <div class="img-hover-container">
            <img src="/img-olivo/guru_recomendado.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Recomendado Restaurant Guru Il Olivo">
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="text-center mt-5 mb-5" id="reservas">
  <h2 class="text-center mb-2" id="title-2">Reserva tu experiencia</h2>
  <p class="text-center mb-5">Un viaje gastronómico inolvidable</p>
  <a href="{{route('reservas_comensales')}}" class="btn-reserva">R E S E R V A R</a>
</section>



<footer class="container-fluid footer-catedral pb-3" id="contactanos">
    <div class="container footer-catedral py-4">
    <div class="row gy-4 mt-3">
        <div class="col-12 col-md-6 text-center text-md-start">
          <h5 class="fw-bold mb-2">IL OLIVO {{ now()->year }} ©</h5>
          <p class="mb-3">Contáctanos: <a class="links" target="_blank" href="https://api.whatsapp.com/send?phone=51946452405"> +51 946 452 405</a></p>
          <a href="{{route('reservas_comensales')}}" class="btn-reserva mt-2 mb-4">RESERVA CON NOSOTROS</a>
          <div class="d-flex flex-column gap-2 align-items-center align-items-md-start mt-4">
              <a class="links d-flex align-items-center text-decoration-none text-dark" target="_blank" href="https://www.instagram.com/ilolivoristorante/">
          <i class="fa-brands fa-instagram fa-lg me-2"></i>
          <span>@ilolivoristorante</span>
        </a>                  
          </div>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column align-items-center align-self-md-center align-items-md-end">
          <ul class="list-unstyled mb-0">
            <li><i class="fa-solid fa-plus me-2"></i>Libro de Reclamaciones</li>
          </ul>
        </div>
    </div>
    </div>
</footer>
<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Inicializar animaciones de forma eficiente
    if (typeof AOS !== 'undefined') {
        AOS.init({ once: true });
    }

    // Scroll Navbar optimizado
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function(){
        navbar.classList.toggle("scrolled", window.scrollY > 50);
    }, { passive: true });

    // Parallax del Hero optimizado con RequestAnimationFrame (Previene lag en móviles)
    let ticking = false;
    const heroBg = document.querySelector(".hero-bg");
    
    window.addEventListener("scroll", function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                if (heroBg) {
                    heroBg.style.transform = `translateY(${window.scrollY * 0.4}px)`;
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
});
</script>
</body>
</html>