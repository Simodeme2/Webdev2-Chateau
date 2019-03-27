<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    /**
     * Get the title associated to the client
     */
    public function title() {
        return $this->hasOne('App\Models\Title');
    }

    /** 
     * Get the reservations from this client
     */
    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
