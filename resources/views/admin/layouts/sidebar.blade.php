<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('img/logo.png') }}" alt="logo" width="70" height="" />
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- FOR ADMIN 1 ONLY -->

    <div class="sidebar-heading">Project Pannel</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
            aria-expanded="true" aria-controls="collapseProjects">
            <i class="fas fa-building"></i>
            <span>Projects</span>
        </a>
        <div id="collapseProjects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Project Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.project.create') }}">Add Project</a>
                <a class="collapse-item" href="{{ route('admin.project.index') }}">Project List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjectType"
            aria-expanded="true" aria-controls="collapseProjectType">
            <i class="fas fa-hotel"></i>
            <span>Project Type</span>
        </a>
        <div id="collapseProjectType" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Project Type Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.project-type.create') }}">Add Project Type</a>
                <a class="collapse-item" href="{{ route('admin.project-type.index') }}">Project Type List</a>
            </div>
        </div>
    </li>
    {{-- 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGalleryPhotos"
            aria-expanded="true" aria-controls="collapseGalleryPhotos">
            <i class="fas fa-images"></i>
            <span>Gallery Photos</span>
        </a>
        <div id="collapseGalleryPhotos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Gallery Photo Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.gallery.create') }}">Add Gallery Photo</a>
                <a class="collapse-item" href="{{ route('admin.gallery.create') }}">Gallery Photo List</a>
            </div>
        </div>
    </li> --}}


    <hr class="sidebar-divider">

    <div class="sidebar-heading">Location Pannel</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.location.index') }}" data-toggle="collapse"
            data-target="#collapseCity" aria-expanded="true" aria-controls="collapseCity">
            <i class="fas fa-map-marked-alt"></i>
            <span>City</span>
        </a>
        <div id="collapseCity" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">City Menu:</h6> -->
                <!-- <a class="collapse-item" href="/city-add/">Add City</a> -->
                <a class="collapse-item" href="{{ route('admin.location.index') }}">City List</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAreas"
            aria-expanded="true" aria-controls="collapseAreas">
            <i class="fas fa-map-marked"></i>
            <span>Areas</span>
        </a>
        <div id="collapseAreas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Area Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.area.create') }}">Add Area</a>
                <a class="collapse-item" href="{{ route('admin.area.index') }}">Area List</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Website Pannel</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
            aria-expanded="true" aria-controls="collapseSettings">
            <i class="fa fa-cogs"></i>
            <span>Settings</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Settings Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.site-details') }}">Site Details</a>
                <a class="collapse-item" href="{{ route('admin.site-edit') }}">Site Edit</a>
                <a class="collapse-item" href="{{ route('admin.site-logo') }}">Site Logo</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmins"
            aria-expanded="true" aria-controls="collapseAdmins">
            <i class="fas fa-user-cog"></i>
            <span>Admins</span>
        </a>
        <div id="collapseAdmins" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Admin Menu:</h6> -->
                <a class="collapse-item" href="{{ route('admin.user.create') }}">Add Admin</a>
                <a class="collapse-item" href="{{ route('admin.user.index') }}">Admin List</a>
            </div>
        </div>
    </li> --}}

    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
