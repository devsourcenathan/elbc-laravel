@extends('partials.main')

@section('content')

<div class="container-fluid">
    <div class="portfolio-bg row text-light">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="d-flex justify-content-between">
          <div>
            <h1 class="text-light mt-5 ms-5">Nos Réalisations</h1>
            <hr class="hr ms-5" style="width: 100px;">
          </div>
          <div class="d-flex mt-5 justify-content-center">
            <a href="../" class="text-light fw-bold me-3">Accueil</a>
            <div class="vr" style="height: 30px;"></div>
            <a class="ms-3 text-light me-5" style="text-decoration: none;">Nos réalisations</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="bg-light" id="portfolio" style="padding-top: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="intro">
            <h6>ICI,</h6>
            <h1>Figures tous les projets réalisés par catégories de formations</h1>
            <p class="mx-auto">Nous nous engageons à suivre nos apprenants après leur formation pour les aider à s'insérer dans la société</p>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: -70px;">
        <div class="col-md-12">
          <!-- ======= Portfolio Section ======= -->
          <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
  
              <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Tout</li>
                <li data-filter=".filter-app">Education</li>
                <li data-filter=".filter-card">Formation</li>
                <li data-filter=".filter-web">Sortie</li>
              </ul>
  
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-img"><img src="../img/realisation/savon.jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="../img/realisation/savon.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.27 (2).jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.27 (2).jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.27.jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.27.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (1).jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (1).jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (2).jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (2).jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (3).jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28 (3).jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28.jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.28.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.29.jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="../img/realisation/WhatsApp Image 2022-12-02 at 10.40.29.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                  <div class="portfolio-img"><img src="../img/realisation/images.jpeg" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="../img/realisation/images.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
  
              </div>
  
            </div>
          </section>
          <!-- End Portfolio Section -->
        </div>
      </div>
    </div>
  </section>

@endsection