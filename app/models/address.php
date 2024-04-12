<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = "addresses";
    protected $primaryKey = "id";

    protected $fillable = [
        "cityId",
        "address",
        "postalCode",
        "state",
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'cityId', 'id');
    }
    public function user_address()
    {
        return $this->hasOne(UsersAddresses::class, 'id', 'addressId');
    }
}
