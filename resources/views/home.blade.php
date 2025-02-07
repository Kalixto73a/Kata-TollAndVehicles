@extends('layouts.index')
@section('content')
<section class="relative h-screen flex flex-wrap items-center justify-center bg-black">
    <img 
    src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738948070/imagen_2025-02-07_180748247_emoskz.png" 
    alt="Peaje" 
    class="absolute w-full h-full object-cover opacity-50 z-0"
    />
    <div class="flex flex-col sm:flex-row flex-wrap py-4">
        <div class="flex flex-col lg:px-[4rem] md:px-[2rem] sm:px-[1rem]">
            <div class="flex flex-col items-center justify-center gap-10 sm:gap-12 md:gap-24 py-4">
                <a href="{{ route('stations') }}">
                    <button class="flex h-[255px] flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                        <div class="items-center font-bold text-3xl">
                            <img class="h-[13rem] w-[13rem]" src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950498/imagen_2025-02-07_184816940_tue9ve.png" alt="" />
                        </div>
                        <div class="font-bold text-3xl">
                            Peajes
                        </div>
                    </button>
                </a>
            </div>
        </div>
        <div class="flex flex-col lg:px-[4rem] md:px-[2rem] sm:px-[1rem]">
            <div class="flex flex-col items-center justify-center gap-10 sm:gap-12 md:gap-24 py-4">
                <a href="{{ route('vehicles') }}">
                    <button class="flex h-[255px] flex-col items-center justify-center bg-[#ffffff80] p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[19rem] w-[18rem]">
                        <div class="items-center font-bold text-3xl">
                            <img class="h-[13rem] w-[13rem]" src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738950813/imagen_2025-02-07_185330143_ylff5a.png" alt="" />
                        </div>
                        <div class="font-bold text-3xl">
                            Vehículos
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection


