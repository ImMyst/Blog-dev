<aside>
    <div class="sidebar-content" :class="sidebarStyles" ref="sidebarContent">

        <header>
            <h1><a href="/">Titouan GALVANI</a></h1>
            <h2>Developpeur web</h2>
            <h2>Étudiant en 3ème année à Ynov Lyon.</h2>
        </header>
        <nav>
            <a href="/" class="nav-item">
                <h3>A Propos</h3>
                <span class="nav-description">Qui suis-je ?</span>
            </a>
            <a href="/articles" class="nav-item">
                <h3>Articles</h3>
                <span class="nav-description">Mes articles sur mon rapport de stage.</span>
            </a>
            <a href="/entreprises" class="nav-item">
                <h3>Expériences / Entreprises</h3>
                <span class="nav-description">Les entreprises dans lesquels j'ai travaillé.</span>
            </a>
            <a href="/contact" class="nav-item">
                <h3>Contact</h3>
                <span class="nav-description">Mes informations pour me contacter</span>
            </a>
        </nav>
        <div class="social-nav">
            <a href="https://www.linkedin.com/in/titouan-galvani/" target="_blank">@include('svg.linkedin')</a>
            <a href="https://github.com/ImMyst" target="_blank">@include('svg.github')</a>
        </div>
    </div>
</aside>