@include('admin.layout.head')
@include('admin.layout.header')
@include('admin.layout.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Huruf Hijaiyah</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Huruf Hijaiyah</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                    <button type="button" class="btn rounded-pill btn-secondary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#tambahHijaiyah">
                        Tambah Huruf
                    </button>
                </div>
                @include('admin.hijaiyah.modal.tambah')
                @include('home.notif.index')
                <div class="row">
                    @foreach ($hijaiyah as $h)
                    <div class="col-sm-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('admin/themesbrand.com/adhy/html/default/assets/gambar') }}/{{ $h->gambar }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-2">{{ $h->nama }}</h4>
                                <div class="text-end">
                                    <a href="#" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editHijaiyah{{ $h->id }}">Edit</a>
                                    <a href="{{ route('hijaiyah.destroy', $h->id) }}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
                                    @include('admin.hijaiyah.modal.edit')
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                    @endforeach
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.layout.footer')
