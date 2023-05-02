<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jazlyn's Personal Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

    <!--==================== UNICONS ====================-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>

  <link rel="stylesheet" href="resources/css/app.css">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('import/assets/img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Jazlyn Latif</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#postnotes" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Post-Notes</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Jazlyn Jan Keyla Latif</h1>
      <p>I'm a <span class="typed" data-typed-items="Computer Science Student, Programmer, Software Engineer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p> I am currently a Computer Science student in Bina Nusantara University. The ideal future job for me is a Software Engineer. </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('import/assets/img/profile-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Learn More About Me!</h3>
            <p class="fst-italic">
              It is a pleasure to have capture your attention! Here are few things you can know about me,
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>26 February 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Institute:</strong> <span>Bina Nusantara University Malang</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 81226444120</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Semarang, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Undergraduate</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>jazlyn.latif@binus.ac.id</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              I have been interested in Computer Science ever since i was in Middle School. There was a class called ICT. There, the teacher thought us HTML.
              It was such a memorable memory as it was my first introduction towards Computer Science. I find the process of problem solving really interesting
              and fun. It made me feel very accomplised when i finished my project. By this motivation, I am hoping to succeed as a A
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4>Jazlyn Latif</h4>
              <p><em>A dedicated student</em></p>
              <ul>
                <li>Tamansari Hills , Semarang</li>
                <li>081 226 444 120</li>
                <li>jazlyn.latif@binus.ac.id</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Senior High School &amp;IPA</h4>
              <h5>2019 - 2021</h5>
              <p><em>SMA Islam Al Azhar 9 Yk </em></p>
            </div>
            <div class="resume-item">
              <h4>Undergraduate &amp; Computer Science</h4>
              <h5>2021 - now</h5>
              <p><em>Universitas Bina Nusantara</em></p>
            </div>
          </div>
    
        </div>

      </div>
    </section><!-- End Resume Section -->

    <section id="postnotes" class="postnotes section-bg">
      <div class="section-title">
        <h2>Post-Notes</h2>
        <p> Write me a note!</p>
      </div>
      <div class="table">
          <div class="table-filter">
              <div>
                  <ul class="table-filter-list">
                      <li>
                          <p class="table-filter-link link-active">All</p>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="table-search">   
              <div>
                  <button class="search-select">
                     Search Notes
                  </button>
                  <span class="search-select-arrow">
                      <i class="fas fa-caret-down"></i>
                  </span>
              </div>
              <div class="relative">
                  <input class="search-input" type="text" name="search" placeholder="Search notes.." value="{{ request('search') }}">
              </div>
          </div>
          <div class="table-product-head">
              <p>Image</p>
              <p>Name</p>
              <p>Category</p>
              <p>Theme</p>
              <p>Actions</p>
          </div>
          <div class="table-product-body">
              <img src="1.jpg"/>
              <p> Notes title</p>
              <p>Category</p>
              <p>Theme</p>
              <div>     
                  <button class="btn btn-success" >
                      <i class="fas fa-pencil-alt" ></i> 
                  </button>
                  <button class="btn btn-danger" >
                      <i class="far fa-trash-alt"></i>
                  </button>
              </div>
          </div>
          <div class="table-paginate">
              <div class="pagination">
                  <a href="#" disabled>&laquo;</a>
                  <a class="active-page">1</a>
                  <a>2</a>
                  <a>3</a>
                  <a href="#">&raquo;</a>
              </div>
          </div>
      </div>
  </section>
  <section>
      <div class="titlebar">
          <h1>Add Notes</h1>
          <button>Save</button>
      </div>
      <div class="card">
         <div>
              <label>Name</label>
              <input type="text" >
              <label>Description (optional)</label>
              <textarea cols="10" rows="5" ></textarea>
              <label>Add Image</label>
              <img src="" alt="" class="img-product" />
              <input type="file" >
          </div>
         <div>
              <label>Category</label>
              <select  name="" id="" >
                  <option value="" >Email Subscription</option>
              </select>
              <hr>
              <label>Theme</label>
              <input type="text" class="input" >
              <hr>
              <label>Author</label>
              <input type="text" class="input" >
         </div>
      </div>
      <div class="titlebar">
          <h1></h1>
          <button>Save</button>
      </div>
  </section>
  <section>
      <div class="titlebar">
          <h1>Edit Notes</h1>
          <button>Save</button>
      </div>
      <div class="card">
         <div>
              <label>Name</label>
              <input type="text" >
              <label>Description (optional)</label>
              <textarea cols="10" rows="5" ></textarea>
              <label>Add Image</label>
              <img src="1.jpg" alt="" class="img-product" />
              <input type="file" >
          </div>
         <div>
              <label>Category</label>
              <select  name="" id="" >
                  <option value="" >Email Subscription</option>
              </select>
              <hr>
              <label>Theme</label>
              <input type="text" class="input" >
              <hr>
              <label>Author</label>
              <input type="text" class="input" >
         </div>
      </div>
      <div class="titlebar">
          <h1></h1>
          <button>Save</button>
      </div>
  </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>

</html>