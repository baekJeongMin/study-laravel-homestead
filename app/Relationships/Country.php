<?php


namespace App\Relationships;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Get all of the roles for the country.
     */
    public function posts()
    {
        return $this->hasManyThrough('App\Relationships\Post', 'App\User');
    }
}
