<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table = 'roles';
}
