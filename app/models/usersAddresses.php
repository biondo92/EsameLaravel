<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usersAddresses extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users_addresses";

    public function user()
    {
        return $this->hasOne(user::class, 'id', 'userId');
    }
    public function address()
    {
        return $this->hasOne(address::class, 'id', 'addressId');
    }
}
