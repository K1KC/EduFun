<nav class="container-fluid bg-light p-3" id="navbarSupportedContent">
    <div class="row">
        <div class="col-6">
            <h1 class="m-2">Logo</h1>
        </div>
        <div class="col-6 mt-3">
            <div class="row">
                <div class="col">
                    <a href="{{ route('/') }}" class="nav-link {{ (request()->is('/')) ? 'text-primary' : '' }}">Home</a>
                </div>
                <div class="col nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ (request()->is('category.data_science')) ? 'text-primary' : '' }}" href="{{ route('category', $category='data-science') }}">Data Science</a></li>
                        <li><a class="dropdown-item {{ (request()->is('category.network_security')) ? 'text-primary' : '' }}" href="{{ route('category', $category='network-security') }}">Network Security</a></li>
                    </ul>
                </div>
                <div class="col">
                    <a href="{{ route('writer.list') }}" class="nav-link {{ (request()->is('writer-list')) ? 'text-primary' : '' }}">Writers</a>
                </div>
                <div class="col">
                    <a href="{{ route('about_us') }}" class="nav-link {{ (request()->is('about-us')) ? 'text-primary' : '' }}">About Us</a>
                </div>
                <div class="col">
                    <a href="{{ route('popular') }}" class="nav-link {{ (request()->is('popular')) ? 'text-primary' : '' }}">Popular</a>
                </div>                
            </div>

        </div>
    </div>
</nav>