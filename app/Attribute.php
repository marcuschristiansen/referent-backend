<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug'
    ];

    /**
     * Set the attributes's slug.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_replace(' ', '_', strtolower($value));
    }

    /**
     * Get all of the roles that are assigned this attribute.
     */
    public function roles()
    {
        return $this->morphedByMany(Role::class, 'attributable');
    }
}
