<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi plural
    protected $table = 'communities';

    // Tentukan atribut yang bisa diisi
    protected $primaryKey = 'community_id';
    protected $fillable = [
        'name',
        'hobby_id',
        'logo_url'
    ];

    // Relasi dengan Hobby
    public function hobby()
    {
        return $this->belongsTo(Hobby::class, 'hobby_id', 'hobby_id');
    }
}
