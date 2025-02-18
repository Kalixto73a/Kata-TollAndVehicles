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
        
        <div class="z-10 flex flex-col items-center justify-center w-full">
            <h1 class="z-10 text-center text-3xl p-2 uppercase text-white bg-cyan-500 rounded-lg mb-4">Lista de Peajes</h1>
            
            <!-- Contenedor de las cards con altura máxima y scroll -->
            <div class="max-h-[calc(95vh-10rem)] overflow-y-auto flex flex-wrap justify-center z-10 text-sm gap-4 no-scrollbar">
                @foreach ($groupedStations as $stationId)
                    <div class="p-4 w-80 h-70 flex flex-col justify-center text-center rounded-lg shadow-lg bg-cyan-500 text-white">
                        <div class="flex flex-col justify-center text-center items-center w-full h-full">
                            <div>
                                <h5 class="font-bold text-lg mb-4">Peaje: {{ $stationId['station']->name }}</h5>
                            </div>
                            <div class="overflow-y-auto flex-1 w-full">
                                <ul class="space-y-2">
                                    @foreach ($stationId['vehicles'] as $vehicle)
                                        <li class="text-sm">
                                            {{ $vehicle['name'] }} ({{ $vehicle['license_plate'] }}) - 
                                             Veces pasado: {{ $vehicle['pass_count'] }} 
                                            Precio: ${{ number_format($vehicle['price'], 2) }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mt-4">
                                <p class="font-semibold">Total recibido: ${{ number_format($stationId['totalPrice'], 2) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

