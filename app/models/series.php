<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "series";
    protected $primaryKey = "id";

    protected $fillable = [
        "categoryId",
        "rating",
        "title"


    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'categoryId', 'id');
    }
    public function seasons()
    {
        return $this->hasMany(seasons::class, 'serieId', 'id');
    }
}
