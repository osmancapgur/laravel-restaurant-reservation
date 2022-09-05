<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @foreach ($firma as $info)


  <title>{{$info->adi}}</title>
    @endforeach
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @foreach ($firma as $info)


  <link href="{{asset('uploads/restorant/'.$info->restorant_image)}}" rel="icon">
  <link href="{{asset('uploads/restorant/'.$info->restorant_image)}}" rel="apple-touch-icon">
    @endforeach

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
          @foreach ($firma as $info)
        <i class="bi bi-phone d-flex align-items-center"><span>{{$info->telefonu}}</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> {{$info->saatleri}}</span></i>
      @endforeach
      </div>


    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      @foreach ($firma as $info)
      <h1 class="logo me-auto me-lg-0"><a href="index.html">{{$info->adi}}</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Anasayfa</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#events">Etkinlikler</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#contact">İletişim</a></li>
        </ul>
      @endforeach
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Rezervasyon</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          @foreach ($firma as $info)


          <h1>Hoşgeldiniz <span>{{$info->adi}}</span></h1>
          <h2>{{$info->slogani}}</h2>
            @endforeach

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menülerimiz</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Rezervasyon</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menü</h2>
          <p>Lezzetli Menümüze Göz Atın</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
               @foreach ($turler as $user)

              <li data-filter=".filter-{{$user->title}}">{{$user->title}}</li>

              @endforeach
            </ul>
          </div>
        </div>
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($turler as $user)


          @foreach ($hepsi as $eat)
            @if ($user->title == $eat->turu )
          <div class="col-lg-6 menu-item filter-{{$user->title}}">
            <img src="{{asset('uploads/yemekler/'.$eat->yemek_image)}}" class="menu-img" alt="">
            <div class="menu-content">

              <a href="#">{{$eat->adi}}</a><span>{{$eat->fiyati.' TL'}}</span>
            </div>
            <div class="menu-ingredients">
              {{$eat->icerik}}
            </div>
          </div>
        @endif
          @endforeach
          @endforeach

          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Etkinlikler</h2>
          <p>Özel Etkinlikler Düzenleyin</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($etkinlik as $user)

            <div class="swiper-slide">
              <!-- ======= data çek ======= -->
              <div class="row event-item">



                <div class="col-lg-6">
                  <img src="{{asset('uploads/etkinlik/'.$user->etkinlik_image)}}" alt="CAPGUR-RESTORANT" class="img-fluid max-width: 100%;">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>{{$user->title}}</h3>
                  <div class="price">
                    <p><span>{{$user->price}} TL</span></p>
                  </div>
                  <p class="fst-italic">
                    {{$user->content}}
                  </p>

                  <p>
                      Daha fazlası için rezervasyon oluşturun
                  </p>
                </div>

              </div>

            </div><!-- End testimonial item -->
            @endforeach

        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Rezervasyon</h2>
          <p>Masa ve Tarihi Seçiniz</p>
        </div>

        <form action="{{route('rezervasyon')}}" method="post" role="form" class="a-form-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Mailiniz" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefonunuz" data-rule="phone" data-msg="Telefon numaranızı giriniz" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <select class="form-control" name="time" id="time">
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:00">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                                <option value="21:00">21:00</option>
                                <option value="21:30">21:30</option>
                                <option value="22:00">22:00</option>
                                <option value="22:30">22:30</option>
                                <option value="23:00">23:00</option>
                    </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="visitors" id="visitors" placeholder="Ziyaretçi Sayısı" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mesajınız"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Rezervasyon isteğiniz iletildi. Biz size email yada telefon ile rezervasyonunuzu onaylayacağız. Teşekkürler!</div>
          </div>
          <div class="text-center"><button type="submit">Rezervasyon Yap</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galeri</h2>
          <p>Restorantımızdan Fotoğraflar</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          @foreach ($galeri as $foto)


          <div class="col-lg-3 col-md-4 mx-auto" >
            <div class="gallery-item">
              <a href="{{asset('uploads/galeri/'.$foto->galeri_image)}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('uploads/galeri/'.$foto->galeri_image)}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
            @endforeach

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>İletişim</h2>
          <p>Bizimle İletişime Geçin</p>
        </div>
      </div>

      <div data-aos="fade-up">
        @foreach ($firma as $info)

        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb={{$info->key}}" frameborder="0" allowfullscreen></iframe>
          @endforeach
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                @foreach ($firma as $info)


                <h4>Konum:</h4>
                <p>{{$info->konumu}}</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Açık Saatler:</h4>
                <p>
                  {{$info->saatleri}}
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$info->maili}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon:</h4>
                <p>{{$info->telefonu}}</p>
              </div>
                @endforeach

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route("iletisim")}}" method="post" role="form" class="a-form-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Adresiniz" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Mesaj" required></textarea>
              </div>

              <div class="text-center"><button type="submit">Mesaj Gönder.</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>
