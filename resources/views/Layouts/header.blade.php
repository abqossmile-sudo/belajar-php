
<header>
    <div class="brand">
        <h1>🌐My Website Saya</h1>
        <p>Belajar Pemrograman PHP dan Laravel</p>
    </div>

    <nav>
        <a href="{{ route('Beranda') }}"
           class="{{ request()->routeIs('Beranda') ? 'active' : '' }}">
            Beranda
        </a>

        <a href="{{ route('DataDiri') }}"
           class="{{ request()->routeIs('DataDiri') ? 'active' : '' }}">
            Data Diri
        </a>

        <a href="{{ route('Aktivitas') }}"
           class="{{ request()->routeIs('Aktivitas') ? 'active' : '' }}">
            Aktivitas
        </a>

        <a href="{{ route('Kontak') }}"
           class="{{ request()->routeIs('Kontak') ? 'active' : '' }}">
            Kontak
        </a>
        <a href="{{ route('Ai') }}"
           class="{{ request()->routeIs('Ai') ? 'active' : '' }}">
            Tanya AI
        </a>
    </nav>
</header>

