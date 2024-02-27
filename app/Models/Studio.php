<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Studio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'branch_id',
        'basic_price',
        'additional_friday_price',
        'additional_saturday_price',
        'additional_monday_price'
    ];

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
