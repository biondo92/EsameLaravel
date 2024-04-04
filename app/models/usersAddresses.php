<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usersAddresses extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users_addresses";
    protected $primaryKey = ["userId", "addressId"];


    public function user()
    {
        return $this->hasOne(user::class, 'userId', 'userId');
    }
    public function address()
    {
        return $this->hasOne(address::class, 'addressId', 'addressId');
    }
}
