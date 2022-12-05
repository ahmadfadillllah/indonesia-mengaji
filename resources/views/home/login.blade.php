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
                <li><a class="active">login</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Login Section Section Starts Here -->
<div class="login-section padding-tb">
    <div class=" container">
        <div class="account-wrapper">
            <h3 class="title">Login</h3>
            <form class="account-form" action="{{ route('login.post') }}" method="POSt">
                @csrf
                @include('home.notif.index')
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                        <div class="checkgroup">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <a href="#">Lupa Password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <button class="d-block lab-btn" type="submit"><span>Masuk</span></button>
                </div>
            </form>
            <div class="account-bottom">
                <span class="d-block cate pt-10">Belum punya akun? <a href="{{ route('register') }}"> Daftar</a></span>
            </div>
        </div>
    </div>
</div>
<!-- Login Section Section Ends Here -->
@include('home.layout.footer')
