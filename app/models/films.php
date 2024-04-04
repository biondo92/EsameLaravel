<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class films extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "films";
    protected $primaryKey = "filmId";

    protected $fillable = [
        "categoryId",
        "duration",
        "rating",
        "title"


    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'categoryId', 'categoryId');
    }
}
