  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar sidebar-dark-primary" id="sidebar">
    <!-- Button to toggle sidebar -->
    {{-- <button class="btn btn-primary" onclick="toggleSidebar()">Toggle Sidebar</button> --}}
   <!-- Sidebar -->
   <div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
       {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
       </div>
       <div class="info">
       <a href="/home" class="d-block">RentMob - {{Auth::user()->nama;}}</a>
       </div>
   </div>

   <!-- Sidebar Menu -->
   <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
               <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
                   Dashboard
                   <i class="right fas fa-angle-left"></i>
               </p>
               </a>
               <ul class="nav nav-treeview">
                   <li class="nav-item">
                       <a href="/datamobil" class="nav-link active">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Data Mobil</p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="/mobilavail" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Ketersediaan Mobil</p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="/user" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Data User</p>
                       </a>
                   </li>
               </ul>
           </li>
       </ul>
   </nav>

   <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>
<div class="row">
    <footer>
        <p>&copy; Copyright © 2023 - All rights reserved.</p>
    </footer>
</div>

<style>
    #sidebar {
            position: fixed;
            height: 100%;
            top: 56px;
            bottom: 100px;
            left: 0;
            width: 250px;
            z-index: 2;
        }

        .sidebar {
            position: fixed;
            height: auto;
            top: 56px;
            bottom: 100px;
            left: 0;
            width: 250px;
            z-index: 2;
        }

        .user-panel {
            padding: 15px;
            background-color: #454d55;
        }

        .user-panel a {
            color: #ffffff;
        }

        .nav-sidebar .nav-link.active {
            background-color: #28a745;
            color: #ffffff;
        }

</style>
