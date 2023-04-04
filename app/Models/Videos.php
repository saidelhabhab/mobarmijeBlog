<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable=[

            'name',
            'yt_iframe',
            'image',
            'description',
            'status',
            'create_by'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'create_by', 'id');
    }

}
