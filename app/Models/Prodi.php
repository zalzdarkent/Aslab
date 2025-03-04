<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Prodi extends Model
{
    protected $table = "prodi";
    protected $fillable = [
        'name',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = Auth::id();
        });
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'prodi_id');
    }
}
