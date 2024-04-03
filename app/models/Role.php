<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = "roles";
    protected $primaryKey = "roleId";

    public function users()
    {
        return $this->hasMany(user::class, 'roleId', 'roleId');
    }
    public function description()
    {
        return $this->hasMany(translations::class, 'translationId', 'translationId');
    }
}
