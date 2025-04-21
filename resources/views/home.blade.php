@extends('layouts.index')
@section('content')
<section class="relative h-screen flex items-center justify-center bg-black">
    <img 
        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738948070/imagen_2025-02-07_180748247_emoskz.png" 
        alt="Peaje" 
        class="absolute w-full h-full object-cover opacity-50 z-0"
    />
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-8 md:gap-12 lg:gap-16 p-4">
        <div class="flex flex-col items-center justify-center">
            <a href="{{ route('stations') }}">
                <button class="flex flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg transform hover:scale-110 transition-transform duration-500 h-50 w-50 sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96">
                    <div class="items-center font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                        <img class="h-40 w-40 sm:h-48 sm:w-48 md:h-56 md:w-56 lg:h-64 lg:w-64" src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950498/imagen_2025-02-07_184816940_tue9ve.png" alt="" />
                    </div>
                    <div class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                        Peajes
                    </div>
                </button>
            </a>
        </div>
        <div class="flex flex-col items-center justify-center">
            <a href="{{ route('vehicles') }}">
                <button class="flex flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg transform hover:scale-110 transition-transform duration-500 h-50 w-50 sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96">
                    <div class="items-center font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                        <img class="h-40 w-40 sm:h-48 sm:w-48 md:h-56 md:w-56 lg:h-64 lg:w-64" src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950813/imagen_2025-02-07_185330143_ylff5a.png" alt="" />
                    </div>
                    <div class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                        Vehículos
                    </div>
                </button>
            </a>
        </div>
    </div>
</section>
@endsection