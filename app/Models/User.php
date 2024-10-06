<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Appointment;
use App\Models\Service;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', // User's name
        'email', // User's email
        'password', // User's password (make sure to hash it)
        'email_verified_at', // Add email_verified_at to the fillable array
        'remember_token', // Add remember_token to the fillable array
        // Add more fillable fields as needed
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', // Hide the password by default
        'remember_token', // Hide the remember token
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', // Cast email_verified_at to a DateTime object
    ];

    /**
     * The relationships that should be touched on save.
     *
     * @var array
     */
    protected $touches = ['services']; // Assuming you want to touch services relationship on save

    /**
     * Get the services associated with the user.
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
