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
                <li><a class="active">Hijaiyah</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Gallary section start here-->
<div class="gallery-section padding-tb">
    <div class="container">
        <ul class="filter-button-group lab-ul d-flex justify-content-center mb-4">
            <li class="filter-btn is-checked" data-filter=".hijaiyah">Daftar Huruf Hijaiyah<span class="filter-item-num">{{ $hijaiyah->count() }}</span>
        </ul>
        <div class="grid pb-15">
            @foreach ($hijaiyah as $h)
            <div class="grid-item hijaiyah">
                <div class="grid-inner">
                    <div class="grid-thumb">
                        <img src="{{ asset('admin/themesbrand.com/adhy/html/default/assets/gambar') }}/{{ $h->gambar }}" alt="gallery-img">
                    </div>
                    <div class="grid-content p-2">
                        <audio controls>
                            <source src="{{ asset('admin/themesbrand.com/adhy/html/default/assets/sound') }}/{{ $h->sound }}" type="audio/mpeg"><i class="icofont-expand"></i>
                        </audio>
                        <br>
                        <h5>{{ $h->nama }}</h5>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Gallary section end here-->
@include('home.layout.footer')
