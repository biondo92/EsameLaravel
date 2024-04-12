<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "categories";
    protected $primaryKey = "id";

    public function films()
    {
        return $this->belongsTo(Film::class, 'categoryId', 'id');
    }
    public function series()
    {
        return $this->belongsTo(Serie::class, 'categoryId', 'id');
    }
    public function description()
    {
        return $this->hasMany(CategoryDescription::class, 'id', 'categoryId');
    }
}
