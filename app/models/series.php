<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class series extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "series";
    protected $primaryKey = "serieId";

    protected $fillable = [
        "categoryId",
        "rating",
        "title"


    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'categoryId', 'categoryId');
    }
    public function seasons()
    {
        return $this->hasMany(series::class, 'serieId', 'serieId');
    }
}
