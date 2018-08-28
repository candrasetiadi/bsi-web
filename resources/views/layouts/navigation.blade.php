<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <h1 id="logo">
                    <a href="{{ route('home') }}">
                    <!-- <img src="img/logo-meghna.png" alt="Meghna" /> -->
                    </a>
                </h1>
            </a>
        </div>
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav">
                <li class="current menu" id="Home"><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#services">Pelayanan Umum</a></li>
                <li><a href="#showcase">Fasilitas Umum</a></li>
                <li><a href="#our-team">Struktur RW</a></li>
                <li><a href="#pricing">Informasi</a></li>
                <li class="menu" id="Blog"><a href="{{ route('blog') }}">Artikel</a></li>
                <li><a href="#contact-us">Hubungi Kami</a></li>
            </ul>
        </nav>
    </div>
</header>