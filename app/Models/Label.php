<?php

namespace App\Models;

use App\Observers\LableObserver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Label extends Model
{
    use HasFactory;
    protected $fillable =['page_id','lable'];

    // retrieved
    // creating
    // created
    // updating
    // updated
    // saving
    // saved
    // deleting
    // deleted
    // restoring
    // restored
    public static function booted(){ // Global scope
        // static::addGlobalScope(function(Builder $builder){
        //     $builder->where('id',1);
        // });
    }

    public function ScopeWhereCond(Builder $builder){ // Local scope
        return $builder->where('id',1)->where('page_id',1);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function contents()
    {
        return $this->hasMany(content::class,'lable_id','id');
    }

}
