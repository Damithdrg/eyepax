<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRepresentative extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'joined_date',
        'manager_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function workingRoutes(){
        return $this->belongsToMany(WorkingRoute::class, 'sales_representatives_working_routes', 'representative_id', 'route_id');
    }
}
