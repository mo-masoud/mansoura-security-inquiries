<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_no',
        'chassis_no',
        'engine_no',
        'owner_name',
        'owner_address',
        'owner_national_id',
        'owner_phone_no',
        'owner_image',
        'driver_name',
        'driver_address',
        'driver_national_id',
        'driver_image',
        'car_type',
        'car_brand',
        'car_model',
        'line',
        'center',
        'license_date',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
