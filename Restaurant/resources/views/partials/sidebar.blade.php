<!-- Page Wrapper -->
<div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion fixed" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.admin') }}">
            <div class="sidebar-brand-icon">
            <i class="fas fa-store-alt"></i>
            <!-- <img src="{{ asset('images/mcd-2.png') }}" alt="{{ asset('images/mcd-2.png') }}" height="50" width="50"> -->
            </div>
            <div class="sidebar-brand-text mx-3">D'Rizz<span class="text-danger">Pizza</span></div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading text-white">
            Pages
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chart-line"></i>
            <span>Pages</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 bg-white collapse-inner rounded">
                <h6 class="collapse-header">All Pages</h6>
                <a class="collapse-item" href="{{ route('dashboard.admin.users') }}"><i class="fas fa-user"></i> Users</a>
                <a class="collapse-item" href="{{ asset('') }}"><i class="fas fa-receipt"></i> History</a>
            </div>
            </div>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-list"></i>
            <span>Activity</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-orange py-2 collapse-inner rounded">
                <h6 class="collapse-header">All Activity</h6>
                <a class="collapse-item" href="{{ route('dashboard.admin.users') }}"><i class="fas fa-sign-in-alt"></i> Activity Login</a>
                <a class="collapse-item" href="{{ route('dashboard.admin.users') }}"><i class="fas fa-coins"></i> Activity Transaction</a>
            </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <style>
            .bg-dark {
                background-color: green !important; /* Darker black for sidebar */
            }
            .sidebar .nav-item .nav-link {
                color: #b5b5b5; /* Subtle gray text */
                transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
            }
            .sidebar .nav-item .nav-link:hover {
                color: #ffffff;
                background-color: #333333; /* Slightly lighter for hover effect */
                border-radius: 4px;
            }
            .sidebar .nav-item .collapse-inner {
                color: #888888; /* Lighter gray for nested links */
            }
            .sidebar-divider {
                border-top: 1px solid #444444;
            }
            .sidebar-brand {
                color: #ffffff !important;
            }
            .sidebar-heading {
                color: #777777; /* Subtle color for section heading */
            }
        </style>
    </ul>
    <!-- End of Sidebar -->
     