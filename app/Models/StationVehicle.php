<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StationVehicle extends Model
{
    use HasFactory;
    protected $table = 'station_vehicles';
    protected $fillable = [
        'station_id',
        'vehicle_id',
        'total_collected',
        'pass_count',
    ];
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
