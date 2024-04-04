<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class languages extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = "languages";
    protected $primaryKey = "languageId";

    protected $fillable = [
        "description",
    ];
}
