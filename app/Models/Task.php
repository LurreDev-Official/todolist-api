<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
     // Kolom yang dapat diisi (fillable) oleh mass assignment
     protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'due_date',
    ];

    // Relasi ke model User (setiap tugas dimiliki oleh satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
