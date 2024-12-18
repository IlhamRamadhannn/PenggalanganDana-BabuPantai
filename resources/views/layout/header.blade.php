<header>
    <nav class="navbar navbar-expand navbar-dark fixed-top" style="background-color: rgba(0, 0, 0, 0); backdrop-filter: blur(5px);">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/logo2.png') }}" alt="" width="160px";></a>
            <div class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" style="font-weight: bold;" href="{{ route('homepage') }}#about-us">About Us</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="/articles">Articles</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="font-weight: bold;" href="#" role="button" data-bs-toggle="dropdown" >
                            Articles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="font-weight: bold;" href="#">Services Insite</a></li>
                            <li><a class="dropdown-item" style="font-weight: bold;" href="#">Services Mine</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="/donate">Donate</a>
                    </li>
                    
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="{{route('login')}}">Login</a>
                    </li>    

                    @else
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: bold;" href="/profile">Profile</a>
                    </li>
                    @endguest

                    
                </ul>
            </div>
        </div>
    </nav>
</header>



