@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow" style="border-radius: 12px;">
                <i class="fas fa-download fa-sm text-white"></i> Download
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Welcome Message -->
            <div class="col-xl-12 col-md-10 mb-4">
                <div class="card h-100 py-3 alert-info" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col ml-4">
                                <h4 class="font-weight-bold text-primary">Selamat Datang!</h4>
                                <p class="text-dark mb-0">Hi, <b>{{ $name }}</b><br>Selamat datang di situs web kami! Kami sangat senang Anda berkunjung. Silakan luangkan waktu Anda untuk menjelajahi berbagai fitur dan informasi yang telah kami sediakan. Kami berharap situs ini dapat memberikan Anda pengalaman yang menyenangkan dan informatif. Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami. Kami siap membantu dan menjawab setiap pertanyaan yang Anda miliki. Terima kasih telah berkunjung, dan selamat menikmati!.</p>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('images/taco1.jpg') }}" alt="Welcome Image" height="150" width="150" class="mr-4 rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Income Card Example -->
          

            <!-- History Card Example -->
          

            <!-- Menu Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2" style="border-radius: 20px;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <div class="text-xs font-weight-bold text-warning text-uppercase">Menu</div>
                                <a href="{{ route('menu.index') }}" class="btn btn-primary">See Menu</a>
                            </div>
                            <img src="{{ asset('images/pizza.jpeg') }}" alt="menu" height="50" width="50">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header alert-warning">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary shadow" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger shadow" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
