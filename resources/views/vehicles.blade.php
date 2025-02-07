@extends('layouts.index')
@section('content')
<div class="relative h-screen flex flex-wrap items-center justify-center bg-black">
    <img 
        src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738948070/imagen_2025-02-07_180748247_emoskz.png" 
        alt="Peaje" 
        class="absolute w-full h-full object-cover opacity-50 z-0"
    />
    
    <div class="relative h-screen flex flex-wrap items-center justify-center bg-black">
        <img 
            src="https://res.cloudinary.com/dzfqdntdw/image/upload/v1738948070/imagen_2025-02-07_180748247_emoskz.png" 
            alt="Peaje" 
            class="absolute w-full h-full object-cover opacity-50 z-0"
        />
        
        <div class="z-10 flex flex-col items-center justify-center w-full text-white">
            <h1 class="z-10 text-center text-3xl p-2 uppercase text-white bg-cyan-500 rounded-lg">Lista de Coches</h1>
            
            <!-- Contenedor de las cards con altura máxima y scroll -->
            <div class="max-h-[calc(95vh-10rem)] overflow-y-auto flex flex-wrap justify-center z-10 text-sm gap-4 p-4 no-scrollbar">
                @foreach ($groupedStations as $stationId)
                    @foreach ($stationId['vehicles'] as $vehicle)
                    <div class="flex flex-col flex-wrap justify-center text-center items-center h-full bg-cyan-500 rounded-lg shadow-lg text-white p-4">
                        {{ $vehicle['vehicle_type'] }} -
                        {{ $vehicle['name'] }} ({{ $vehicle['license_plate'] }}) -  
                        Precio: {{ number_format($vehicle['price'], 2) }}€
                    </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

