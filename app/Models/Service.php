<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model
use App\Models\Appointment;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price', 
        'descriptions',
        'created_at',
        'updated_at,'
   
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class); 
    }

}

