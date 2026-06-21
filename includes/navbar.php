    <nav class="fixed top-0 w-full z-50 nav-light py-3">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="#"><img src="imagenes/isotipo-transp.png" alt="ESI Ventures" class="h-8 md:h-12"></a>
            <div class="hidden md:flex gap-8 text-[11px] tracking-[0.2em] uppercase font-bold">
                <a href="#about" class="nav-link-dark" data-lang="en">About</a>
                <a href="#about" class="nav-link-dark lang-hidden" data-lang="es">Nosotros</a>
                <a href="#philosophy" class="nav-link-dark" data-lang="en">Philosophy</a>
                <a href="#philosophy" class="nav-link-dark lang-hidden" data-lang="es">Filosofía</a>
                <a href="#ventures" class="nav-link-dark" data-lang="en">Portfolio</a>
                <a href="#ventures" class="nav-link-dark lang-hidden" data-lang="es">Portafolio</a>
                <a href="#contact" class="nav-link-dark" data-lang="en">Contact</a>
                <a href="#contact" class="nav-link-dark lang-hidden" data-lang="es">Contacto</a>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex gap-4 text-[10px] font-bold border lang-switcher-dark rounded-full px-4 py-2">
                    <button onclick="setLanguage('en')" id="btn-en">EN</button>
                    <span class="opacity-20">|</span>
                    <button onclick="setLanguage('es')" id="btn-es">ES</button>
                </div>
                <button class="md:hidden text-slate-900" onclick="toggleMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 flex flex-col p-6 gap-4 text-[11px] tracking-[0.2em] uppercase font-bold shadow-xl">
            <a href="#about" onclick="toggleMenu()" class="nav-link-dark" data-lang="en">About</a>
            <a href="#about" onclick="toggleMenu()" class="nav-link-dark lang-hidden" data-lang="es">Nosotros</a>
            <a href="#philosophy" onclick="toggleMenu()" class="nav-link-dark" data-lang="en">Philosophy</a>
            <a href="#philosophy" onclick="toggleMenu()" class="nav-link-dark lang-hidden" data-lang="es">Filosofía</a>
            <a href="#ventures" onclick="toggleMenu()" class="nav-link-dark" data-lang="en">Portfolio</a>
            <a href="#ventures" onclick="toggleMenu()" class="nav-link-dark lang-hidden" data-lang="es">Portafolio</a>
            <a href="#contact" onclick="toggleMenu()" class="nav-link-dark" data-lang="en">Contact</a>
            <a href="#contact" onclick="toggleMenu()" class="nav-link-dark lang-hidden" data-lang="es">Contacto</a>
        </div>
    </nav>