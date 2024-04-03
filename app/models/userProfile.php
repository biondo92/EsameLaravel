<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class userProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "user_profiles";
    protected $primaryKey = "userId";

    protected $fillable = [
        "name",
        "lastName",
        "languageId",
        "email",
        "credits"
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'userId', 'userId');
    }
    public function language()
    {
        return $this->belongsTo(languages::class, 'languageId', 'languageId');
    }
}
