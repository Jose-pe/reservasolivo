<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<title>Il Olivo Restaurante</title>
<link rel="icon" type="image/png" href="favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="/css/olivo.css" rel="stylesheet">
<link href="/css/olivo_experiencias.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"  />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"  />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
     <a class="navbar-brand" href="#"> <img   class="img-fluid logo" src="/img-olivo/logo.png" alt="restaurant origen cusco logo"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link" href="#experiencias">Experiencias</a>
        <a class="nav-link" href="#galeria">Galería</a>
        <a class="nav-link" href="#">Reservas</a>
        <a class="nav-link" href="#link-footer">Contáctanos</a>
      </div>
       <div class="d-flex ms-auto">
         <a class="nav-link pe-2" href="#"> ES </a> / 
         <a class="nav-link ps-2" href="#"> EN </a>
     </div>
    </div>
  
  
  </div>
</nav>

<!-- HERO -->
<section class="hero-ultra">
  <!-- Capas -->
  <div class="hero-layer hero-bg"></div>
  <div class="hero-layer hero-overlay"></div>
  <div class="hero-layer hero-light"></div>

  <!-- Contenido -->
  <div class="hero-content text-center">
    <h1 class="hero-title">RESTAURANTE</h1>
    <h3 class="hero-subtitle mb-5"> I T A L O  -  P E R U A N O</h3>
    
    <a href="#" class="btn-reserva-main">RESERVA CON NOSOTROS</a>
  </div>
</section>
<section class="section text-center mt-5 mb-5">
  <div class="container pt-5 pb-5">
    <h2 class="mb-4 mt-3" data-aos="fade-down" data-aos-duration="1000"  data-aos-easing="ease-in-sine">Nosotros</h2>
    <p class="mx-auto" style="max-width:1800px;" data-aos="fade-up" data-aos-duration="1300"  data-aos-easing="ease-in-sine">
    Il Olivo es una propuesta gastronómica ítalo-peruana que celebra el encuentro entre dos culturas reconocidas por su pasión por la buena cocina. Inspirado en la tradición italiana y enriquecido con la diversidad de los insumos peruanos, el restaurante ofrece una experiencia donde la autenticidad, el sabor y la creatividad se unen en perfecta armonía.
    </p>
  </div>
</section>
<!-- ABOUT -->
<section class="section container-fluid">
  <div class="row align-items-center">
    <div class="col-md-6"  data-aos="zoom-in-right" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
        <div class="p-5">
             
      <p class="text-center">
        <h2 class="text-start mb-4">Gastronomía</h2>
       Detrás de cada experiencia en Il Olivo existe un equipo comprometido con la excelencia, la pasión por la gastronomía y el cuidado de cada detalle. La dedicación, creatividad y profesionalismo de nuestros chefs se reflejan en cada preparación, donde la técnica y la experiencia se unen para transformar ingredientes de calidad en platos memorables.
        </div>
        <div class="text-center">
      <button type="button" class="button-cartas pt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
         VER MENÚ
        </button>
      </div>
    </div>
    <div class="col-md-6 img-container"  data-aos="zoom-in-left"  data-aos-duration="1000"  data-aos-easing="ease-in-sine" id="imgsection">
      <div class="img-box">
        <img src="/img-olivo/section-2.png">
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2 -->
<section class="section container-fluid">
  <div class="row align-items-center flex-md-row-reverse">
    <div class="col-md-6" data-aos="zoom-in-left"  data-aos-duration="1000"  data-aos-easing="ease-in-sine">
        <div class="text-side p-5">
             
        <p class="text-center">
        El horno artesanal de Il Olivo representa el corazón de nuestra cocina y el respeto por las técnicas tradicionales italianas. Su fuego constante y su preparación cuidadosa permiten realzar los sabores, texturas y aromas que caracterizan cada creación, aportando autenticidad a nuestra propuesta gastronómica.
      </p>
       <p class="text-center">
        Más que una herramienta de cocina, es un símbolo de tradición, dedicación y pasión por los detalles, donde cada pizza y cada preparación adquieren el carácter único que define la experiencia Il Olivo.
      </p>
        </div>
     
    </div>
    <div class="col-md-6 img-container" data-aos="fade-right" data-aos-duration="1000"  data-aos-easing="ease-in-sine" id="imgsection">
      <div class="img-box">
        <img src="/img-olivo/horno_ilolivo.png">
        
      </div>
    </div>
  </div>
</section>

<section class="section container-fluid">
  <div class="row align-items-center">
    <div class="col-md-6"  data-aos="zoom-in-right" data-aos-duration="1000"  data-aos-easing="ease-in-sine">
        <div class="p-5">
             
      <p class="text-center">
        <h2 class="text-start mb-4">Propuesta</h2>
       En Il Olivo, cada preparación nace del respeto por la cocina y la búsqueda constante del equilibrio perfecto entre sabor y técnica, donde detrás de cada plato hay manos expertas, concentración y una pasión silenciosa que transforma ingredientes en momentos memorables; aquí la cocina no es solo un proceso, sino un lenguaje que expresa elegancia, detalle y autenticidad en cada servicio.
        </div>
     
    </div>
    <div class="col-md-6 img-container"  data-aos="zoom-in-left"  data-aos-duration="1000"  data-aos-easing="ease-in-sine" id="imgsection">
      <div class="img-box">
        <img src="/img-olivo/section-3.png">
        
      </div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="section container gallery separate-2" id="galeria">
    <section class="section text-center mt-5 mb-5" data-aos="fade-up"  data-aos-duration="1000" >
  <div class="container">
    <h2 class="mb-4 mt-3">Galería</h2> 
  </div>
