<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Set the permissions's slug.
     *
     * @param  string  $value
     * @return void
     */
    public function setGuardNameAttribute($value)
    {
        $this->attributes['guard_name'] = 'web';
    }
}
