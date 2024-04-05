<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Food E-commerce</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
    
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- Navbar -->
    <header class="custom-header">
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">

                <!-- Navigation Links (Left Side) -->
                <div class="col">
                    <ul class="nav my-2 text-small">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Home</a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Orders</a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Category</a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">My Cart</a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Favourites</a>
                        </li>
                    </ul>
                </div>

                <!-- User Email Link (Right Side) -->
                <div class="col">
                    <ul class="nav my-2 justify-content-end text-small">
                        <li class="nav-item">
                        <a href="#" class="nav-link text-white" id="userEmailLink">
                        </a>
                        </li>
                        <li class="nav-item">
                            <form id="logoutForm" action="{{route('logout.logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link text-black">
                                Log Out
                            </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
    <div class="container">
    <form class="row align-items-center">
        <div class="col">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
    </div>
</header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            @yield('header')
        </div><!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>    
                </div>
        </div>
        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>&copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div><!-- /.wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const data = @json($data);

                    localStorage.setItem('id', data.id);
                    localStorage.setItem('name', data.name);
                    localStorage.setItem('email', data.email);
                    localStorage.setItem('role', data.role);
                    localStorage.setItem('token', data.token);
                    const userEmail = localStorage.getItem('email');
                    // Check if userEmail exists in localStorage
                    if (userEmail) {
                        // Update the text of the User Email Link
                        document.getElementById('userEmailLink').innerText = userEmail;
                    }
            });

        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Add event listener to the logout form
                document.getElementById('logoutForm').addEventListener('submit', function() {
                    // Clear the local storage when the form is submitted (user logs out)
                    localStorage.clear();
                });
            });
        </script>

</body>
</html>