</section>
  <div class="p-2 row g-3 gallery">
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-1.png"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-2.png"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="1500"><img src="/img-olivo/galeria-3.png"></div>
  </div>
   <div class="p-2 row g-3 gallery">
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-4.png"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-5.png"></div>
    <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000"><img src="/img-olivo/galeria-6.png"></div>
  </div>
</section>



<section class="container  px-0 mt-5" id="experiencias">
<p class="text-center">
  <div class="row">
    <div class="col-12 text-center">
        <button class="btn-reserva mb-4 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    EXPERIENCIAS
      <i class="bi bi-chevron-down"></i>
  </button>
    </div>

  </div>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body" id="background_experiencias">
   <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">01</div>
               <div class="icon-circle">
                    <i class="fas fa-utensils"></i>
                </div>
            </div>
            <div class="col-12 col-md">
                <h5 class="card-title">COOCKING CLASS</h5>
               
            </div>
        </div>
    </div>

    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">02</div>
                <div class="icon-circle">
                    <i class="fas fa-wine-bottle"></i>
                </div>
            </div>
            <div class="col-12 col-md">
                <h5 class="card-title">Wine Room 01</h5>
                <div class="row g-2">
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="fas fa-tags detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Costo</span>
                            <span class="detail-value">40 USD (por pax)</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="far fa-user detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Mínimo de personas</span>
                            <span class="detail-value">04 Pax</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="fas fa-user-group detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Máximo de personas</span>
                            <span class="detail-value">12 Pax</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="far fa-clock detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Anticipación</span>
                            <span class="detail-value">48 horas mínimo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">03</div>
                <div class="icon-circle">
                    <i class="fas fa-wine-glass-empty"></i>
                </div>
            </div>
            <div class="col-12 col-md">
                <h5 class="card-title">Wine Room 02</h5>
                <div class="row g-2">
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="fas fa-tags detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Costo</span>
                            <span class="detail-value">80 USD (por pax)</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="far fa-user detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Mínimo de personas</span>
                            <span class="detail-value">06 Pax</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="fas fa-user-group detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Máximo de personas</span>
                            <span class="detail-value">12 Pax</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 attr-col">
                        <i class="far fa-clock detail-icon"></i>
                        <div class="detail-text">
                            <span class="detail-label">Anticipación</span>
                            <span class="detail-value">48 horas mínimo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experience-card">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto d-flex align-items-center mb-3 mb-md-0 card-header-mobile">
                <div class="number-display">04</div>
                <div class="icon-circle">
                    <i class="fas fa-wine-bottle"></i>
                </div>
            </div>
            <div class="col-12 col-md">
                <h5 class="card-title">Wine Room 03</h5>
               
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-warning">Conoce más botoncrema</button>
   
    
    

</div>
  </div>
</div>
</section>

<!-- CTA -->
<section class="section text-center" id="experiencias">
  <div class="text-center mt-5 mb-4">
      <button type="button" class="button-cartas pt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
         VER MENÚ
        </button>
      </div>
  <h2 class="mb-3">Reserva tu experiencia</h2>
  <p class="mb-5">Un viaje gastronómico inolvidable</p>
  
 <a href="#" class="btn-reserva mb-4">RESERVAR AHORA</a>
 
</section>

<!-- FOOTER -->
<footer class="container-fluid  footer-catedral pb-4" id="link-footer">
    <div class="container footer-catedral py-4">
    <div class="row gy-4 mt-3">

    <!-- COLUMNA IZQUIERDA -->
    <div class="col-12 col-md-6 text-center text-md-start">
      <h5 class="fw-bold mb-2">IL OLIVO 2026 ©</h5>
      <p class="mb-2">Contáctanos: <a class="links" target="_blank" href="https://api.whatsapp.com/send?phone=946452405"> +51 946 452 405</a></p>

      <button class="btn-reserva mb-4">
        RESERVA CON NOSOTROS
      </button>
    
      <!-- Redes -->
      <div class="d-flex flex-column gap-2 align-items-center align-items-md-start">
        
      <a class="links d-flex align-items-center text-decoration-none text-dark" target="_blank" href="https://www.instagram.com/ilolivoristorante/">
          <i class="fa-brands fa-instagram fa-lg me-2"></i>
          <span>@ilolivoristorante</span>
        </a>
      </div>

      
    </div>

    <!-- COLUMNA DERECHA -->
     <div class="col-12 col-md-6 d-flex flex-column align-items-center align-self-md-center align-items-md-end">
      <ul class="list-unstyled mb-0">
       
        <li>
          <i class="fa-solid fa-plus me-2"></i>
          Libro de Reclamaciones
        </li>
      </ul>
    </div>

  </div>

  <!-- Línea inferior -->
 
    </div>
  
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script> AOS.init();</script>
<script>
window.addEventListener("scroll", function(){
  document.querySelector(".navbar").classList.toggle("scrolled", window.scrollY > 50);
});
</script>
<script>
window.addEventListener("scroll", function() {
  const scrollY = window.scrollY;
  const heroBg = document.querySelector(".hero-bg");

  if (heroBg) {
    heroBg.style.transform = `translateY(${scrollY * 0.4}px)`;
  }
});
</script>
</body>
</html>