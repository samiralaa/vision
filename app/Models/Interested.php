<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    use HasFactory;
    protected $fillable =['name', 'phone', 'email', 'name_company', 'type_company', 'size_company', 'message'];
}
