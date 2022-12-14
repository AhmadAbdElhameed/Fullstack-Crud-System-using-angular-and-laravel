<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name_en','name_ar','created_at' , 'updated_at'
    ];


    // use HasFactory;
    // protected $fillable = [
    //     'title',
    //     'description'
    // ];

}
