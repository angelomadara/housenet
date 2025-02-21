<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function status(){
        return $this->belongsTo(ClientStatus::class,'client_status_id','id');
    }
}
