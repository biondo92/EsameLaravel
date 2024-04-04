<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users";
    protected $primaryKey = "userId";

    protected $fillable = [
        "userName",
        "password",
        "roleId",
    ];

    public function role()
    {
        return $this->belongsTo(role::class, 'roleId', 'roleId');
    }
    public function profile()
    {
        return $this->belongsTo(userProfile::class, 'userId', 'userId');
    }
    public function user_addresses()
    {
        return $this->hasMany(usersAddresses::class, 'userId', 'userId');
    }
}
