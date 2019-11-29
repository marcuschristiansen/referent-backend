<?php

namespace App;

use App\Listing;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class ListingAmenity extends Model
{
    use NodeTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        '_lft',
        '_rgt',
        'parent_id'
    ];

    /**
     * The roles that belong to the user.
     */
    public function listings()
    {
        return $this->belongsToMany(Listing::class);
    }
}
