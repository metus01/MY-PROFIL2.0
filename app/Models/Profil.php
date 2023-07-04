<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profil extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
    ];
    public function user() :HasOne
    {
        return $this->hasOne(User::class);
    }
}
