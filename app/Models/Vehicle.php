<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'name',
        'license_plate',
        'axles',
        'vehicles_type_id'
    ];
    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicles_type_id');
    }
    public function stations()
    {
        return $this->belongsToMany(Station::class, 'stations_vehicles', 'vehicles_id', 'stations_id')
                    ->withPivot('pass_count');
    }
}
