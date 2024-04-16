<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "users";
    protected $primaryKey = "id";

    protected $fillable = [
        "userName",
        "password",
        "roleId",
        "name",
        "lastName",
        "languageId",
        "email",
        "credits"
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'roleId', 'id');
    }
    public function user_addresses()
    {
        return $this->hasMany(UsersAddresses::class, 'id', 'userId');
    }
    public function session()
    {
        return $this->hasMany(UserSession::class, 'id', 'userId');
    }
}
