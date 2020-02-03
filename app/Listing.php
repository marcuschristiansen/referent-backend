<?php

namespace App;

use App\ListingAmenity;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Listing extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'listing_type_id',
        'house_share',
        'residential_address',
        'unit_number',
        'city_id',
        'zip_code',
        'rooms',
        'parking'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'rooms'               => 'array',
        'parking'             => 'array',
        'residential_address' => 'array'
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['city', 'city.state', 'user', 'amenities', 'spaces'];

    /**
     * The amenities that belong to the listing.
     */
    public function listingAmenities()
    {
        return $this->HasMany(ListingAmenity::class);
    }

    /**
     * Get the city that owns the listing.
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the user that owns the listing.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The amenities that belong to the listing.
     */
    public function amenities()
    {
        return $this->belongsToMany(ListingAmenity::class);
    }

    /**
     * The spaces that belong to the listing.
     */
    public function spaces()
    {
        return $this->belongsToMany(ListingSpace::class);
    }
}