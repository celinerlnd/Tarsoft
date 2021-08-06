<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['user_id', 'country'];

    public function user(){
        // return $this -> hasOne(Address::class, 'user_id', 'id');
        return $this-> belongsTo(User::class, 'user_id', 'id');
    }
}
