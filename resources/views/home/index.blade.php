@include('home.layout.head')
@include('home.layout.header')
<!-- Banner Section start here -->
<section class="banner-section">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-thumb">
                            <img src="{{ asset('home') }}/assets/images/banner/01.png" alt="Banner-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-content align-middle">
                            <h1><span class="">And Allah Invites To <br class="d-none d-lg-block">
                                    The </span>Home Of Peace</h1>
                            <p>The most beloved actions to Allah are those performed consistently, even if they are
                                few</p>
                            <a href="{{ route('home.contact') }}" class="lab-btn mt-3">Hubungi Kami <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section end here -->

<!-- About section start here -->
<section class="about-section padding-tb shape-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-content">
                            <div class="header-title text-start m-0">
                                <h5>About Our History</h5>
                                <h2 class="mb-0">Islamic Center For Muslims To
                                    Achieve Spiritual Goals</h2>
                            </div>
                            <h5 class="my-4">Our Promise To Uphold The Trust Placed.</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi molestias culpa
                                reprehenderit delectus, ullam harum, voluptatum numquam ati nesciunt odit quis
                                corrupti magni quam consequatur sint ipsum tecto exercitationem, illo quisquam.
                                Reprehenderit ut placeat cum adantium nam magnam blanditiis sequi modi! Nesciunt,
                                repudiandae eos eniam quod maxime corrupti eligendi ea in animi.</p>
                            <a href="#" class="lab-btn mt-4">Ask About Islam <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <div class="img-grp">
                                <div class="about-circle-wrapper">
                                    <div class="about-circle-2"></div>
                                    <div class="about-circle"></div>
                                </div>
                                <div class="about-fg-img">
                                    <img src="{{ asset('home') }}/assets/images/about/02.png" alt="about-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About section end here -->

<!-- Feature Section Start Here -->
<section class="feature-section bg-ash padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item text-xs-center">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="{{ asset('home') }}/assets/images/feature/01.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>Qur'an</h5>
                            <p>Kegiatan Tadarus Al-Quran yang dilakukan berkelompok atau sendiri.
                            </p>
                            <a href="{{ route('home.quran') }}" class="text-btn">Belajar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="{{ asset('home') }}/assets/images/feature/02.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>Harakat</h5>
                            <p>Belajar memahami tanda baca dan menentukan panjang pendek dalam membaca Al-Quran
                            </p>
                            <a href="#" class="text-btn">Belajar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="{{ asset('home') }}/assets/images/feature/03.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>Tanwin</h5>
                            <p>Belajar memahami tanda baca Harakat.
                            </p>
                            <a href="#" class="text-btn">Belajar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="{{ asset('home') }}/assets/images/feature/04.png" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>Hijaiyah</h5>
                            <p>Belajar memahami beberapa huruf abjad yang berjumlah 30 huruf.
                            </p>
                            <a href="{{ route('home.hijaiyah') }}" class="text-btn">Belajar Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End Here -->

