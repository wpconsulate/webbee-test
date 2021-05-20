<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the workshops for this Event
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
