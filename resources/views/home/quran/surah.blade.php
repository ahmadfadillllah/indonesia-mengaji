@include('home.layout.head')
@include('home.layout.header')
<!-- Page Header Section Start Here -->
<section class="page-header bg_img padding-tb">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">{{ config('app.name') }}</h4>
            <ul class="lab-ul">
                <li><a href="index.html">Home</a></li>
                <li><a class="active">Quran</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->
<!-- Blog Section Start Here -->
<div class="blog-section blog-page padding-tb aside-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-12 col-md-12 col-12">
                    <aside class="ps-lg-4 mt-5 mt-lg-0 pt-1 pt-lg-0">
                        <div class="widget widget-category">
                            <div class="widget-header">
                                <audio controls style="float: right">
                                    <source src="{{ $surah['audio'] }}" type="audio/mpeg">
                                    Browsermu tidak mendukung tag audio, upgrade donk!
                                </audio>
                                <h5>{{ $surah['nama_latin'] }}</h5>

                            </div>
                            <ul class="lab-ul widget-wrapper list-bg-none">
                                @foreach ($surah['ayat'] as $s)
                                <li>
                                    <a href="javascript:void(0);" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>{{ $s['idn'] }}</span><p style="float: left">{{ $s['ar'] }}</p><span>{{ $s['nomor'] }}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section ENding Here -->


@include('home.layout.footer')
