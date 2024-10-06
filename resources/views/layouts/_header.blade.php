<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>

    <style>
        .navbar-brand i {
            font-size: 2rem;
            color: #2567d7;
        }
        
        .navbar {
            padding: 0 50px; 
        }
        
        .navbar-brand img {
            width: 40px;
        }
        
        .navbar-nav {
            display: flex;
            gap: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Navbar brand with icon -->
        <div class="navbar-brand" href="#">
            <img src="{{ asset('images/Logo.png') }}" alt="Description of your image">
        </div>
        
        <!-- Toggler button for collapsed menu on smaller screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <!-- Navigation links aligned in the middle -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#instructions">How To Find</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact Us</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('appointment.show') }}">My Appointments</a>
                </li>
                @endauth
            </ul>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
            @auth
                <span class="ms-3">
                    {{ Auth::user()->name }}
                </span>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-link" type="submit">
                        {{ __('Sign out') }}
                    </button>
                </form>
            @else
                <a class="btn btn-sm btn-light ms-2 " style="color: #0072ff;"href="{{ route('auth.login') }}">
                    {{ __('Sign in') }}
                </a>
                <a class="btn btn-sm btn-primary ms-2 ml-2" style="background-color: #0072ff; color: #fff;" href="{{ route('auth.register') }}">
                    {{ __('Sign up') }}
                </a>
                
            @endauth
        </div>
    </nav>

    <script>
        // Smooth scroll to sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
