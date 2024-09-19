<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use  Notifiable;

    // Nama primary key diubah dari default 'id' menjadi 'user_id'
    protected $primaryKey = 'user_id';

    // Field yang dapat diisi (mass assignable)
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'role_id',
        'otp_code',
    ];

    // Field yang disembunyikan dalam array atau JSON output (misalnya, saat menggunakan Eloquent)
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
    ];
    

    // Casts attribute types to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
        'two_factor_enabled' => 'boolean',
        'two_factor_verified' => 'boolean',
    ];

    // Relasi dengan model Role (User memiliki satu Role)
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    // Mutator untuk hash password saat disimpan
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    // Relasi untuk notifikasi (Opsional, jika menggunakan fitur notifikasi)
}
