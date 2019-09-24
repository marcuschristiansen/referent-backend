<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name'
    ];

    /**
     * Set the guard name.
     *
     * @param  string  $value
     * @return void
     */
    public function setGuardNameAttribute($value)
    {
        $this->attributes['guard_name'] = 'web';
    }

    /**
     * Get all of the attributes for the role.
     */
    public function attributes()
    {
        return $this->morphToMany(Attribute::class, 'attributable');
    }
}
