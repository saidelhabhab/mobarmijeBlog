<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable=[

            'category_id',
            'name',
            'slug',
            'image',
            'description',
            'yt_ifram',
            'meta_title',
            'meta_description',
            'meta_keyword',
            'status',
            'create_by'



     ];

     public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'create_by', 'id');
     }

     public function comment(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
     }
}
