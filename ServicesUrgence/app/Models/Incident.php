<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function notification(){
        return $this->hasMany(Notification::class);
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
}
