<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $with = ['getCategory'];
    
    protected $fillable = [
        'name', 'description', 'image', 'price', 'category'
    ];

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
