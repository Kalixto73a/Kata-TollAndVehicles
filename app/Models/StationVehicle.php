<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StationVehicle extends Model
{
    use HasFactory;
    protected $table = 'stations_vehicles';
    protected $fillable = [
        'stations_id',
        'vehicles_id',
        'total_collected',
        'pass_count',
    ];
    public function station()
    {
        return $this->belongsTo(Station::class, 'stations_id');
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicles_id');
    }
    public function stationVehicles()
    {
        return $this->hasMany(StationVehicle::class, 'stations_id');
    }
}
