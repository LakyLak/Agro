<ul class="sidebar navbar-nav">
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/') }}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ url('/farmings') }}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-truck-loading"></i>
    <span>Farmings</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
    <a class="dropdown-item" href="{{ url('/farmings') }}">List all Farmings</a>
    <a class="dropdown-item" href="{{ url('/farmings/add') }}">Create new Farming</a>
    </div>
</li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ url('/tractors') }}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-truck"></i>
    <span>Tractors</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
    <a class="dropdown-item" href="{{ url('/tractors') }}">List all Tractors</a>
    <a class="dropdown-item" href="{{ url('/tractors/add') }}">Create new Tractor</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="{{ url('/fields') }}" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-square-full"></i>
    <span>Fields</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
    <a class="dropdown-item" href="{{ url('/fields') }}">List all Fields</a>
    <a class="dropdown-item" href="{{ url('/fields/add') }}">Create new Field</a>
    </div>
</li>

</ul>