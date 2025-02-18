<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Anggota extends Model
{
    protected $table = "anggota";
    protected $fillable = [
        'name',
        'npm',
        'photo',
        'jabatan_id',
        'divisi_id',
        'prodi_id',
        'facebook',
        'instagram',
        'github',
        'twitterx',
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
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($room) {
            if ($room->photo) {
                // Hapus gambar dari storage
                Storage::disk('public')->delete($room->photo);
            }
        });
    }
}
