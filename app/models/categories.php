<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "categories";
    protected $primaryKey = "categoryId";

    public function films()
    {
        return $this->belongsTo(films::class, 'categoryId', 'categoryId');
    }
    public function series()
    {
        return $this->belongsTo(series::class, 'categoryId', 'categoryId');
    }
    public function description()
    {
        return $this->hasMany(translations::class, 'tranlationId', 'traslationId');
    }
}
