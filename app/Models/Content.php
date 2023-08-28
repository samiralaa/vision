<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['lable_id','page_id','content','lang'];

    public function lable()
    {
        $this->belongsTo(Label::class,'lable_id','id');
    }

    public function scopelang (Builder $query)
    {
        $query->where('id','<=',1);
    }
}
