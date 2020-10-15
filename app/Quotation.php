<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = "quotes";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $with = ['getClient','products'];

    protected $fillable = [
        'name', 'description', 'client', 'total',
    ];

    public function getClient()
    {
        return $this->belongsTo(Client::class, 'client');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'quotes_products', 'quote', 'product');
    }
}
