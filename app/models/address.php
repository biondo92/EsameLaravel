<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class address extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = "addresses";
    protected $primaryKey = "addressId";

    protected $fillable = [
        "cityId",
        "address",
        "postalCode",
        "state",
    ];

    public function city()
    {
        return $this->belongsTo(cities::class, 'cityId', 'cityId');
    }
    public function user_address()
    {
        return $this->hasOne(usersAddresses::class, 'addressId', 'addressId');
    }
}
