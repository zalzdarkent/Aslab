<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = [
        'name',
        'npm',
        'jabatan_id',
        'divisi_id',
        'prodi_id',
    ];
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(Divisi::class, 'divisi_id');
    }

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
