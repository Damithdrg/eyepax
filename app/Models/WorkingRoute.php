<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lat',
        'lng',
    ];

    public function workingRoutes(){
        return $this->belongsToMany(SalesRepresentative::class, 'sales_representatives_working_routes', 'representative_id', 'route_id');
    }
}
