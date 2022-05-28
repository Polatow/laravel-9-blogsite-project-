<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table='Category';
    protected $fillable=[
        'category_name',
        'slug'
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }


}
