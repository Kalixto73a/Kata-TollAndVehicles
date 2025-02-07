<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'vehicle_type',
        'base_fee',
        'aditional_base_fee',
    ];
    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }
    public function stations()
    {
        return $this->belongsToMany(Station::class, 'station_vehicles')
                    ->withPivot('total_collected', 'pass_count');
    }
}
