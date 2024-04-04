<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class setting extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "settings";
    protected $primaryKey = "settingId";

    protected $fillable = [
        "code",
        "value",
        "key",
    ];
}
