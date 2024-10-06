<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model
use App\Models\Service;

class Appointment extends Model
{
    protected $fillable = ['user_id', 'service_id', 'appointment_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function getFormattedAppointmentDateAttribute()
    {
        return \Carbon\Carbon::parse($this->appointment_date)->format('Y-m-d');
    }
}
