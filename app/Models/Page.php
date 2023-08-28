<?php

namespace App\Models;

use App\Models\Label;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['page'];

    public function lables()
    {
        return $this->hasMany(Label::class);
    }
    
}
