<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersAddresses extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users_addresses";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'addressId');
    }
}
