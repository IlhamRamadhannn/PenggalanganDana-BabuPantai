
<style>
    .dropdown-menu {
        display: none; 
        position: absolute;
        z-index: 1000;
    }
    
    .nav-item:hover .dropdown-menu {
        display: block;
    }
</style>

<div class="row bg-light" style="position: sticky;">
    <div class="col-7">
        <img src="{{ asset('image/logo.png') }}" class="img-fluid" alt="" width="125" height="auto">
    </div>
    <div class="col-5">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Other Page
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/datasci">ABCD</a></li>
        <li><a class="dropdown-item" href="/network">LALA</a></li>
    </ul>
</li>

                <li class="nav-item">
                  <a class="nav-link" href="/writers">Donate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/articles">Profile</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
