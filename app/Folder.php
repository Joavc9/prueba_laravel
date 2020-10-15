<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public $with = ['children'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'folder_parent',
    ];

    public function folders()
    {
        return $this->hasMany(Folder::class,'folder_parent');
    }

    public function children()
    {
        return $this->folders()->with('children');
    }
}
