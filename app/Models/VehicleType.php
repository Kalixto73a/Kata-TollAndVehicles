<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleType extends Model
{
    use HasFactory;
    protected $table = 'vehicles_types';
    protected $fillable = [
        'vehicle_type',
        'base_fee',
        'aditional_base_fee',
    ];
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
