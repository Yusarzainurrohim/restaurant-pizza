@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Users</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" style="border-radius: 10px;"><i class="fas fa-download fa-sm text-white"></i> Download</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Welcome Message -->
                <div class="col-xl-12 col-md-10 mb-4">
                <div class="card h-100 py-2 alert-success" style="border-radius: 50px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col ml-5">
                        <div class="h4 font-weight-bold text-success text-uppercase mb-1">Users</div>
                        <div class="mb-0 font-weight-bold text-gray">Hi, <b>{{ session('name') }}</b><br> This is Users Page <br>
                        Data yang ditambahkan akan muncul pada tabel di bawah</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users mr-5" style="font-size: 70px;"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Total Income Card Example -->
                <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-success shadow h-100 py-2" style="border-radius: 15px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Cashier Users</div>
                        <div class="h5 pt-3 font-weight-bold text-success">100</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Users Card Example -->
                <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-primary shadow h-100 py-2" style="border-radius: 15px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admin Users</div>
                        <div class="h5 pt-3 font-weight-bold text-primary">200</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-primary"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- History Card Example -->
                <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-danger shadow h-100 py-2" style="border-radius: 15px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Owner Users</div>
                        <div class="h5 pt-3 font-weight-bold text-danger">200</div>                        
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-danger"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Menu Card Example -->
                <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-warning shadow h-100 py-2" style="border-radius: 15px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Menu</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                            <button class="btn btn-warning mt-2 rounded-5">See Menu</button>
                            </div>
                        </div>
                        </div>
                        <div class="col-auto">
                        <img src="{{ asset('images/mcd.png') }}" alt="menu" height="50" width="50">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
            <!-- Add Users -->
            <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $user->phone_number }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                </form>
                </div>
            </div>
            </div>
            </div>
            <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header alert-danger">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body alert-danger">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer alert-danger">
                <button class="btn btn-danger shadow" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-success shadow" href="{{ route('logout') }}">Logout</a>
            </div>
            </div>
        </div>
    </div>
@endsection
