<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded=[];

    // protected $with=['category','tags','city'];

    //for slug

    public function getRouteKeyName()
    {
       return 'slug';
    }

    //search query
    // public function scopeFilter($query)
    // {
    //     if(request('search')){
    //         $query->where('title','like','%'. request('search') .'%')
    //               ->orWhere('location','like','%'. request('search'). '%');
    //     }

    // }

    //better sarch

    public function scopeFilter($query,array $filters)
    {
       $query->when($filters['search'] ?? false,function($query,$search){
        
        $query->where('title','like','%'.$search.'%')
              ->orWhere('location','like','%' . $search . '%');

       });


    }

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
