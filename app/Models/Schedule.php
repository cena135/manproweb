<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'waktu',
        'mata_kuliah',
        'ruangan',
        'pengawas',
        'jumlah_pengawas',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'pengawas' => 'array', // Automatically cast JSON to array
    ];

    // Limit to max 3 pengawas
    public function setPengawasAttribute($value)
    {
        $this->attributes['pengawas'] = json_encode(array_slice($value, 0, 3));
    }

    // Optional: Accessor for formatted (2/3) view
    public function getPengawasDisplayAttribute()
    {
        $pengawas = $this->pengawas ?? [];
        $count = count($pengawas);
        return "($count/3) " . implode(',', $pengawas);
    }

    public function pengawas()
    {
        return $this->belongsToMany(User::class, 'user_schedule', 'schedule_id', 'user_id');
    }
    
}

