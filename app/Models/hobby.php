<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;

    protected $table = 'hobbies';
    protected $primaryKey = 'hobby_id';

    protected $fillable = [
        'name'
    ];

    public function communities()
    {
        return $this->hasMany(Community::class, 'hobby_id', 'hobby_id');
    }
}
