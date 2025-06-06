<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoundItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'found_item';

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
