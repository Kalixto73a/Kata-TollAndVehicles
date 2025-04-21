@extends('layouts.index')
@section('content')
<div class="relative h-screen flex items-center justify-center bg-black">
    <img 
        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738948070/imagen_2025-02-07_180748247_emoskz.png" 
        alt="Peaje" 
        class="absolute w-full h-full object-cover opacity-50 z-0"
    />
    <div class="z-10 flex flex-col items-center justify-center w-full p-4">
        <!-- Título -->
        <h1 class="z-10 text-center text-2xl sm:text-3xl md:text-4xl p-4 uppercase text-white bg-cyan-500 rounded-lg mb-4">
            Lista de Coches
        </h1>
        <div class="max-h-[calc(100vh-12rem)] overflow-y-auto flex flex-wrap justify-center gap-4 no-scrollbar w-full px-4">
            @foreach ($groupedStations as $stationId)
                @foreach ($stationId['vehicles'] as $vehicle)
                    <!-- Card -->
                    <div class="w-full sm:w-72 md:w-80 p-4 flex flex-col justify-center text-center rounded-lg shadow-lg bg-cyan-500 text-white">
                        <p class="text-sm sm:text-base md:text-lg">
                            {{ $vehicle['vehicle_type'] }} -
                            {{ $vehicle['name'] }} ({{ $vehicle['license_plate'] }}) -  
                            Precio: {{ number_format($vehicle['price'], 2) }}€
                        </p>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@endsection