<!-- Faith section start here -->
<section class="faith-section padding-tb shape-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h5>The Pillars of Islam</h5>
                    <h2>Ethical And Moral Beliefs That Guides
                        To The Straight Path!</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="faith-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                            aria-labelledby="sahadah-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('home') }}/assets/images/faith/01.png" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Shahadah <span>(Faith)</span> </h4>
                                        <p>Syahadat diucapkan oleh seorang muslim sebagai bukti keyakinan bahwa Allah SWT sebagai Tuhan dan Muhammad SAW 
                                        sebagai utusan Allah. Lafadz bacaan dua kalimat Syahadat : "a??hadu ??an l?? ??il??ha ??illa -ll??hu, wa-??a??hadu ??anna mu???ammadan ras??lu-ll??h"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('home') }}/assets/images/faith/02.png" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Salaah <span>(Prayer)</span> </h4>
                                        <p>Setiap Muslim harus berdoa lima kali sehari: pagi, siang, sore (setelah matahari terbenam 
                                        dan sepertiga malam). Sholat merupakan ibadah pokok dalam Islam bahkan disebutkan dalam Al-Quran bahwa Sholat tiang agama.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('home') }}/assets/images/faith/03.png" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Sawm <span>(Fasting)</span> </h4>
                                        <p>Puasa merupakan beribadah kepada Allah SWT dengan menahan diri dari makan, minum, menahan hawa nafsu, dan hal lain 
                                        yang bisa membatalkan. Puasa dimulai dari awal terbit fajar hingga terbenamnya matahari. Puasa dilakukan selama 29-30 hari.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('home') }}/assets/images/faith/04.png" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Zakat <span>(Almsgiving)</span> </h4>
                                        <p>Zakat hukumnya wajib bagi yang mampu membayarnya. Hal ini sebagaimana firman Allah SWT dalam 
                                        surat Al-Baqarah ayat 43. <br />

                                        Zakat dikeluarkan oleh wajib pajak (muzakki) yang kemudian akan diberikan kepada orang yang 
                                        berhak menerimanya.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('home') }}/assets/images/faith/05.png" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Hajj <span>(Pilgrimage)</span> </h4>
                                        <p>Haji merupakan rukun Islam kelima yakni menunaikan ibadah Haji sifatnya wajib bagi mampu yang 
                                        dilakukan setidaknya sekali seumur hidup, sebagaimana firman Allah SWT dalam surat Ali 'Imran 
                                        ayat 97. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                <img src="{{ asset('home') }}/assets/images/faith/faith-icons/01.png" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                aria-controls="salah-tab" aria-selected="false">
                                <img src="{{ asset('home') }}/assets/images/faith/faith-icons/02.png" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                aria-controls="sawm-tab" aria-selected="false">
                                <img src="{{ asset('home') }}/assets/images/faith/faith-icons/03.png" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                aria-controls="zakat-tab" aria-selected="false">
                                <img src="{{ asset('home') }}/assets/images/faith/faith-icons/04.png" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                aria-controls="hajj-tab" aria-selected="false">
                                <img src="{{ asset('home') }}/assets/images/faith/faith-icons/05.png" alt="faith-icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faith section end here -->

<!-- Fitur Section start Here -->
<section class="fitur-section py-5 me-feature">
    <div class="container">
        <div class="section-top-border pb-0">
            <div class="learning-member_text mb-30">
                <h5>Aplikasi</h5>
                <h2>Fitur Aplikasi</h2>
            </div>
            <div class="row">
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon al-quran.png" alt="Al-Quran" style="width:100%;">
                    <p class="mt-4">Al-Quran</p>
                </div>
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon jadwal solat.png" alt="Jadwal Sholat" style="width:100%;">
                    <p class="mt-4">Jadwal Sholat</p>
                </div>
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon doa harian.png" alt="Bacaan Doa Harian" style="width:100%;">
                    <p class="mt-4">Doa Harian</p>
                </div>
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon masjid terdekat.png" alt="Al-Quran" style="width:100%;">
                    <p class="mt-4">Setor Hafalan</p>
                </div>
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon masjid terdekat.png" alt="Al-Quran" style="width:100%;">
                    <p class="mt-4">Belajar Dzikir</p>
                </div>
                <div class="col-md-2 col-4 px-5 py-1 text-center me-feature-icon">
                    <img src="{{ asset('home') }}/assets/images/fitur/icon masjid terdekat.png" alt="Al-Quran" style="width:100%;">
                    <p class="mt-4">Masjid Terdekat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fitur section end here -->

<!-- Qoute Section start Here -->
<div class="qoute-section padding-tb">
    <div class="qoute-section-wrapper">
        <div class="qoute-overlay"></div>
        <div class="container">
            <div class="qoute-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="lab-item qoute-item">
                            <div class="lab-inner d-flex align-items-center">
                                <div class="lab-thumb">
                                    <span>Quote From
                                        Prophat</span>
                                    <i class="icofont-quote-left"></i>
                                </div>
                                <div class="lab-content">
                                    <blockquote class="blockquote">
                                        <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You
                                                To Carry A Load Of Firewood On His Own Back Than To
                                                Beg From Someone Else"</span> </p>
                                        <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter
                                            59, hadith 540
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Qoute Section end Here -->
@include('home.layout.footer')
