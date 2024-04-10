<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class film extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "films";
    protected $primaryKey = "id";

    protected $fillable = [
        "categoryId",
        "duration",
        "rating",
        "title"


    ];

    public function category()
    {
        return $this->hasOne(categories::class, 'categoryId', 'id');
    }
}
