<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Station extends Model
{
    use HasFactory;
    protected $table = 'stations';
    protected $fillable = [
        'name',
        'city',
    ];
    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class)
                    ->withPivot('pass_count');
    }
}
