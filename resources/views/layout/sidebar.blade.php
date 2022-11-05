<ul class="metismenu" id="menu">
    <li class="nav-label">Dashboard</li>
    <li>
        <a class="" href="javascript:void()" aria-expanded="false">
            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
        </a>
    </li>
    <li class="mega-menu mega-menu-sm">
        <a class="" href="javascript:void()" aria-expanded="false">
            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Mata Pelajaran</span>
        </a>
    </li>
    <li>
        <a href="widgets.html" aria-expanded="false">
            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
        </a>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('student.create') }}">Pelajar</a></li>
        </ul>
        <ul aria-expanded="false">
            <li><a href="#">Guru</a></li>
        </ul>
        <ul aria-expanded="false">
            <li><a href="#">Nilai</a></li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('student.index') }}">Pelajar</a></li>
            <li><a href="{{ route('student.index') }}">Guru</a></li>
            <li><a href="{{ route('student.index') }}">Nilai</a></li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="./page-login.html">Login</a></li>
            <li><a href="./page-register.html">Register</a></li>
            <li><a href="./page-lock.html">Lock Screen</a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                <ul aria-expanded="false">
                    <li><a href="./page-error-404.html">Error 404</a></li>
                    <li><a href="./page-error-403.html">Error 403</a></li>
                    <li><a href="./page-error-400.html">Error 400</a></li>
                    <li><a href="./page-error-500.html">Error 500</a></li>
                    <li><a href="./page-error-503.html">Error 503</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
