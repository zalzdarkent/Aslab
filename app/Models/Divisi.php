<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Divisi extends Model
{
    protected $table = "divisi";
    protected $fillable = [
        'name',
    ];
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'jabatan_id');
    }
}
