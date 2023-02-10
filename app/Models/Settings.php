<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = 'Settings';
    protected $fillable=[

            'website_name',
            'logo',
            'favicon',
            'description',
            'meta_title',
            'meta_description',
            'meta_keyword'



     ];
}
