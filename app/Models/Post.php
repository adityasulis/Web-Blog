<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //membuka variable fillable
    // protected $fillable = ['title', 'slug', 'excert', 'body'];

    //menutup variable id dan membuka variable lain
    protected $guarded = ['id'];
}
