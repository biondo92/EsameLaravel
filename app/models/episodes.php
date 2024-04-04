<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class episodes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "episodes";
    protected $primaryKey = "episodeId";

    protected $fillable = [
        "seasonId",
        "title",
        "duration",
    ];

    public function season()
    {
        return $this->belongsTo(seasons::class, 'seasonId', 'seasonId');
    }
}
