<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ route('user.index') }}" class="navbar-brand sidebar-gone-hide">{{ env('APP_NAME') }}</a>
    <a href="#" class="nav-link sidebar-gone-show" style="padding: 15px !important" data-toggle="sidebar"><i class="fas fa-bars" style="font-size: 24px; margin-left: 0"></i></a>
    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
        </div>
    </form>
</nav>
