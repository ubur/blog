<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =['name', 'slug'];

    //has many category ke article
    public function Articles()
    {
        return $this->hasMany(Article::class);
    }
}
