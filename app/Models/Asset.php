<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'asset';

    protected $fillable = [
        'name', 
        'description', 
        'category_id', 
        'geometry_type', 
        'geometry_coordinates', 
        'threshold', 
        'threshold_correction',
    ];
}
