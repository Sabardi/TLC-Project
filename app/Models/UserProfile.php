<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';

    // Fields that can be mass-assigned
    protected $fillable = [
        'user_id',
        'nik',
        'fullname',
        'instansi',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_wa',
        'profile_image',
        'provinsi', 
        'kabupaten',
        'kelurahan',
        'kecamatan',
        'custom_instansi'
    ];

    // Define relationship to User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    }