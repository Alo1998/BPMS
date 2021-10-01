<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function assignService()
    {
        return $this->belongsTo(AssignService::class, 'assignservice_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id', 'id');
    }
}
