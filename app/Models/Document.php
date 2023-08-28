<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','comnumber','taxnumber','typecompany','address','email','phone','city','part','streat','numbild',
    'totalcam',
    'typediv',
    'size',
    'totalscr',
    'typecam'];
}
