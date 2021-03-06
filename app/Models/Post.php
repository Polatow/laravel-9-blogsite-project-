<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table= "Posts";
    protected  $fillable=[
        'title',
        'slug',
        'description',
        'image',
        'category_id',
        'user_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

     public function user()
     {
         return $this->belongsTo('App\Models\User');
     }


}
