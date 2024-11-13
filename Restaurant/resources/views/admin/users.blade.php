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
                <div class="card h-100 py-2 alert-danger" style="border-radius: 50px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col ml-5">
                        <div class="h4 font-weight-bold text-success text-uppercase mb-1">Users</div>
                        <div class="mb-0 font-weight-bold text-gray">Hi, <b>{{ $name }}</b><br>
                        The Users Page is intended for creating and checking cashier and admin accounts.<br>
                        Account data will be displayed in the table below,<br> 
                        and the add user form is used to register cashier or admin accounts.</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users mr-5" style="font-size: 70px;"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Jika Berhasil Mendaftarkan Akun Baru -->
                @if (session('success'))
                    <div class="alert alert-primary col-xl-12 col-md-10 mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-primary col-xl-12 col-md-10 mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Total Income Card Example -->
                <div class="col-xl-3 col-md-6 mb-5">
                <div class="card border-left-success shadow h-100 py-2" style="border-radius: 15px;">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Cashier Users</div>
                        <div class="h5 pt-3 font-weight-bold text-success">{{ $totalCashiers }}</div>
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
                        <div class="h5 pt-3 font-weight-bold text-primary">{{ $totalAdmins }}</div>
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
                        <div class="h5 pt-3 font-weight-bold text-danger">{{ $totalOwners }}</div>                        
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
                <!-- Data Users -->
                <div class="col-xl-7 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" style="font-family: Poppins, sans-serif;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <td>{{ $admin->nama }}</td>
                                                <td>{{ $admin->username }}</td>
                                                <td class="text-primary">Admin</td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $admin->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        @foreach ($cashiers as $cashier)
                                            <tr>
                                                <td>{{ $cashier->nama }}</td>
                                                <td>{{ $cashier->username }}</td>
                                                <td class="text-success">Cashier</td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $cashier->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add New User -->
                <div class="col-xl-5 col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('users.register') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required>
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="admin">Admin</option>
                                        <option value="cashier">Cashier</option>
                                        <option value="owner">Owner</option>
                                    </select>
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Create User</button>
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
