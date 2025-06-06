<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'roles_id');  // one role has many users
    }
}
