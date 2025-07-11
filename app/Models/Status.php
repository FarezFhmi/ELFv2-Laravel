<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $table = 'status'; 

    public function products() {
        return $this->hasMany(FoundItem::class);
    }
}
