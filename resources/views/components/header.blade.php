<header class="flex items-center justify-center bg-[#446878] text-white p-4">
    <!-- Contenedor de botones -->
    <div class="flex flex-wrap justify-center gap-4">
        @if (request()->routeIs('home'))
            <a href="{{ route('stations') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950498/imagen_2025-02-07_184816940_tue9ve.png" 
                        alt="Peaje"
                    />
                    <div class="pl-4 text-sm">Peaje</div>
                </button>
            </a>
            <a href="{{ route('vehicles') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950813/imagen_2025-02-07_185330143_ylff5a.png" 
                        alt="Coches"
                    />
                    <div class="pl-4 text-sm">Coches</div>
                </button>
            </a>
        @endif

        @if (request()->routeIs('vehicles'))
            <a href="{{ route('stations') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950498/imagen_2025-02-07_184816940_tue9ve.png" 
                        alt="Peaje"
                    />
                    <div class="pl-4 text-sm">Peaje</div>
                </button>
            </a>
            <a href="{{ route('home') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738952024/imagen_2025-02-07_191341542_snkwij.png" 
                        alt="Inicio"
                    />
                    <div class="pl-4 text-sm">Inicio</div>
                </button>
            </a>
        @endif

        @if (request()->routeIs('stations'))
            <a href="{{ route('vehicles') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950813/imagen_2025-02-07_185330143_ylff5a.png" 
                        alt="Coches"
                    />
                    <div class="pl-4 text-sm">Coches</div>
                </button>
            </a>
            <a href="{{ route('home') }}">
                <button class="flex items-center bg-[#53CCDC] px-4 py-2 rounded-full text-lg w-28 sm:w-32 text-center font-bold shadow-md hover:scale-110 transition-transform duration-500">
                    <img 
                        class="w-5 h-5 mr-2" 
                        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738952024/imagen_2025-02-07_191341542_snkwij.png" 
                        alt="Inicio"
                    />
                    <div class="pl-4 text-sm">Inicio</div>
                </button>
            </a>
        @endif
    </div>
</header>