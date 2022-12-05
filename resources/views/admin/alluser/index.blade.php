@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                    <h5 class="mb-0 pb-1 text-decoration-underline">Daftar User</h5>
                </div>
                @include('home.notif.index')
                <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-1">
                    @foreach ($user as $u)

                    <div class="col">
                        <div class="card card-body">
                            <div class="d-flex mb-4 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('admin/themesbrand.com/adhy/html/default/assets/images/users') }}/{{ $u->avatar }}" alt="" class="avatar-sm rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <h5 class="card-title mb-1">{{ $u->name }}</h5>
                                    <p class="text-muted mb-0">{{ $u->email }}</p>
                                </div>
                            </div>
                            <h6 class="mb-1">{{ $u->jenis_kelamin }}</h6>
                            <p class="card-text text-muted">{{ $u->nohp }}</p>
                            {{-- <a href="javascript:void(0)" class="btn btn-primary btn-sm">Lihat dan Ubah</a> --}}
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editInfo{{ $u->id }}">
                                                    <i class="ri-edit-box-line align-bottom"></i> Ubah Password
                                                </button>
                                                @include('admin.alluser.modal.detail')
                        </div>
                    </div>
                    @endforeach
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.layout.footer')
