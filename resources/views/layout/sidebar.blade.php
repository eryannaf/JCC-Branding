<ul class="metismenu" id="menu">
    @can('siswa')
    <li class="nav-label">Dashboard</li>
    <li>
        <a class="" href="{{ route('home.siswa') }}" aria-expanded="false">
            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('index') }}">Nilai</a></li>
        </ul>
    </li>
    @endcan
    @can('pengajar')
    <li class="nav-label">Dashboard</li>
    <li>
        <a class="" href="{{ route('home.guru') }}" aria-expanded="false">
            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('nilai.index') }}">Nilai</a></li>
        </ul>
    </li>
    @endcan
    @can('admin')
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
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('student.create') }}">Pelajar</a></li>
        </ul>
        <ul aria-expanded="false">
            <li><a href="{{ route('teacher.create') }}">Guru</a></li>
        </ul>
        <ul aria-expanded="false">
            <li><a href="{{ route('anilai.create') }}">Nilai</a></li>
        </ul>
        <ul aria-expanded="false">
            <li><a href="{{ route('kelas.create') }}">Kelas</a></li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
        </a>
        <ul aria-expanded="false">
            <li><a href="{{ route('student.index') }}">Pelajar</a></li>
            <li><a href="{{ route('teacher.index') }}">Guru</a></li>
            <li><a href="{{ route('anilai.index') }}">Nilai</a></li>
            <li><a href="{{ route('kelas.index') }}">Kelas</a></li>
        </ul>
    </li>
    @endcan

</ul>
