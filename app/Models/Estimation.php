<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estimation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'items', 'lead_id',
    ];

    protected $casts = [
        'items' => 'array',
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
