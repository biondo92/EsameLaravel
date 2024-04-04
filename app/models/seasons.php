<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class seasons extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "seasons";
    protected $primaryKey = "seasonId";

    protected $fillable = [
        "serieId",
        "title"


    ];

    public function serie()
    {
        return $this->hasOne(series::class, 'serieId', 'serieId');
    }
    public function episodes()
    {
        return $this->hasMany(episodes::class, 'seasonId', 'seasonId');
    }
}
