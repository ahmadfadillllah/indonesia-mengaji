@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="{{ asset('admin/themesbrand.com/adhy/html/default') }}/assets/images/profile-bg.jpg" alt=""
                    class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="{{ asset('admin/themesbrand.com/adhy/html/default/assets/images/users') }}/{{ Auth::user()->avatar }}"
                            alt="user-img" class="img-thumbnail rounded-circle" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ Auth::user()->name }}</h3>
                        <p class="text-white-75">{{ Auth::user()->role }}</p>
                        <div class="hstack text-white-50 gap-1">
                            <div class="me-2"><i
                                    class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{ Auth::user()->alamat }}</div>
                            <div>
                                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>{{ config('app.name') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                        class="d-none d-md-inline-block">Overview</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">
                                    <form action="{{ route('changepassword.update') }}" method="post">
                                        @csrf
                                        @include('home.notif.index')
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Ubah Password</h5>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="basiInput" class="form-label">Password Sekarang</label>
                                                            <input type="password" class="form-control" name="password_sekarang">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label for="labelInput" class="form-label">Password Baru</label>
                                                            <input type="password" class="form-control" name="password_baru">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                            <button type="submit" class="btn btn-soft-primary waves-effect waves-light">Ubah Password</button>
                                        </div><!-- end card -->
                                    </form>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.layout.footer')
