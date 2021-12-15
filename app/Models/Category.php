<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $appends = [
        'parent'
    ];
    use HasFactory;

    //one to many
    public function contents(){

        return $this->hasMany(Content::class);
    }

    //one to many Inverse
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
    //one to many
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

}
